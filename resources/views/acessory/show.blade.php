@extends('layouts.logged')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>
                    {{ $acessory->name }}
                </h3>
                <form action="/acessory/{{ $acessory->id }}" method="POST">
                    @method("delete")
                    @csrf
                    <div class="btn-group">
                        <a class="btn btn-primary" href="/acessory/{{ $acessory->id }}/edit">Editar</a>
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <ul>
                    <li>{{ $acessory->description }}</li>
                    <li>{{ $acessory->amount }}</li>
                    <li>{{ $acessory->created_at }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
