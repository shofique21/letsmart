<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminLogin');

// Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'adminDashboard'])->name('dashboard');
Route::middleware(['isAdmin'])->group(function () {
    Route::post('/admin/loginProcess', [App\Http\Controllers\Admin\AdminController::class, 'adminLoginProcess'])->name('adminLoginProcess');
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('brands', BrandController::class);
});