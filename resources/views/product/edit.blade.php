@extends('layouts.logged')

@section('content')
    <hr>
    <div class="container">

        <h2>{{ __('Criar Produto') }}</h2>
        @if (count($errors))
            {{ dd($errors) }}
        @endif


        <div class="container">
            <form action="/product/{{ $product->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <input type="text" name="name" value="{{ $product->name }}" id="name" placeholder="Email">
                    <label for="name">Nome:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="model" value="{{ $product->model }}" id="model">
                    <label for="model">Modelo:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="size" value="{{ $product->size }}" id="size">
                    <label for="size">Tamanho:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="description" value="{{ $product->description }}"
                        id="description">
                    <label for="description">Descrição:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="price" value="{{ $product->price }}" id="price">
                    <label for="price">Preço:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="amount" value="{{ $product->amount }}" id="amount">
                    <label for="amount">Quantidade:</label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
