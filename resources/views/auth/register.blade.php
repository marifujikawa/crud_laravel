@extends('layouts.app')
@section('title', 'Oi')
@section('content')
    <div class="container-fluid d-flex justify-content-center flex-column align-items-center">
        <div class="container d-flex font-weight-bold">
            <h1>Cadastre-se</h1>
        </div>
        <form action="register" method="POST">
            @csrf
            <div class="form-group">
                @if ($errors->has('name'))

                    <input class="texto-input error" type="text" name="name" id="name" placeholder="name"
                        value="{{ old('name') }}">
                    <label for="name" class="error">Nome</label>
                    <div class="error">{{ $errors->first('name') }}</div>
                @else
                    <input class="texto-input" type="text" name="name" id="name" placeholder="name"
                        value="{{ old('name') }}">
                    <label for="name">Nome</label>

                @endif

            </div>
            <div class="form-group">
                @if ($errors->has('lastname'))

                    <input class="texto-input error" type="text" name="lastname" id="lastname" placeholder="lastname"
                        value="{{ old('lastname') }}">
                    <label for="lastname" class="error">Sobrenome</label>
                    <div class="error">{{ $errors->first('lastname') }}</div>
                @else
                    <input class="texto-input" type="text" name="lastname" id="lastname" placeholder="lastname"
                        value="{{ old('lastname') }}">
                    <label for="lastname">Sobrenome</label>

                @endif

            </div>
            <div class="form-group">
                @if ($errors->has('email'))

                    <input class="texto-input error" type="text" name="email" id="email" placeholder="email"
                        value="{{ old('email') }}">
                    <label for="email" class="error">E-mail</label>
                    <div class="error">{{ $errors->first('email') }}</div>
                @else
                    <input class="texto-input" type="text" name="email" id="email" placeholder="email"
                        value="{{ old('email') }}">
                    <label for="email">E-mail</label>

                @endif

            </div>
            <div class="form-group">
                @if ($errors->has('password'))

                    <input class="texto-input error" type="password" name="password" id="password" placeholder="password"
                        value="{{ old('password') }}">
                    <label for="password" class="error">Senha</label>
                    <div class="error">{{ $errors->first('password') }}</div>
                @else
                    <input class="texto-input" type="password" name="password" id="password" placeholder="password"
                        value="{{ old('password') }}">
                    <label for="password">Senha</label>

                @endif

            </div>
            <div class="form-group">
                @if ($errors->has('password'))

                    <input class="texto-input error" type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="password_confirmation" value="{{ old('password_confirmation') }}">
                    <label for="password_confirmation" class="error">Confirmar senha</label>
                    <div class="error">{{ $errors->first('password_confirmation') }}</div>
                @else
                    <input class="texto-input" type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirmação de password" value="{{ old('password_confirmation') }}">
                    <label for="password_confirmation">Confirmar senha</label>
                @endif

            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn botao-register">Cadastrar-se</button>
            </div>
            <div class="py-4 cadastro d-flex justify-content-center">
                <span class="px-2"> Já é cadastrado? </span>
                <a href="/login"> Login </a>
            </div>
        </form>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
