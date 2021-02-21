@extends('layout')

@section('titulo')
Cadastrar Doador
@endsection

@section('conteudo')
<!-- Utilizar classes próprias para formulario (bootstrap) -->
<form method='post' action='/doador/create'>
  <!-- Nome -->
  <div class="row">
    <div class="col">
      <label>Nome</label>
    </div>
    <div class="col">
      <input name='nome' type="text">
    </div>
  </div>

  <!-- CPF -->
  <div class="row">
    <div class="col">
      <label>CPF</label>
    </div>
    <div class="col">
      <input name="cpf" type="text">
    </div>
  </div> 

  <!-- EMAIL -->
  <div class="row">
    <div class="col">
      <label>Email</label>
    </div>
    <div class="col">
      <input name="email" type="text">
    </div>
  </div>

  <!-- Telefone -->
  <div class="row">
    <div class="col">
      <label>Telefone</label>
    </div>
    <div class="col">
      <input name="telefone" type="text">
    </div>
  </div>

  <!-- Endereço -->
  <div class="row">
    <div class="col">
      <label>Endereço</label>
    </div>
    <div class="col">
      <input name="endereco" type="text">
    </div>
  </div> 

  <!-- Data nascimento -->
  <div class="row">
    <div class="col">
      <label>Data de nascimento</label>
    </div>
    <div class="col">
      <input name="data_nascimento" type="date">
    </div>
  </div>

  <!-- Intervalo de doaçao   -->
  <div class="row">
    <div class='col'>
      <label>Intervalo de doação</label>
    </div>
    <div class="col">
      <input type="radio" name='intervalo_doacao' value="unico"> Único </input>
      <input type="radio" name='intervalo_doacao' value="bimestral"> Bimestral </input>
      <input type="radio" name='intervalo_doacao' value="semestral"> Semestral </input>
      <input type="radio" name='intervalo_doacao' value="anual"> Anual </input>
    </div>
  </div>

  <!-- Valor doação   -->
  <div class="row">
    <div class="col">
      <label>Valor doação</label>
    </div>
    <div class="col">
      <input name="valor_doacao" type="text">
    </div>
  </div> 

  <!-- Forma de pagamento -->
  <div class="row">
    <div class="col">
      <label>Forma de pagamento</label>
    </div>
    <div class="col">
      <input type="radio" name='forma_pagamento' value="debito">Débito</input>
      <input type="radio" name='forma_pagamento' value="credito">Crédito</input>
    </div>
  </div> 

  <!-- Botão de envio -->
  @csrf
  <div class="row">
    <button class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection