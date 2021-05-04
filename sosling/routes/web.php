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



/* Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
}); */

/* Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is user '.$name.'with an id '.$id;
}); */


/* Route::get('/about', function() {
    return view('pages.about');
}); */

Route::get('/beranda', 'PagesController@beranda');
Route::get('/masuk', 'PagesController@masuk');
Route::get('/daftar', 'PagesController@daftar');
Route::get('/pesanan', 'PagesController@pesanan');
Route::get('/bantuan', 'PagesController@bantuan');
Route::get('/about', 'PagesController@about');
Route::get('/', 'PagesController@index');





