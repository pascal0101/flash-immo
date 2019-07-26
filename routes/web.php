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

Route::post('ajoutbien','OffresController@store')->name('ajoutbien');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
