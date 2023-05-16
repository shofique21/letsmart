<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/category/{id}', [App\Http\Controllers\FrontendProductController::class, 'categoryProducts'])->name('products');
Route::get('/products/category/subcategory/{id}', [App\Http\Controllers\FrontendProductController::class, 'subcategoryProducts'])->name('subcategory-products');
Route::get('/product-details/{id}', [App\Http\Controllers\FrontendProductController::class, 'productDetails'])->name('product-details');
