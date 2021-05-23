@extends('layouts.logged')
@section('title', 'Oi')
@section('content')

@section('content')
    <hr>
    <div class="container">
        <h2>
            <h2>{{ __('Criar Cerveja') }}</h2>
        </h2>
        <div class="container">
            <form action="/beer" method="POST">
                @csrf
                <div class="form-group">
                    @if ($errors->has('name'))
                        <input class="texto-input error" type="text" name="name" id="name" placeholder="name"
                            value="{{ old('name') }}">
                        <label for="name" class="error">Nome:</label>
                        <div class="error">{{ $errors->first('name') }}</div>

                    @else
                        <input class="texto-input" type="text" name="name" id="name" placeholder="name"
                            value="{{ old('name') }}">
                        <label for="name">Nome:</label>
                    @endif
                </div>
                  <div class="form-group">
                    @if ($errors->has('description'))
                        <input class="texto-input error" type="text" name="description" id="description" placeholder="description"
                            value="{{ old('description') }}">
                        <label for="description" class="error">Descrição:</label>
                        <div class="error">{{ $errors->first('description') }}</div>

                    @else
                        <input class="texto-input" type="text" name="float" id="float" placeholder="float"
                            value="{{ old('float') }}">
                        <label for="float">Descrição:</label>
                    @endif
                </div>
                <div class="form-group">
                    @if ($errors->has('price'))
                        <input class="texto-input error" type="text" name="price" id="price" placeholder="price"
                            value="{{ old('price') }}">
                        <label for="price" class="error">Preço:</label>
                        <div class="error">{{ $errors->first('price') }}</div>

                    @else
                        <input class="texto-input" type="text" name="price" id="price" placeholder="price"
                            value="{{ old('price') }}">
                        <label for="price">Preço:</label>
                    @endif
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
