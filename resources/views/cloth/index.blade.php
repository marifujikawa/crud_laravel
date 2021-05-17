@extends('layouts.logged')
@section('content')
    <hr>
    <div class="container pt-5">
        <h2>{{ __('Cloth') }}</h2>
        <a class="btn btn-secondary" type="button" href="{{ route('cloth.create') }}">
            criar Roupa
        </a>
        <table class="table bg-white">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Criado em </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cloths as $cloth)
                    <tr>
                        <td>{{ $cloth->name }}</td>
                        <td>{{ $cloth->amount }}</td>
                        <td>{{ $cloth->price }}</td>
                        <td>{{ $cloth->created_at }}</td>
                        <td>
                            <form action="/cloth/{{ $cloth->id }}" method="POST">
                                <div class="btn-group">
                                    @csrf
                                    @method("delete")
                                    <a type="button" class="btn btn-primary" href="/cloth/{{ $cloth->id }}">Exibir</a>
                                    <a type="button" class="btn btn-secondary"
                                        href="/cloth/{{ $cloth->id }}/edit">Editar</a>
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
