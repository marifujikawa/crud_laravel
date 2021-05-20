@extends('layouts.logged')

@section('content')
    <hr>
    <div class="container">

        <h2>{{ __('Criar Vinho') }}</h2>
        @if (count($errors))
            {{ dd($errors) }}
        @endif


        <div class="container">
            <form action="/wine/{{ $wine->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <input type="text" name="name" value="{{ $wine->name }}" id="name" placeholder="Email">
                    <label for="name">Nome:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="description" value="{{ $wine->description }}"
                        id="description">
                    <label for="description">Descrição:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="price" value="{{ $wine->price }}" id="price">
                    <label for="price">Preço:</label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
