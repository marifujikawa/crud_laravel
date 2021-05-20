@extends('layouts.logged')

@section('content')
    <hr>
    <div class="container">
        <h2>
            <h2>{{ __('Criar Vinho') }}</h2>
        </h2>
        @if (count($errors))
            {{ dd($errors) }}
        @endif
        <div class="container">
            <form action="/wine" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Email">
                    <label for="name">Nome:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="description" id="description">
                    <label for="description">Descrição:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="price" id="price">
                    <label for="price">Preço:</label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
