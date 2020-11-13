@extends('layout')

@section('cabecalho')
    Adicionar Cliente
@endsection

@section('conteudo')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Data de Nascimento</label>
            <input type="text" class="form-control" name="dateOfBirth" id="dateOfBirth">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep">
        </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text" class="form-control" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input type="text" class="form-control" name="neighborhood" id="neighborhood">
        </div>
        <div class="form-group">
            <label for="referencePoint">Ponto de Referência</label>
            <input type="text" class="form-control" name="referencePoint" id="referencePoint">
        </div>
        <div class="form-group">
            <label for="mail">Email</label>
            <input type="text" class="form-control" name="mail" id="mail">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
