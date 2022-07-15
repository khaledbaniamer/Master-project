<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
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


// User middleware if he logged in 

Route::group(['middleware'=>['user']], function(){
    
    Route::view('/signup', 'user/signup');
    Route::view('/login', 'user/login');
    Route::post('/signup', [UserController::class , 'signup']);
    Route::post('/login', [UserController::class , 'login']);


});

// End User middleware

Route::get('/logout' , [UserController::class , 'logout']);
Route::get('/account', [UserController::class , 'account']);
Route::post('/account', [UserController::class , 'update_account']);


Route::view('/admin_login', 'user/admin_login');
Route::post('/admin_login', [AdminController::class , 'admin_login']);



// Admin Routes 

Route::group(['middleware'=>['admin']], function(){


Route::get('admin/admins',[AdminController::class , 'show_admins']);
Route::view('admin/add_admin' , 'admin/add_admin');

Route::post('admin/add_admin' , [AdminController::class , 'add_admin']);
Route::get('admin/update_admin/{id}' , [AdminController::class , 'show_update_admin']);

Route::post('admin/update_admin' , [AdminController::class , 'update_admin']);

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
});
// End Admin Routes


// Manager Routes

// manager middleware
Route::group(['middleware'=>['manager']],function(){

    Route::get('/assoc_products/{id}', [AssociationController::class , 'assoc_products']);

    Route::get('/edit_assoc/{id}', [AssociationController::class , 'show_edit_assoc']);
    Route::post('/edit_assoc', [AssociationController::class , 'edit_assoc']);

    Route::get('/asscoc_addNewProduct/{id}' , [AssociationController::class , 'add_new_product_form']);
    Route::post('/assoc_add_product' , [AssociationController::class , 'add_new_product']);

    Route::get('/delete_product/{id}' , [AssociationController::class , 'delete_product']);

    Route::post('add_assoc_email' , [AssociationController::class , 'assoc_register_email']);
    Route::get('add_assoc_email' , [AssociationController::class , 'assoc_email']);

});

Route::get('/association', [AssociationController::class , 'user_association']);
Route::get('/assoc_profile/{id}', [AssociationController::class , 'assoc_profile']);

Route::get('/update_product/{id}' , [AssociationController::class , 'update_product_form']);
Route::post('/update_product' , [AssociationController::class , 'update_product']);

Route::get('assoc_register' , [AssociationController::class , 'show_assoc_register']);
Route::post('assoc_register' , [AssociationController::class , 'assoc_register']);

// End Manager Routes

// restrict page
Route::view('/restrict' , 'pages/restrict');


