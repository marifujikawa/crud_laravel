@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $icecream->name }}
                </h3>
                <form action="/icecream/{{ $icecream->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/icecream/{{ $icecream->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $icecream->description }}</li>
                    <li>{{ $icecream->price }}</li>
                    <li>{{ $icecream->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
