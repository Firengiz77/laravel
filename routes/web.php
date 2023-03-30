<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/login',[MainController::class,'login'])->name('login');
Route::get('/register',[MainController::class,'register'])->name('register');
