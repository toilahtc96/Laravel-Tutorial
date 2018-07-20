<?php
/**
 * Created by PhpStorm.
 * User: conghoang
 * Date: 10/07/2018
 * Time: 13:48
 */
Route::get('/','WelcomeController@index');

Route::get('home','HomeController@index');

Route::Controllers([
    'auth' => 'Auth/AuthController',
    'password' => 'Auth/PasswordController',
]);

Route::get('/getHome',function(){
    echo "Test route Laravel";
});
