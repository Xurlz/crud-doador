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
    <!-- Colocar uma option inicial -->
    <select id="intervalo_doacao" name="intervalo_doacao" class="form-control">
      <option
        value="unico"
        @if(isset($intervalo_doacao) && $intervalo_doacao==='unico')
          selected
        @endif
      >
        Único
      </option>
      <option
        value="bimestral"
        @if(isset($intervalo_doacao) && $intervalo_doacao==='bimestral')
          selected
        @endif
      >
        Bimestral
      </option>
      <option
        value="semestral"
        @if(isset($intervalo_doacao) && $intervalo_doacao==='semestral')
          selected
        @endif
      >
        Semestral
      </option>
      <option
        value="anual"

        @if(isset($intervalo_doacao) && $intervalo_doacao==='anual')
          selected
        @endif
      >
        Anual
      </option>
    </select>

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
    <div class="form-check">
      <input
        class='form-check-input'
        type="radio"
        id='debito'
        name='forma_pagamento'
        value="debito"
        @if(isset($forma_pagamento) && $forma_pagamento === 'debito')
          checked
        @endif
      >
      <label class='form-check-label' for="debito">Débito</label>
    </div>
    <div class="form-check">
      <input
        class='form-check-input'
        type="radio"
        id='credito'
        name='forma_pagamento'
        value="credito"
        @if(isset($forma_pagamento) && $forma_pagamento === 'credito')
          checked
        @endif
      >
      <label class='form-check-label' for='credito'>Crédito</label>
    </div>

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