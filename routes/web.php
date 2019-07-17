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

Route::get('/Admin', function () {
    return view('Admin/acceuil');
});
Route::get('/User', function () {
    return view('User/acceuil');
});
Route::get('/ajoutbien', function () {
    return view('User/ajoutbien');
});
Route::get('/login', function () {
    return view('User/login');
});
Route::get('/password', function () {
    return view('User/password');
});
Route::get('/favoris', function () {
    return view('User/favoris');
});
Route::get('/detail', function () {
    return view('User/detail');
});
Route::get('/contact', function () {
    return view('User/contact');
});
Route::get('/profil', function () {
    return view('User/profil');
});
Route::get('/mesbiens', function () {
    return view('User/mesbiens');
});

Route::get('/utilisateur', function () {
    return view('User/Utilisateur');
});

Route::get('/agence', function () {
    return view('User/agence');
});
