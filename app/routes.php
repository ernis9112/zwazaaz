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

// Show dashboard
Route::get('/dashboard', 'HomeController@showDashboard');

// For registration AJAX query
Route::post('validate-registration', array(
  'uses' => 'RegistrationController@storeGet',
  'as' => 'registration.store'
));
