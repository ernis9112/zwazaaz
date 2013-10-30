<?php

class RegistrationController extends BaseController {

    /**
     * Store registration form data to variable
     */
    public function storeGet() {
        $user = new User;
        $input = Input::all();
        return $user->validateField($input);
    }

    public function tryLogin() {
        if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
            return Redirect::intended('dashboard');
        }else{
            return Redirect::to('/')->with('tried_login', Input::get('username'));
        }
    }
    
    public function userLogout() {
        Auth::logout();
        return Redirect::intended('/');
    }

}