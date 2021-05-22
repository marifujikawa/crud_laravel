@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $beer->name }}
                </h3>
                <form action="/beer/{{ $beer->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/beer/{{ $beer->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $beer->description }}</li>
                    <li>{{ $beer->price }}</li>
                    <li>{{ $beer->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
