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

Route::get('/login', function () {
 return view('login-panel');
});
Route::get('/faq', function () {
    return view('backend/pages-faq');
});
Route::get('/',[ \App\Http\Controllers\FrontController::class, 'index']);
Route::get('/post/{post}',[ \App\Http\Controllers\FrontController::class, 'singlePost']);
Route::get('/category/{category}',[ \App\Http\Controllers\FrontController::class, 'postsInCategory']);

Route::resource('/admin/category',\App\Http\Controllers\CategoryController::class);

Route::get('/admin', function () {

    return view('backend/admin-page');
});
