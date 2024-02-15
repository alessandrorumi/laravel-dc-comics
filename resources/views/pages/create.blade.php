@extends('layouts.main-layout')
@section('head')
    <title>CREATE</title>
@endsection
@section('content')
    <div class="container">
        <h3 class="mt-5">Aggiungi un prodotto</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto">
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo del prodotto">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
