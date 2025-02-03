<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

//ระบุ part url ตัว route
Route::get('/home',
    [HomeController::class, 'home']);

Route::get('/',
    [HomeController::class, 'home']);

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register' ,
    [RegisterController::class, 'index']);

Route::post('/register' ,
    [RegisterController::class, 'create']);

// Route User
    Route::get('/users' ,[UserController::class, 'index'] );
    Route::get('/user/{id}',[UserController::class, 'edit']);
    Route::put('/user',[UserController::class, 'edit_action']); 
    Route::delete('/user',[UserController::class, 'delete']); 



Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get("/mycontroller/{id?}",
    [MyController::class, 'myfunction']);

Route::post("/mycontroller/{id?}",
    [MyController::class, 'myfunction']);

Route::get('/500', function () {
        abort(500);
    });

Route::get('/404', function () {
        abort(404);
    });
