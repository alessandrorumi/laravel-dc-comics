@extends('layouts.main-layout')
@section('head')
    <title>SHOW</title>
@endsection
@section('content')
    <div class="container">
        <h3 class="mt-5">Prodotto n°: {{ $product->id }}</h3>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->price }}€</p>
            </div>
        </div>
    </div>
@endsection
