<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/products',[ProductController::class,'index'])->name('product.index');
    Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/products/{product}',[ProductController::class,'show'])->name('product.show');
    Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
    // Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
    // Route::put('products/{product}', [ProductController::class,'update'])->name('product.update');
    Route::delete('products/delete/{product}', [ProductController::class,'destroy'])->name('product.delete');
});

