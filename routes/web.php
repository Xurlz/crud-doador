<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\DoadorController@index');

Route::get('/doador/cadastrar', 'App\Http\Controllers\DoadorController@cadastrarRegistro');
Route::get('/doador/editar/{id}', 'App\Http\Controllers\DoadorController@editarRegistro');

Route::post('/doador/create', 'App\Http\Controllers\DoadorController@create');
Route::delete('/doador/{id}', 'App\Http\Controllers\DoadorController@delete');
Route::put('/doador/{id}', 'App\Http\Controllers\DoadorController@update');
