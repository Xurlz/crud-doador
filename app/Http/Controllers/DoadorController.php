<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;
use App\Http\Requests\DoadorRequest;

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
            "valor_doacao" => number_format($doador->valor_doacao,2,'.',''),
            "forma_pagamento" => $doador->forma_pagamento
        ];

        return view('doador.formulario',$dados);
    }

    public function create(DoadorRequest $request) {
        $request->validated();
        $doador = new Doador;
        $this->preencherModelComRequest($doador,$request);
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

    public function update(DoadorRequest $request)
    {
        $request->validated();   
        $doador = Doador::find($request->id);
        $this->preencherModelComRequest($doador,$request);
        $doador->save();

        return redirect('/')
        ->with(
            'mensagem',
            'Registro alterados com sucesso'
        );
    }

    private function preencherModelComRequest(Doador $model,DoadorRequest $request) {
        $model->nome = $request->nome;
        $model->cpf = $request->cpf;
        $model->email = $request->email;
        $model->telefone = $request->telefone;
        $model->endereco = $request->endereco;
        $model->data_nascimento = $request->data_nascimento;
        $model->intervalo_doacao = $request->intervalo_doacao;
        $model->valor_doacao = str_replace(',','.', $request->valor_doacao);
        $model->forma_pagamento = $request->forma_pagamento;
    }
}
