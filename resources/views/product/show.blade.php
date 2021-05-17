@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $product->name }}
                </h3>
                <form action="/product/{{ $product->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/product/{{ $product->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $product->size }}</li>
                    <li>{{ $product->model }}</li>
                    <li>{{ $product->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
