<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;

class DoadorController extends Controller
{
    public function index() {
        $doadores = Doador::all();

        return view('index', compact('doadores'));
    }

    public function create(Request $request) {
        // Array com os dados do formulário
        !d($request->input());
        exit;
    }

    // Alterar
    public function delete(Request $request) {
        !d($request->input());
        exit;
    }
}
