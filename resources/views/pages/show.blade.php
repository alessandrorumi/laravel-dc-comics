@extends('layouts.main-layout')
@section('head')
    <title>SHOW</title>
@endsection
@section('content')
    <h3>Prodotto n°: {{ $product -> id }}</h3>
    <ul>
      <li>
        <b>{{ $product -> name }}</b>:
        {{ $product -> price }}€
      </li>
    </ul>
@endsection
