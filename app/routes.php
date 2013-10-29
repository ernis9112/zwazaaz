<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Show main page - login page
Route::get('/', 'HomeController@showWelcome');
Route::get('/call', 'HomeController@showCall');

// Show registration page
Route::get('/registration', 'HomeController@showRegistration');

// Show user profile page
Route::get('/profile', 'HomeController@showProfile');
//Route::put('profile/update', array('uses'=>'HomeController@get_update'));

Route::model('user', 'User');
Route::post('profile/update/name/{user}', array(
    'uses'=>'ProfileController@profileNamePost',
    'as' => 'user.update.name'
));
Route::post('profile/update/email/{user}', array(
    'uses'=>'ProfileController@profileEmailPost',
    'as' => 'user.update.email'
));
Route::post('profile/update/password/{user}', array(
    'uses'=>'ProfileController@profilePasswordPost',
    'as' => 'user.update.password'
));

Route::get('/dashboard', 'HomeController@showDashboard');

// For registration AJAX query
Route::post('validate-registration', array(
  'uses' => 'RegistrationController@storeGet',
  'as' => 'registration.store'
));
