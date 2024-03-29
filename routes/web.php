<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('welcome');//Afficher le texte
});

Route::get('/',[HomeController::class, 'index']);//Lier la route et le controller

Route::get('/product',[ProductController::class, 'index']);

Route::get('/product/{id}',[ProductController::class, 'index2']);


Route::get('/cart', [CartController::class, 'index']);

