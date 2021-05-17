@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $cloth->name }}
                </h3>
                <form action="/cloth/{{ $cloth->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/cloth/{{ $cloth->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $cloth->price }}</li>
                    <li>{{ $cloth->amount }}</li>
                    <li>{{ $cloth->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
