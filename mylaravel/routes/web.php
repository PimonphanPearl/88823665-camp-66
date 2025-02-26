<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'add_product'])->name('product.add');
Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');
Route::get('/users', [UserController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // Added route name
Route::post('/register', [RegisterController::class, 'create']);
Route::get('product', [ProductController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/edit', [UserController::class, 'edit_action'])->name('users.update');
Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class, 'MYFUNCTION']);
Route::get('/error500', function () {
    abort(500, 'Internal Server Error');
});
Route::get('/user', function () {
    return view('users');
});
Route::get('/hello/{id?}', function ($val = "") {
    return "<h1>Hello World $val</h1>";
});

Route::post('/insert', [ProductController::class, 'insert'])->name('insert');