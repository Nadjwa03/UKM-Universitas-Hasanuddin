<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function() {
    //prefiz('admin')-> /admin/auth
    Route::prefix('auth')->group(function(){
        Route::get('/login',[AuthController::class, 'view_login']);
        Route::post('/login',[AuthController::class, 'login']);
       
    });
    Route::get('/',[AdminController::class,'index']);
});