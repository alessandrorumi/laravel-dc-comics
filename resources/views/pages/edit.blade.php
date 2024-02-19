@extends('layouts.main-layout')
@section('head')
    <title>EDIT</title>
@endsection
@section('content')
    <div class="container">
        <h3 class="mt-5">Modifica un prodotto</h3>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{ ($product-> name) }}">
                        @error('name')
                            <div class="alert alert-danger">{{ 'Il nome non può essere inferiore a 3 caratteri' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" name="price" value="{{ ($product-> price) }}">
                        @error('price')
                            <div class="alert alert-danger">{{ 'Inserisci un numero' }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
