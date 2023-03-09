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
    return view('user.home');
});

Route::get('admin/home', function () {

    return view('admin.index');
})->name('adminHome');

Route::get('admin/category', function () {

    return view('admin.category');
})->name('category');

Route::get('admin/post/create', function () {

    return view('admin.post');
})->name('create');


