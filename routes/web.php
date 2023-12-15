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

// Route::get('/', function () {
//     return view('home');
// });
//home product showing
Route::get('/',([App\Http\Controllers\HomeController::class,'index']))->name('home');

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/detail', function () {
//     return view('detail');
// });
Route::get('/detail/{id}',([App\Http\Controllers\HomeController::class,'productDetail']));
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/cart', function () {
//     return view('cart');
// });
Route::get('/cart',([App\Http\Controllers\HomeController::class,'cart']))->name('cart'); //cart

Route::get('/newprod', function () {
    return view('new-product');
})->name('new-product');

// Route::get('/productedit', function () {
//     return view('product-edit');
// });
Route::get('/create-admin', function () {
    return view('create-admin');
});
//admin creation
Route::post('/admin/create',([App\Http\Controllers\UserController::class,'createAdmin']));
// admin list
Route::get('/admin/list',([App\Http\Controllers\UserController::class,'index']))->name('admin-list');
// admin delete
Route::get('/admin/delete/{id}',([App\Http\Controllers\UserController::class,'delete']));
//admin edit
Route::get('/admin/edit/{id}',([App\Http\Controllers\UserController::class,'edit']));
//admin update
Route::post('/admin/update/{id}',([App\Http\Controllers\UserController::class,'updateAdmin']));

//Product Creation
Route::post('/product/create',([App\Http\Controllers\ProductController::class,'create']));
//product List
Route::get('/prodls',([App\Http\Controllers\ProductController::class,'index']))->name('prodls');
//product Delete
Route::get('/product/delete/{id}',([App\Http\Controllers\ProductController::class,'delete']));
//product Edit
Route::get('/productedit/{id}',([App\Http\Controllers\ProductController::class,'edit']));
//product Update
Route::post('/product/update/{id}',([App\Http\Controllers\ProductController::class,'update']));

//card Session
Route::post('/product/cart/',([App\Http\Controllers\HomeController::class,'addToCart']));
//CheckOut Session
Route::post('/checkout',([App\Http\Controllers\HomeController::class,'checkout']));

Auth::routes();
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
