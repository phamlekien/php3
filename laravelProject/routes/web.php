<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product/add',[ProductController::class, 'index'])->name('index');

Route::get('/product/add',[ProductController::class, 'addProduct'])->name('addProduct');

route::post('/product/add',[ProductController::class,'storeProduct'])->name('product.store');

//route::get('/',[TinController::class,'index']);

// route::get('/lienhe',[TinController::class,'lienhe']);

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

route::get('categories/add',[ProductController::class,'index'])->name('index');


Route::get('/', [TinController::class, 'index']);
Route::get('/tin-tuc/{id}', [TinController::class, 'chiTietTin']);
Route::get('/loai-tin/{id}', [TinController::class, 'tinTheoLoai']);
Route::get('/tim-kiem', [TinController::class, 'timKiem']);

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store']);

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

