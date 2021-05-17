@extends('layouts.logged')
<hr>
<div class="container pt-5">
    <h2>{{ __('Product') }}</h2>
    <a class="btn btn-secondary" type="button" href="{{ route('product.create') }}">
        criar produto
    </a>
    <table class="table bg-white">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Modelo</th>
                <th>Descrição</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <form action="/product/{{ $product->id }}" method="POST">
                            <div class="btn-group">
                                @csrf
                                @method("delete")
                                <a type="button" class="btn btn-primary"
                                    href="/product/{{ $product->id }}">Exibir</a>
                                <a type="button" class="btn btn-secondary"
                                    href="/product/{{ $product->id }}/edit">Editar</a>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>
