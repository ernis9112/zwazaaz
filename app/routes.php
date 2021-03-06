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
Route::get('/', array(
  'uses' => 'IndexController@index',
  'as' => 'index'
));

Route::get('/login', array(
  'uses' => 'HomeController@showWelcome',
  'as' => 'hello'
));

Route::get('/call', 'HomeController@showCall');

// Show registration page
Route::get('/registration', array(
  'uses' => 'HomeController@showRegistration',
  'as' => 'registration'
));

// Show user edit profile page
Route::get('/profile', 'HomeController@showProfile');

// Show single user profile page
Route::get('user/{name}', 'HomeController@showUserProfile');
//-------------------------
Route::post('upload',array(
    'uses'=>'ProfileController@uploadProfilePic',
    'as'=>'user.upload.pic'
));

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

// Show dashboard page
Route::get('/dashboard', 'HomeController@showDashboard');

//--------------------------------------------------------------------------------------------------------------------//
// For registration AJAX query
Route::post('validate-registration', array(
  'uses' => 'RegistrationController@storeGet',
  'as' => 'registration.store'
));

// For user search AJAX query
Route::post('search-contacts', array(
  'uses' => 'SearchController@searchFriend',
  'as' => 'search.friend'
));
Route::post('user/search-contacts', array(
    'uses' => 'SearchController@searchFriend',
    'as' => 'search.friend2'
));
// For add/delete user AJAX query
Route::post('add-friend', array(
    'uses' => 'SearchController@addFriend',
    'as' => 'search.add'
));
Route::post('user/add-friend', array(
    'uses' => 'SearchController@addFriend',
    'as' => 'search.add2'
));
//for users block
Route::post('user/block-user',array(
    'uses'=> 'ProfileController@blockUser',
    'as' => 'block.user'
));

// For login AJAX query
Route::post('validate-login', array(
  'uses' => 'RegistrationController@tryLogin',
  'as' => 'login.try'
));

Route::get('/logout', 'RegistrationController@userLogout');

// Info pages
Route::get('page/{name}', 'HomeController@showInfoPage');
