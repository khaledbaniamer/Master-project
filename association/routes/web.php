<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'pages/index');
Route::view('/blog', 'pages/blog');
Route::view('/contact', 'pages/contact');
Route::view('/about', 'pages/about');

Route::view('/cart', 'products/cart');
Route::view('/checkout', 'products/checkout');
Route::view('/product', 'products/product');
Route::view('/single', 'products/single_product');


Route::view('/signup', 'user/signup');
Route::view('/login', 'user/login');
Route::view('/account', 'user/account');

Route::view('/association', 'association/associations');
Route::view('/single', 'association/profile');


Route::view('admin' , 'admin/admin_master');