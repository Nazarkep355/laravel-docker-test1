<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/test",[\App\Http\Controllers\TestController::class,'test'])->middleware('auth')->name('test');

Route::get("/login",[\App\Http\Controllers\TestController::class,'loginForm'])->name('login');

Route::post('/login',[\App\Http\Controllers\TestController::class,'login'])->name('loginForm');
