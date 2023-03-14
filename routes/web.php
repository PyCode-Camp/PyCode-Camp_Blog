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

// User Routes
Route::group(['namespace' => 'App\Http\Controllers\user'], function(){

  Route::get('/', 'HomeController@index');
  Route::get('post/{post}', 'UserPostController@post')->name('post');
});

//Route::get('post', function(){

//  return view('user.main-post');
//})->name('Userpost');


Route::get('/team', function(){

  return view('user.team');
})->name('team');

Route::get('/advertise', function(){

  return view('user.advertise-withus');
})->name('advertise');

  


// Admin Routes
Route::group(['namespace' => 'App\Http\Controllers\Admin'], function(){

  //Post Routes
  Route::resource('admin/post','PostController');

  //Category Routes
  Route::resource('admin/category','CategoryController');

  //Tag Routes
  Route::resource('admin/tag', 'TagController');

});





