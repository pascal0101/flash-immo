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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('user/test');
});
Route::get('/test1', function () {
    return view('user/test1');
});
Route::get('/test2', function () {
    return view('user/test2');
});
Route::get('/test3', function () {
    return view('user/test3');
});

Route::post('/submitdata', 'TestController@testfunction');







Route::get('/login1', function () {
    return view('user/login');
});
Route::get('/password', function () {
    return view('user/password');
});
Route::get('/favoris', function () {
    return view('user/favoris');
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


Route::get('/utilisateur1', function () {
    return view('User/Utilisateur1');
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

Route::get('mesoffres\{id}', 'OffresController@delete')->name('supprimeoffre');
//afficher les offres d'un utilisateur
Route::get('mesoffres', 'OffresController@mesoffres')->name('mesoffres');

//afficher les detail d'une offre une offre
Route::get('detail\{id}', 'OffresController@show')->name('detail');
//afficher offre
Route::get('user', 'OffresController@offres');

//afficher page acceuil
Route::get('/', 'OffresController@acceuil')->name('acceuil');

//Agence
Route::get('agence', 'AgenceController@index')->name('agence');
Route::post('agence', 'AgenceController@store')->name('agence');

//Utilisateur
Route::get('utilisateur', 'UtilisateurController@index')->name('utilisateur');
Route::post('utilisateur', 'UtilisateurController@store')->name('utilisateur');

//Offre
Route::get('offre', 'OffresController@index')->name('offre');
Route::post('offre', 'OffresController@store')->name('offre');
//Route::get('multifileupload', 'TestController@multifileupload')->name('multifileupload');




Route::get('/admin1', function () {
    return view('admin/acceuil');
})->name('admin');
//typebiens
Route::get('typebien', 'TypeBienController@index');
Route::post('typebien', 'TypeBienController@store')->name('typebien');
Route::get('typebien\{id}', 'TypeBienController@delete')->name('supprtypebien');

//typeoffres
Route::get('typeoffre', 'TypeOffreController@index');
Route::post('typeoffre', 'TypeOffreController@store')->name('typeoffre');
Route::get('typeoffre\{id}', 'TypeOffreController@delete')->name('supprtypeoffre');

//Quartiers
Route::get('quartier', 'QuartiersController@index');
Route::post('quartier', 'QuartiersController@store')->name('quartier');
Route::get('quartier\{id}', 'QuartiersController@delete')->name('supprquartier');
//villes
Route::get('ville', 'VillesController@index');
Route::post('ville', 'VillesController@store')->name('ville');
Route::get('ville\{id}', 'VillesController@delete')->name('supprville');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
//Route::get('/logout', 'Auth\LoginController@userLogout');


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


Route::get('image-view', 'TestController@index');

Route::post('image-view', 'TestController@store');
