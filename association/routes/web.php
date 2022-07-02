<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Manager;
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
Route::post('/signup', [UserController::class , 'signup']);

Route::view('/login', 'user/login');
Route::view('/account', 'user/account');

Route::view('/association', 'association/associations');
Route::view('/single_profile', 'association/profile');


// Admin Routes 

Route::view('admin' , 'admin/admin_master');
Route::view('admin/products' , 'admin/products');

Route::view('admin/add_product' , 'admin/add_product');
Route::post('admin/add_product' , [ProductController::class , 'add_product']);

Route::view('admin/update_product' , 'admin/update_product');


Route::get('admin/categories' , [CategoryController::class , 'show_category']);
Route::view('admin/add_category' , 'admin/add_category');
Route::post('admin/add_category' , [CategoryController::class , 'add_category']);

Route::get('admin/update_category/{id}' , [CategoryController::class,'single_category']);
Route::post('admin/update_category/{id}' , [CategoryController::class,'update_category']);

Route::get('admin/delete_category/{id1}' , [CategoryController::class,'delete_category']);


Route::get('admin/association' , [AssociationController::class , 'association']);

Route::get('admin/add_assoc' , [AssociationController::class , 'show_add_assoc']);
Route::post('admin/add_assoc' , [AssociationController::class , 'add_assoc']);

Route::get('admin/update_assoc/{id}' , [AssociationController::class , 'single_assoc']);
Route::post('admin/update_assoc/{id}' , [AssociationController::class , 'update_assoc']);

Route::get('admin/delete_assoc/{id}' , [AssociationController::class , 'delete_assoc']);


Route::view('admin/orders' , '/admin/orders');


Route::get('admin/users' , [UserController::class , 'users']);
Route::post('admin/add_user' , [UserController::class , 'add_user']);

Route::get('admin/update_user/{id}' , [UserController::class , 'single_user']);
Route::post('admin/update_user/{id}' , [UserController::class , 'update_user']);

Route::get('admin/delete_user/{id}' , [UserController::class , 'delete_user']);
Route::view('admin/add_user' , '/admin/add_user');


Route::get('/admin/managers' , [ManagerController::class,'show_managers']);
Route::view('/admin/add_managers' , '/admin/add_managers');
Route::post('/admin/add_manager' , [ManagerController::class , 'add_manager']);

Route::get('/admin/update_manager/{id}' ,[ManagerController::class , 'single_manager']);
Route::post('/admin/update_manager/{id}' , [ManagerController::class , 'update_manager']);
Route::get('/admin/delete_manager/{id}' , [ManagerController::class , 'delete_manager']);

// End Admin Routes