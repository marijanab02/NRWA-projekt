<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
   
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/store', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');      // Forma za uređivanje
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('product.update');     // Spremanje izmjena
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');  // Brisanje proizvoda

Auth::routes();


