@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <h3>Crea un prodotto</h3>
    <div class="col-md-12 d-flex justify-content-center">
      <form action="{{ route('product.store') }}" method="POST"> @csrf @method('POST')
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" placeholder="Inserisci qualcosa">
        </div>
        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" name="price" placeholder="Inserisci qualcos'altro">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
@endsection
