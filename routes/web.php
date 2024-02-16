<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Rotta Index
Route::get('/', [ProductController :: class, 'index'])-> name('product.index');

// Rotta Create e Store
Route::get('/product/create', [ProductController :: class, 'create'])-> name('product.create');
Route::post('/product', [ProductController :: class, 'store'])-> name('product.store');

// Rotta Edit e Update
Route::get('/product/{id}/edit', [ProductController :: class, 'edit'])-> name('product.edit');
Route::patch('/product/{id}', [ProductController :: class, 'update'])-> name('product.update');


// Rotta Delete
route::delete('/product/{id}', [ProductController :: class, 'destroy'])-> name('product.destroy');

// Rotta Show
Route :: get('/product/{id}', [ProductController :: class, 'show'])-> name('product.show');