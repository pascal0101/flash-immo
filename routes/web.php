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

Route::get('/test8', function () {
    //$pdf = PDF::loadView('user/test8');
    //return $pdf->download('test8.pdf');
    return view('user/test8');
});

Route::get('/test', function () {
    return view('user/test');
});
Route::get('/test1', function () {
    return view('user/test1');
});
Route::get('/test5', function () {
    return view('user/test5');
});

Route::get('/test2', function () {
    return view('user/test2');
});
Route::get('/test3', function () {
    return view('user/test3');
});
Route::get('/test4', 'TestController@create');

Route::get('/test9', 'TestController@payement');

Route::post('/test9', function () {

    return view('user/test9');
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
Route::get('favoris', 'FavorisController@index');
Route::get('favoris\{id}', 'FavorisController@favoris')->name('favoris');

Route::get('/contact', function () {
    return view('user/contact');
});
Route::get('/profil', function () {
    return view('user/profil');
});
Route::get('/mesbiens', function () {
    return view('user/mesbiens');
});


Route::get('ok', 'TestController@test');

Route::get('/utilisateur1', function () {
    return view('User/Utilisateur1');
});
Route::get('modoffre\{id}', 'OffresController@edit')->name('modoffre');
Route::post('modoffre\{id}', 'OffresController@update')->name('modoffre');
//admin
//imprimer
Route::get('offrespdf', 'BienController@offrespdf');
Route::get('impclients', 'BienController@impclient');
Route::get('impagences', 'BienController@impagence');
Route::get('impoffres', 'BienController@impoffre');
Route::get('impoffresactive', 'BienController@impoffresactive');
Route::get('impoffresnonactive', 'BienController@impoffresnonactive');
Route::get('impmessages', 'BienController@impmessages');
//activer une offres
Route::get('offresupdateoffre\{id}', 'BienController@update')->name('updateoffre');

Route::get('offres', 'BienController@offres');
Route::get('offrespdf', 'BienController@offrespdf');

Route::get('statistiques', 'BienController@statistique');
Route::get('statistiques1', 'BienController@statistique1');
Route::get('statistiques2', 'BienController@statistique2');


Route::get('active', 'BienController@active')->name('active');

Route::get('desactive', 'BienController@desactive')->name('desactive');

Route::get('clients', 'BienController@client')->name('client');
Route::get('agences', 'BienController@agence')->name('agence');
//les different type de bien
Route::get('maison', 'TypeBienController@maison')->name('maison');
Route::get('appartement', 'TypeBienController@appartement')->name('appartement');
Route::get('terrain', 'TypeBienController@terrain')->name('terrain');
Route::get('bureau', 'TypeBienController@bureau')->name('bureau');

//suprimer un utilisateur
Route::get('clients\{id}', 'BienController@deleteuser')->name('deleteuser');

//envoi de mail
Route::post('message', 'MessageController@store')->name('message');
Route::post('envoyer', 'MessageController@envoyer')->name('envoyer');

Route::get('messages', 'BienController@message');
Route::get('messages\{id}', 'BienController@deletemsg')->name('deletemsg');
//
Route::get('mesoffres\{id}', 'OffresController@delete')->name('supprimeoffre');
Route::get('offres\{id}', 'BienController@delete')->name('deleteoffre');

Route::get('sesoffres\{id}', 'BienController@sesoffres')->name('sesoffres');
//afficher les offres d'un utilisateur
Route::get('mesoffres', 'OffresController@mesoffres')->name('mesoffres');

//afficher les detail d'une offre une offre
Route::get('detail\{id}', 'OffresController@show')->name('detail');
Route::get('voir\{id}', 'BienController@show')->name('voir');

//Route::get('identite\{id}', 'BienController@identite')->name('voir');
//afficher offre
Route::get('user', 'OffresController@offres');
Route::get('location', 'OffresController@location');
Route::get('vente', 'OffresController@vente');

//afficher page acceuil
Route::get('/', 'OffresController@acceuil')->name('acceuil');
//Route::post('/', 'OffresController@acceuil')->name('acceuil');
Route::post('/', 'OffresController@rechercher')->name('rechercher');
//Route::post('/', 'BienController@rechercher')->name('rechercher');
//Agence
Route::get('lesagences', 'AgenceController@agences')->name('agences');
Route::get('/lesagences/action', 'AgenceController@action')->name('recherche');


Route::get('detailagence\{id}', 'AgenceController@show')->name('detailagence');

Route::get('agence', 'AgenceController@index')->name('agence');
Route::post('agence', 'AgenceController@store')->name('agence');

//Utilisateur
Route::get('utilisateur', 'UtilisateurController@index')->name('utilisateur');
Route::post('utilisateur', 'UtilisateurController@store')->name('utilisateur');

//Offre
Route::get('offre', 'OffresController@index')->name('offre');
Route::post('offre', 'OffresController@store')->name('offre');
//Route::get('multifileupload', 'TestController@multifileupload')->name('multifileupload');





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
