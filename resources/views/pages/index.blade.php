@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <h3>Prodotti: {{ count($products)}}</h3>
    <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ route('product.create') }}">Aggiungi un nuovo prodotto</a></p>
    <ul>
      @foreach ($products as $product)
        <a href="{{ route('product.show', $product -> id) }}">
          <li>
            <b>{{ $product -> name }}</b>
          </li>
        </a>
      @endforeach
    </ul>
@endsection
