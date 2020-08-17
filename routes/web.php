<?php

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
Route::get('/index','IndexController@index');
Route::get('/product/{id}','IndexController@show');


Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::post('/register','RegisterController@register');
Route::get('/register','RegisterController@index');

Route::post('/addtocart','CartController@addtoCart');
Route::get('/checkout','CartController@checkout');
Route::get('/pay','CartController@pay');

Route::get('/admin','AdminController@index');
Route::post('/additems','AdminController@addItems');


