<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Rotta Index
Route::get('/', [ProductController :: class, 'index'])-> name('product.index');

// Rotta Show
Route :: get('/product/{id}', [ProductController :: class, 'show'])-> name('product.show');