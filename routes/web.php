<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route :: get('/', [EmployeeController :: class, 'index'])->name('users.index');
