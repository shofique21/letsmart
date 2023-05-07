<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminLogin');

// Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'adminDashboard'])->name('dashboard');
Route::middleware(['isAdmin'])->group(function () {
    Route::post('/admin/loginProcess', [App\Http\Controllers\Admin\AdminController::class, 'adminLoginProcess'])->name('adminLoginProcess');
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
});