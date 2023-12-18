<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home product showing
Route::get('/',([App\Http\Controllers\HomeController::class,'index']))->name('home');
Route::get('/detail/{id}',([App\Http\Controllers\HomeController::class,'productDetail']));
Route::get('/contact', function () {return view('contact');});
//Contact Session
Route::post('/contact-us',([App\Http\Controllers\HomeController::class,'contactUs']));
Auth::routes();




//Middleware = request filter
Route::group(['middleware'=>['auth']],function(){
    //Logout Session
    Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
});


//superAdmin middleware
Route::group(['middleware'=>['superadmin']],function(){
    // admin list
    Route::get('/admin/list',([App\Http\Controllers\UserController::class,'index']))->name('admin-list');
    //Admin Creation
    Route::get('/create-admin', function () {return view('create-admin');});
    //admin creation
    Route::post('/admin/create',([App\Http\Controllers\UserController::class,'createAdmin']));
    // admin delete
    Route::get('/admin/delete/{id}',([App\Http\Controllers\UserController::class,'delete']));
    //admin edit
    Route::get('/admin/edit/{id}',([App\Http\Controllers\UserController::class,'edit']));
    //admin update
    Route::post('/admin/update/{id}',([App\Http\Controllers\UserController::class,'updateAdmin']));
    //product Delete
    Route::get('/product/delete/{id}',([App\Http\Controllers\ProductController::class,'delete']));
});


//Both Superadmin and admin middleware
Route::group(['middleware'=>['superadminoradmin']],function(){
    //New Product Creation
    Route::get('/newprod', function () {return view('new-product');})->name('new-product');
     //product List
     Route::get('/prodls',([App\Http\Controllers\ProductController::class,'index']))->name('prodls');
     //product Edit
     Route::get('/productedit/{id}',([App\Http\Controllers\ProductController::class,'edit']));
     //product Update
     Route::post('/product/update/{id}',([App\Http\Controllers\ProductController::class,'update']));
     //Product Creation
     Route::post('/product/create',([App\Http\Controllers\ProductController::class,'create']));

});

// Customer Middleware Check
Route::group(['middleware'=>['customer']],function(){

    //Add To cart Session
    Route::post('/product/cart/',([App\Http\Controllers\HomeController::class,'addToCart']));
    //CheckOut Session
    Route::post('/checkout',([App\Http\Controllers\HomeController::class,'checkout']));
    //View Cart
    Route::get('/cart',([App\Http\Controllers\HomeController::class,'cart']))->name('cart'); //cart
});

