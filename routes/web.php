<?php

use App\Http\Controllers\RegisterLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function(){
    return view('home');
});

Route::middleware(['guest'])->group(function (){
    Route::get('login', [RegisterLoginController::class, 'ViewLogin'])->name('login');
    Route::post('login', [RegisterLoginController::class, 'login'])->name('login');

    Route::get('register', [RegisterLoginController::class, 'ViewRegister'])->name('register');
    Route::post('register', [RegisterLoginController::class, 'Register'])->name('register');
});


Route::middleware(['auth'])->group(function (){
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('colors', \App\Http\Controllers\ColorController::class);
    Route::resource('brands', \App\Http\Controllers\BrandController::class);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
});
