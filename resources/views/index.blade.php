@extends('layouts.base')

@section('titulo')
Doadores
@endsection

@section('conteudo')
<a href="/doador/cadastrar" class='btn btn-dark'>Cadastrar doador</a>

<table class="table">
    <tr>
        <!-- <th>Id</th> -->
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Data de nascimento</th>
        <th>Data do cadastro</th>
        <th>Intervalo de doacao</th>
        <th>Valor da doacao</th>
        <th>Forma de pagamento</th>
    </tr>
    @foreach($doadores as $doador)
        <tr>
            <!-- <td>
                {{$doador['id']}}
            </td> -->
            <td>
                {{$doador->nome}}
            </td>
            <td>
                {{$doador['cpf']}}
            </td>
            <td>
                {{$doador['email']}}
            </td>
            <td>
                {{$doador['telefone']}}
            </td>
            <td>
                {{$doador['endereco']}}
            </td>
            <td>
                {{$doador['data_nascimento']}}
            </td>
            <td>
                {{$doador['data_cadastro']}}
            </td>
            <td>
                {{$doador['intervalo_doacao']}}
            </td>
            <td>
                {{$doador['valor_doacao']}}
            </td>
            <td>
                {{$doador['forma_pagamento']}}
            </td>
            <td>
                <form method="get" action="/doador/editar/{{$doador->id}}">
                    @csrf
                    <button class="btn btn-primary">Editar</button>
                </form>
            </td>
            <td>
                <form method='post' action="/doador/{{$doador->id}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection