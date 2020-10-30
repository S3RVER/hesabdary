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
})->name('home')->middleware('auth');

Route::get('login',[\App\Http\Controllers\LoginController::class,'loginForm'])
    ->name('login')
    ->middleware('guest');
Route::get('logout/{id}',[\App\Http\Controllers\LoginController::class,'logout'])
    ->name('logout');
//    ->middleware('guest');

Route::post('signin',[\App\Http\Controllers\LoginController::class,'login'])
    ->name('signin');
//    ->middleware('guest');

Route::get('register',[\App\Http\Controllers\RegisterController::class,'registrationForm'])
    ->name('registrationForm')
    ->middleware('guest');

Route::post('register',[\App\Http\Controllers\RegisterController::class,'register'])
    ->name('register')
    ->middleware('guest');





//Route::middleware(['guest'])->group(function (){
//    Route::get('login', [RegisterLoginController::class, 'ViewLogin'])->name('login');
//    Route::post('login', [RegisterLoginController::class, 'login'])->name('login');
//
//    Route::get('register', [RegisterLoginController::class, 'ViewRegister'])->name('register');
//    Route::post('register', [RegisterLoginController::class, 'Register'])->name('register');
//});


Route::middleware(['auth'])->group(function (){
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('colors', \App\Http\Controllers\ColorController::class);
    Route::resource('brands', \App\Http\Controllers\BrandController::class);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::get('products/increment/{id}', [\App\Http\Controllers\ProductController::class,'increment'])->name('products.increment');
    Route::get('products/decrement/{id}', [\App\Http\Controllers\ProductController::class,'decrement'])->name('products.decrement');
});
