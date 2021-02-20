<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoadorController extends Controller
{
    public function index() {
        return view('index');
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
