<?php

//UserRoutes

Route::group(['namespace' => 'User'],function (){
    Route::get('/','NaslovnaController@index')->name('home');
    Route::get('/tim','TimController@index');
    Route::get('/vesti','VestiController@index');
    Route::get('/post/{post}','PostController@post')->name('post');
    Route::get('/rezervacija','RezervacijaController@index')->name('reservation.show');
    Route::post('/rezervacija','RezervacijaController@store')->name('reservation.store');
    Route::get('/istorija','IstorijaController@index');
    Route::get('/rezultati','RezultatiController@index');
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::post('/profile','ProfileController@image')->name('profile.image');
    Route::get('/cart','CartController@index')->name('cart');
    Route::delete('/cart/{cart}','CartController@destroy')->name('destroy');
    Route::get('/requirement','ReqController@index')->name('req.index');
    Route::delete('/requirement/{requirement}','ReqController@destroy')->name('req.destroy');
    Route::get('/kontakt','KontaktController@index')->name('contact');
    Route::post('/kontakt','KontaktController@post')->name('message');
});

//UserAuth

Auth::routes();
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//AdminRoutes

Route::group(['namespace' => 'Admin',],function () {
    Route::get('admin/poruke', 'PorukeController@index')->name('admin.poruke');
    Route::resource('admin/vesti', 'VestiController');
    Route::resource('admin/korisnici', 'KorisniciController');
    Route::resource('admin/klijenti', 'KlijentiController');
    Route::resource('admin/utakmice', 'UtakmiceController');
    Route::resource('admin/role', 'RoleController');
    Route::resource('admin/permission', 'PermissionController');
    Route::resource('admin/sektori', 'SektoriController');
    Route::resource('admin/rezervacija', 'RezervacijeController');
    Route::get('admin/zahtevi','ZahteviController@index')->name('zahtevi.index');
    Route::put('admin/zahtevi/{zahtevi}','ZahteviController@accept')->name('zahtevi.accept');
    Route::delete('admin/zahtevi/{zahtevi}','ZahteviController@discard')->name('zahtevi.discard');
    Route::get('admin/profile','AdminProfileController@index')->name('admin.profile');
    Route::post('admin/profile','AdminProfileController@image')->name('admin.profileImage');
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    Route::post('admin/home', 'HomeController@mail')->name('admin.send');
});

//AdminAuth

Route::group(['namespace' => 'Admin\Auth',],function () {
    Route::get('admin/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'LoginController@login');
    Route::post('admin-password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin-password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin-password/reset', 'ResetPasswordController@reset');
    Route::get('admin-password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('logout','LoginController@logout')->name('admin.logout');
});