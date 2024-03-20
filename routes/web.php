<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// All Users
Route::get('/', function () {
    return view('home');
});

Route::get('/searchProduct', [ProductController::class, 'searchProduct'])->name('product.search');

Route::get('/product/{category_id}', [ProductController::class, 'indexByCategory'])->name('product.category');

Route::get('/product/detail/{product_id}', [ProductController::class, 'showDetail'])->name('product.detail');

// Auth
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');

Route::post('/loginAction', [AuthController::class, 'loginAction'])->name('auth.loginAction');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/registerAction', [AuthController::class, 'registerAction'])->name('auth.registerAction');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


// Admin
Route::middleware('auth.admin')->group(function(){

    Route::prefix('/admin')->group(function(){
        Route::get('/readProduct', [ProductController::class, 'index'])->name('admin.home');
        Route::get('/searchProduct', [ProductController::class, 'searchProductAdmin'])->name('searchAdmin');
        Route::get('/addForm', function(){return view('admin.addForm');})->name('admin.addForm');
        Route::post('/createProduct', [ProductController::class, 'addProduct'])->name('admin.createProduct');
        Route::get('/update/{id}' , [ProductController::class , 'updateProductForm'])->name('admin.update');
        Route::patch('/updating/{id}' , [ProductController::class , 'updateProductLogic'])->name('admin.updating');
        Route::delete('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.delete');
    });
    
});


// Customer
Route::middleware('auth.customer')->group(function(){
    
    Route::prefix('/customer')->group(function() {
        Route::get('/cart/add/{product_id}', [UserController::class, 'addCart'])->name('cart.add');
        Route::get('/cart/delete/{product_id}', [UserController::class, 'deleteCart'])->name('cart.delete');
        Route::get('/cart', [UserController::class, 'viewCart'])->name('cart.view');
        Route::get('/transaction/create', [UserController::class, 'createTransaction'])->name('transaction.create');
        Route::get('/transaction/history', [UserController::class, 'viewTransactionHistory'])->name('transaction.history');
    });

});

//Admin & Customer
Route::middleware('auth')->group(function(){

    Route::get('/profile', [AuthController::class, 'showProfile'])->name('auth.profile');

});