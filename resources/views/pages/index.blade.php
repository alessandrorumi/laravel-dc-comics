@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <div class="container">
        <h3 class="mt-5">Prodotti: {{ count($products)}}</h3>
        <p><a class="btn btn-primary mt-3" href="{{ route('product.create') }}">Aggiungi un nuovo prodotto</a></p>
        <ul class="list-group mt-3">
            @foreach ($products as $product)
                <a href="{{ route('product.show', $product->id) }}" class="list-group-item list-group-item-action">
                    <b>{{ $product->name }}</b>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
