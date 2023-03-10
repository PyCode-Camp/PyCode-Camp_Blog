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

Route::resource('admin/post','App\Http\Controllers\admin\PostController');
Route::resource('admin/category','App\Http\Controllers\admin\CategoryController');

Route::resource('admin/tag', 'App\Http\Controllers\admin\TagController');

//Route::get('admin/category', function () {

  //  return view('admin.category');
//})->name('category');

//Route::get('admin/post/create', function () {

  //  return view('admin.post');
//})->name('create');


