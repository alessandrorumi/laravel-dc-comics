@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Prodotti:</h1>
    <ul>
      @foreach ($products as $product)
      <li>
        <b>{{ $product -> name }}</b>:
        {{ $product -> price }}€
      </li>
      @endforeach
    </ul>
@endsection
