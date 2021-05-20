@extends('layouts.logged')
@section('content')
<hr>
<div class="container pt-5">
    <h2>{{ __('Wine') }}</h2>
    <a class="btn btn-secondary" type="button" href="{{ route('wine.create') }}">
        criar Vinho
    </a>
    <table class="table bg-white">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Criado em </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wines as $wine)
                <tr>
                    <td>{{ $wine->name }}</td>
                    <td>{{ $wine->description }}</td>
                    <td>{{ $wine->price }}</td>
                    <td>{{$wine->created_at}}</td>
                    <td>
                        <form action="/wine/{{ $wine->id }}" method="POST">
                            <div class="btn-group">
                                @csrf
                                @method("delete")
                                <a type="button" class="btn btn-primary"
                                    href="/wine/{{ $wine->id }}">Exibir</a>
                                <a type="button" class="btn btn-secondary"
                                    href="/wine/{{ $wine->id }}/edit">Editar</a>
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
