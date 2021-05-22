@extends('layouts.logged')
@section('content')
<hr>
<div class="container pt-5">
    <h2>{{ __('Beer') }}</h2>
    <a class="btn btn-secondary" type="button" href="{{ route('beer.create') }}">
        criar Cerveja
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
            @foreach ($beers as $beer)
                <tr>
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->description }}</td>
                    <td>{{ $beer->price }}</td>
                    <td>{{$beer->created_at}}</td>
                    <td>
                        <form action="/beer/{{ $beer->id }}" method="POST">
                            <div class="btn-group">
                                @csrf
                                @method("delete")
                                <a type="button" class="btn btn-primary"
                                    href="/beer/{{ $beer->id }}">Exibir</a>
                                <a type="button" class="btn btn-secondary"
                                    href="/beer/{{ $beer->id }}/edit">Editar</a>
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
