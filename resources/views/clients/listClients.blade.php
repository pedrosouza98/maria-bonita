@extends('layout')


@section('cabecalho')
    Clientes
@endsection

@section('conteudo')
    @if(!empty($message))
    <div class="alert alert-success">
        {{ $message  }}
    </div>
    @endif
    <a href="/clients/add" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        <?php foreach ($clients as $client): ?>
            <li class="list-group-item"> {{ $client->name }}
                <form method="get" action="/clients/{{ $client->id }}" >
                    @csrf
                    <button class="btn btn-info">Atualizar</button>
                </form>

                <form method="post" action="/clients/{{ $client->id }}" onsubmit="return confirm('Tem certeza que deseja remover esse cliente ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

@endsection
