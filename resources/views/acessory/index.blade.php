@extends('layouts.logged')
@section('content')
<hr>
<div class="container pt-5">
    <h2>{{ __('Acessory') }}</h2>
    <a class="btn btn-secondary" type="button" href="{{ route('acessory.create') }}">
        criar Acessório
    </a>
    <table class="table bg-white">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Criado em </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acessories as $acessory)
                <tr>
                    <td>{{ $acessory->name }}</td>
                    <td>{{ $acessory->description }}</td>
                    <td>{{ $acessory->amount }}</td>
                    <td>{{$acessory->created_at}}</td>
                    <td>
                        <form action="/acessory/{{ $acessory->id }}" method="POST">
                            <div class="btn-group">
                                @csrf
                                @method("delete")
                                <a type="button" class="btn btn-primary"
                                    href="/acessory/{{ $acessory->id }}">Exibir</a>
                                <a type="button" class="btn btn-secondary"
                                    href="/acessory/{{ $acessory->id }}/edit">Editar</a>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
