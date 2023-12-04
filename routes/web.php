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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/newprod', function () {
    return view('new-product');
})->name('new-product');
Route::get('/prodls', function () {
    return view('product-list');
});
Route::get('/productedit', function () {
    return view('product-edit');
});
Route::get('/create-admin', function () {
    return view('create-admin');
});
//admin creation
Route::post('/admin/create',([App\Http\Controllers\UserController::class,'createAdmin'])   
);
//admin list
Route::get('/admin/list',([App\Http\Controllers\UserController::class,'index'])   
);


Auth::routes();
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
