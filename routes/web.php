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

Route::get('/admin', function () {
    return view('admin/acceuil');
});
Route::get('/user', function () {
    return view('user/acceuil');
});
Route::get('/ajoutbien', function () {
    return view('user/ajoutbien');
});
Route::get('/login', function () {
    return view('user/login');
});
Route::get('/password', function () {
    return view('user/password');
});
Route::get('/favoris', function () {
    return view('user/favoris');
});
Route::get('/detail', function () {
    return view('user/detail');
});
Route::get('/contact', function () {
    return view('user/contact');
});
Route::get('/profil', function () {
    return view('user/profil');
});
Route::get('/mesbiens', function () {
    return view('user/mesbiens');
});

Route::get('/utilisateur', function () {
    return view('User/Utilisateur');
});

Route::get('/agence', function () {
    return view('User/agence');
});
Route::get('/active', function () {
    return view('Admin/active');
});
Route::get('/desactive', function () {
    return view('Admin/desactive');
});
Route::get('/clients', function () {
    return view('Admin/clients');
});

Route::post('ajoutbien', 'OffresController@store')->name('ajoutbien');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//admin route for our multi-auth system

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //admin password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
