<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::post('/mycontroller/{id?}', [MyController::class, 'myFunction']);

Route::get('/mycontroller/{id?}', [MyController::class, 'myFunction']);

Route::get('/error500', function (){
    abort(500, 'Internal Server Error');
});