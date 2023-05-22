<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StripePaymentController;
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
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('confirm', [CartController::class, 'confirmAllCart'])->name('cart.confirm')->middleware('auth');
Route::post('payment-confirm', [CartController::class, 'paymentConfirm'])->name('payment.confirm')->middleware('auth');
Route::get('order-invoice', [InvoiceController::class, 'userInvoice'])->name('order.invoice')->middleware('auth');
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
