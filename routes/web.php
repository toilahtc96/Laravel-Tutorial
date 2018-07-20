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