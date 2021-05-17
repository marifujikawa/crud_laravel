@extends('layouts.logged')

@section('content')
    <hr>
    <div class="container">

        <h2>{{ __('Criar Acessório') }}</h2>
        @if (count($errors))
            {{ dd($errors) }}
        @endif


        <div class="container">
            <form action="/acessory/{{ $acessory->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <input type="text" name="name" value="{{ $acessory->name }}" id="name" placeholder="Email">
                    <label for="name">Nome:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="description" value="{{ $acessory->description }}"
                        id="description">
                    <label for="description">Descrição:</label>
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" name="amount" value="{{ $acessory->amount }}" id="amount">
                    <label for="amount">Quantidade:</label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
