<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProductController;

/*
|------------------------------------------------------------------------
| Frontend Route
|------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('service', [HomeController::class, 'service']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('login', [HomeController::class, 'login']);

/*
|------------------------------------------------------------------------
| Backend Route
|------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'backend',
    'middleware' => 'auth'
],function(){
    Route::get('/', [BackendController::class, 'dashboard']);
    Route::get('dashboard', [BackendController::class, 'dashboard']);
    Route::get('employees', [BackendController::class, 'employees']);
    Route::get('employeelist', [BackendController::class, 'employeelist']);

    // Routing Resource ProductController
    Route::resource('products', ProductController::class);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
