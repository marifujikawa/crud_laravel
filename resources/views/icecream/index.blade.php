@extends('layouts.logged')
@section('content')
    <hr>
    <div class="container pt-5">
        <h2>{{ __('Icecream') }}</h2>
        <a class="btn btn-secondary" type="button" href="{{ route('icecream.create') }}">
            criar Sorvete
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
                @foreach ($icecreams as $icecream)
                    <tr>
                        <td>{{ $icecream->name }}</td>
                        <td>{{ $icecream->description }}</td>
                        <td>{{ $icecream->price }}</td>
                        <td>{{ $icecream->created_at }}</td>
                        <td>
                            <form action="/icecream/{{ $icecream->id }}" method="POST">
                                <div class="btn-group">
                                    @csrf
                                    @method("delete")
                                    <a type="button" class="btn btn-primary"
                                        href="/icecream/{{ $icecream->id }}">Exibir</a>
                                    <a type="button" class="btn btn-secondary"
                                        href="/icecream/{{ $icecream->id }}/edit">Editar</a>
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
