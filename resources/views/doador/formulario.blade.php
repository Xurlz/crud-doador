@extends('layouts.base')

@section('titulo')
  @if(isset($id))
    Editar Doador
  @else
    Cadastrar Doador
  @endif
@endsection

@section('conteudo')

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(isset($id))
  <form method='post' action='/doador/{{$id}}'>
  @method('PUT')
@else
  <form method='post' action='/doador/create'>
@endif
  @csrf
  <div class="formgroup">
    <!-- Nome -->
    <label>Nome</label>

    <input
      class='form-control'
      name='nome'
      type="text"
      @if(isset($id))
        value="{{$nome}}"
      @endif
    >

    <!-- CPF -->
    <label>CPF</label>
    <input
      class='form-control'
      name="cpf"
      type="text"
      @if(isset($id))
        value="{{$cpf}}"
      @endif
    >

    <!-- EMAIL -->
    <label>Email</label>
    <input
      class='form-control'
      name="email"
      type="text"
      @if(isset($id))
        value="{{$email}}"
      @endif
    >

    <!-- Telefone -->
    <label>Telefone</label>
    <input
      class='form-control'
      name="telefone"
      type="text"
      @if(isset($id))
        value="{{$telefone}}"
      @endif
    >

    <!-- Endereço -->
    <label>Endereço</label>
    <input
      class='form-control'
      name="endereco"
      type="text"
      @if(isset($id))
        value="{{$endereco}}"
      @endif
    >

    <!-- Data nascimento -->
    <label>Data de nascimento</label>
    <input
      class='form-control'
      name="data_nascimento"
      type="date"
      @if(isset($id))
        value="{{$data_nascimento}}"
      @endif
    >

    <!-- Intervalo de doaçao   -->
    <label>Intervalo de doação</label>
    <input type="radio" name='intervalo_doacao' value="unico"> Único </input>
    <input type="radio" name='intervalo_doacao' value="bimestral"> Bimestral </input>
    <input type="radio" name='intervalo_doacao' value="semestral"> Semestral </input>
    <input type="radio" name='intervalo_doacao' value="anual"> Anual </input>

    <!-- Valor doação   -->
    <label>Valor doação</label>
    <input
      class='form-control'
      name="valor_doacao"
      type="text"
      @if(isset($id))
        value="{{$valor_doacao}}"
      @endif
    >

    <!-- Forma de pagamento -->
    <label>Forma de pagamento</label>
    <input type="radio" name='forma_pagamento' value="debito">Débito</input>
    <input type="radio" name='forma_pagamento' value="credito">Crédito</input>

    <!-- Botão de envio -->
    <div class="row">
      <button class="btn btn-primary">
        @if(isset($id))
          {{'Editar'}}
        @else
          {{'Cadastrar'}}
        @endif
      </button>
    </div>
  </div>
</form>
@endsection