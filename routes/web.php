<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/authenticate',[LoginController::class,'authenticate'])->name('login.authenticate');
});




Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
    Route::post('/logout', [LogoutController::class,'logout'])->name('logout');
});
