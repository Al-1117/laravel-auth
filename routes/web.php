<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROUTES ADMIN

// Prefisso nell'URL
Route::prefix('admin')
// namespace della cartella nella struttura del progetto
  ->namespace('Admin')
  // Solo per utenti autenticati
  ->middleware('auth')

  ->group(function(){
    // Route di collegamento al controller
    Route::resource('posts', 'PostController');

});

Route::get('/guest/posts/index', 'PostController@index');

Route::get('/guest/posts/{post}', 'PostController@show')->name('guest.posts.show');
