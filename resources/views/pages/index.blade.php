@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <h3>Prodotti: {{ count($products)}}</h3>
    <ul>
      @foreach ($products as $product)
      <li>
        <b>{{ $product -> name }}</b>
      </li>
      @endforeach
    </ul>
@endsection
