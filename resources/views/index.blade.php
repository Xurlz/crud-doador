@extends('layout')

<!-- Apagar -->
@php
$doadores = Array(
    Array(
        "id" => "1",
        "nome" => "Desivaldo",
        "cpf" => "123-1312-31313",
        "email" => "mail@mail.com",
        "telefone" => "1111111",
        "endereco" => "foobar",
        "data_nascimento" => "12/12/3123",
        "data_cadastro" => "12/12/12",
        "intervalo_doacao" => "foo",
        "valor_doacao" => "123,00",
        "forma_pagamento" => "Credito",
    ),
    Array(
        "id" => "2",
        "nome" => "Desivaldo",
        "cpf" => "123-1312-31313",
        "email" => "mail@mail.com",
        "telefone" => "1111111",
        "endereco" => "foobar",
        "data_nascimento" => "12/12/3123",
        "data_cadastro" => "12/12/12",
        "intervalo_doacao" => "foo",
        "valor_doacao" => "123,00",
        "forma_pagamento" => "Credito",
    )
);
@endphp

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
                {{$doador['nome']}}
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
                @csrf
                <form method="post">
                    <button class="btn btn-primary" href="doador/update/{{$doador['id']}}" >Editar</button>
                </form>
            </td>
            <td>
                @csrf
                <form method="post">
                    <button class="btn btn-danger" href="doador/delete/{{$doador['id']}}" >Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection