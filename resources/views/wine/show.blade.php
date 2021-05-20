@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $wine->name }}
                </h3>
                <form action="/wine/{{ $wine->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/wine/{{ $wine->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $wine->description }}</li>
                    <li>{{ $wine->price }}</li>
                    <li>{{ $wine->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
