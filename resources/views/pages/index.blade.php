@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row col-6">
            <h3 class="mt-5">Prodotti: {{ count($products)}}</h3>
            <p><a class="btn btn-primary mt-3" href="{{ route('product.create') }}">Aggiungi un nuovo prodotto</a></p>
            <ul class="list-group mt-3">
                @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-around">
                    <a href="{{ route('product.show', $product->id) }}">
                        <b>{{ $product->name }}</b>
                    </a>

                    <a href="{{ route('product.edit', $product->id) }}">Modifica</a>

                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Rimuovi">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
