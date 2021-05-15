@extends('layouts.app')
@section('title', 'Oi')
@section('content')
    <div class="container-fluid d-flex justify-content-center flex-column align-items-center">
        <div class="container d-flex font-weight-bold">
            <h1>Cadastre-se</h1>
        </div>
        <form action="/register" method="POST">
            <div class="form-group">
                @if ($errors->has('name'))

                    <input class="texto-input error" type="text" name="name" id="name" placeholder="name">
                    <div class="error">{{ $errors->first('name') }}</div>
                @else
                    <input class="texto-input" type="text" name="name" id="name" placeholder="name">
                @endif
                <label for="nome">Nome</label>
            </div>
            <div class="form-group">
                @if ($errors->has('lastname'))

                    <input class="texto-input error" type="text" name="lastname" id="lastname" placeholder="lastname">
                    <div class="error">{{ $errors->first('lastname') }}</div>
                @else
                    <input class="texto-input" type="text" name="lastname" id="lastname" placeholder="lastname">
                @endif
                <label for="nome">Sobrenome</label>
            </div>
            <div class="form-group">
                @if ($errors->has('email'))

                    <input class="texto-input error" type="text" name="email" id="email" placeholder="email">
                    <div class="error">{{ $errors->first('email') }}</div>
                @else
                    <input class="texto-input" type="text" name="email" id="email" placeholder="email">
                @endif
                <label for="nome">E-mail</label>
            </div>
            <div class="form-group">
                @if ($errors->has('password'))

                    <input class="texto-input error" type="text" name="password" id="password" placeholder="password">
                    <div class="error">{{ $errors->first('password') }}</div>
                @else
                    <input class="texto-input" type="text" name="password" id="password" placeholder="password">
                @endif
                <label for="nome">Senha</label>
            </div>
            <div class="form-group">
                @if ($errors->has('password'))

                    <input class="texto-input error" type="text" name="password" id="password" placeholder="password">
                    <div class="error">{{ $errors->first('password') }}</div>
                @else
                    <input class="texto-input" type="text" name="password" id="password" placeholder="password">
                @endif
                <label for="nome">Confirmar senha</label>
            </div>
            <div class="d-flex justify-content-center align-items-center">

                <button type="submit" class="btn botao-register">Cadastrar-se</button>
            </div>
        </form>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
