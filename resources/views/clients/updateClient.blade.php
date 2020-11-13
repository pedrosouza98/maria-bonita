@extends('layout')

@section('cabecalho')
    Atualizar Cliente
@endsection

@section('conteudo')
    <form method="post" action="/clients/{{ $client->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" value="{{  $client->name }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{  $client->phone }}">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Data de Nascimento</label>
            <input type="text" class="form-control" name="dateOfBirth" id="dateOfBirth" value="{{  $client->dateOfBirth }}">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" value="{{  $client->cep }}">
        </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text" class="form-control" name="address" id="address" value="{{  $client->address }}">
        </div>
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="{{  $client->neighborhood }}">
        </div>
        <div class="form-group">
            <label for="referencePoint">Ponto de Referência</label>
            <input type="text" class="form-control" name="referencePoint" id="referencePoint" value="{{  $client->referencePoint }}">
        </div>
        <div class="form-group">
            <label for="mail">Email</label>
            <input type="text" class="form-control" name="mail" id="mail" value="{{  $client->mail }}">
        </div>
        <button class="btn btn-primary">Atualizar</button>
    </form>
@endsection
