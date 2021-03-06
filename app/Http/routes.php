<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*------ Route common ------*/
Route::get('/', 'SiteController@index')->name('index');;

/*------ Route group for guests ------*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');
});


/*------ Route group for authenticated users------*/
Route::group(['middleware' => 'auth', 'prefix' => 'cabinet'], function () {
    Route::get('index', 'Account\CabinetController@index')->name('cabinet.index');
    Route::get('profile', 'Account\ProfileController@index')->name('profile.index');
    Route::get('logout', 'Auth\AuthController@logout')->name('logout');
});

/*------ Route group for authenticated admin------*/
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('index', 'AdminController@index')->name('admin.index');
    Route::get('/users', 'UsersController@index')->name('admin.users.index');
});

