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


/*Commmens*/
Route::post('/comment','CommentsController@newComment');


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@contact');
Route::post('/contact','TicketsController@store');
/*ViewTickets*/
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug?}','TicketsController@show');
/*EditTickets*/
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
/*DeleteTickets*/
Route::post('/tickets/{slug?}/delete','TicketsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');

Route::get('users/logout','Auth\LoginController@logout');

Route::get('users/login', 'Auth\AuthController@getLogin');
Route::post('users/login', 'Auth\AuthController@postLogin');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');

Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login')->name('login');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager')
    , function () {
        Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index'
        ]);

        Route::get('users/{id?}/edit', 'UsersController@edit');
        Route::post('users/{id?}/edit','UsersController@update');

        Route::get('roles', 'RolesController@index');
        Route::get('roles/create', 'RolesController@create');
        Route::post('roles/create', 'RolesController@store');
    });
