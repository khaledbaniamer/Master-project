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
Route::view('/single_profile', 'association/profile');


Route::view('admin' , 'admin/admin_master');
Route::view('admin/products' , 'admin/products');
Route::view('admin/add_product' , 'admin/add_product');
Route::view('admin/update_product' , 'admin/update_product');


Route::view('admin/categories' , 'admin/category');
Route::view('admin/add_category' , 'admin/add_category');
Route::view('admin/update_category' , 'admin/update_category');


Route::view('admin/association' , 'admin/association');
Route::view('admin/add_assoc' , 'admin/add_assoc');
Route::view('admin/view_assoc' , 'admin/view_assoc');