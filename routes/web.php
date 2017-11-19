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
Route::get('/input', function () {
    return view('posts.create');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/hasil', function () {
    return view('searching.hasilSearch');
});

route::get('/searching','searchingController@search');

Route::resource('posts', 'PostsController');

Route::resource('bus', 'busController');

route::get('pemesanan','pemesanan@index');
route::get('pemesanan/create','pemesanan@create');
route::post('pemesanan','pemesanan@store');
route::get('/pemesanan/{id}/edit','pemesanan@edit');
route::put('/pemesanan/{id}','pemesanan@update');
route::delete('/pemesanan/{id}','pemesanan@destroy');

Auth::routes();
 route::get ('admin_login                  ', 'AdminAuth\LoginController@showLoginForm            ');
 route::post('admin_login                  ', 'AdminAuth\LoginController@login                    ');
 route::post('admin_logout                 ', 'AdminAuth\LoginController@logout                       ');
 route::post('admin_password/email         ', 'AdminAuth\ForgotPasswordController@sendResetLinkEma');
 route::post('admin_password/reset         ', 'AdminAuth\ResetPasswordController@reset                ');
 route::get ('admin_password/reset         ', 'AdminAuth\ForgotPasswordController@showLinkRequestForm ');
 route::get ('admin_password/reset/{token} ', 'AdminAuth\ResetPasswordController@showResetForm    ');
 route::get ('admin_register               ', 'AdminAuth\RegisterController@showRegistrationForm      ');
 route::post('admin_register               ', 'AdminAuth\RegisterController@register              ');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_home', 'AdminHomeController@index')->name('home');

Route::resource('mitra', 'mitraController');
Route::resource('transaksi', 'transaksiController');
Route::resource('crew', 'crewController');