<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::get('/', [ProductController::class, 'product']);


Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('login', [UserController::class, 'login']);
Route::get('details/{id}', [ProductController::class, 'details']);
Route::get('search', [ProductController::class, 'search']);
Route::post('add_to_cart', [ProductController::class, 'AddToCart']);
Route::get('cartlist', [ProductController::class, 'CartList']);
Route::get('removecart/{id}', [ProductController::class, 'removeCart']);
Route::get('ordernow', [ProductController::class, 'orderNow']);
Route::post('orderplace', [ProductController::class, 'orderPlace']);
Route::get('myorders', [ProductController::class, 'myOrders']);
Route::post('register', [UserController::class, 'Register']);



