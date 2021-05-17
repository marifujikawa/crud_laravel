@extends('layouts.app')
@section('title', 'Oi')
@section('content')

    <div class="container-fluid d-flex justify-content-center flex-column align-items-center">
        <div class="container d-flex font-weight-bold">
            <h1>Oi</h1>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">

                @if ($errors->has('email'))
                    <input class="texto-input error" type="text" name="email" id="email" placeholder="Email"
                        value="{{ old('email') }}">
                    <label for="email" class="error">E-mail</label>
                    <div class="error">{{ $errors->first('email') }}</div>

                @else
                    <input class="texto-input" type="text" name="email" id="email" placeholder="Email"
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
            <div class="form-group-checkbox">
                <label>Manter-se conectado <input class="checkbox" type='checkbox' name='remember'
                        value="{{ old('checkbox') }}"></label>

            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class=" btn botao-login">Entrar</button>
            </div>
        </form>
        <div class="py-4 cadastro">
            <span>Não tem uma conta?</span>
            <a href="/register"> Cadastre-se </a>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
