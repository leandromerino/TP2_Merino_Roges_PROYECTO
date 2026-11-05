<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [ProductController::class, 'categories'])
    ->name('products.categories');

Route::get('/menu/{category}', [ProductController::class, 'index'])
    ->name('products.index');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('categories', CategoryController::class)
        ->except(['show']);

});