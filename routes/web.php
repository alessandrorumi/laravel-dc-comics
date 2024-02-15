<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Rotta Index
Route::get('/', [ProductController :: class, 'index'])-> name('product.index');

// Rotta Create e Store
Route::get('/product/create', [ProductController :: class, 'create'])-> name('product.create');
Route::post('/product', [ProductController :: class, 'store'])-> name('product.store');

// Rotta Show (lasciare per ultima per evitare problemi)
Route :: get('/product/{id}', [ProductController :: class, 'show'])-> name('product.show');