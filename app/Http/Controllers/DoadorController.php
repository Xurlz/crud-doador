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

    public function cadastrarRegistro() {
        return view('doador.formulario');
    }

    public function editarRegistro(Request $request) {
        $id = $request->id;
        $doador = Doador::find($id);

        $dados = [
            "id" => $doador->id,
            "nome" => $doador->nome,
            "cpf" => $doador->cpf,
            "email" => $doador->email,
            "telefone" => $doador->telefone,
            "endereco" => $doador->endereco,
            "data_nascimento" => $doador->data_nascimento,
            "intervalo_doacao" => $doador->intervalo_doacao,
            "valor_doacao" => $doador->valor_doacao,
            "forma_pagamento" => $doador->forma_pagamento
        ];

        return view('doador.formulario',$dados);
    }

    public function create(Request $request) {
        $doador = new Doador;
        $doador->nome = $request->nome;
        $doador->cpf = $request->cpf;
        $doador->email = $request->email;
        $doador->telefone = $request->telefone;
        $doador->endereco = $request->endereco;
        $doador->data_nascimento = $request->data_nascimento;
        $doador->intervalo_doacao = $request->intervalo_doacao;
        $doador->valor_doacao = $request->valor_doacao;
        $doador->forma_pagamento = $request->forma_pagamento;

        $doador->save();

        return redirect('/')
            ->with(
                'mensagem',
                'Doador registrado com sucesso!'
            );
    }

    public function delete(Request $request) {
        Doador::destroy($request->id);

        return redirect('/')
            ->with(
                'mensagem',
                'Registro removido com sucesso'
            );
    }

    public function update(Request $request)
    {
        $doador = Doador::find($request->id);
        //Posso extrair este bloco
        $doador->nome = $request->nome;
        $doador->cpf = $request->cpf;
        $doador->email = $request->email;
        $doador->telefone = $request->telefone;
        $doador->endereco = $request->endereco;
        $doador->data_nascimento = $request->data_nascimento;
        $doador->intervalo_doacao = $request->intervalo_doacao;
        $doador->valor_doacao = $request->valor_doacao;
        $doador->forma_pagamento = $request->forma_pagamento;

        $doador->save();

        return redirect('/')
        ->with(
            'mensagem',
            'Registro alterados com sucesso'
        );
    }
}
