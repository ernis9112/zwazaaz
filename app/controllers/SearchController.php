<?php

class SearchController extends BaseController {

    /**
     * Store registration form data to variable
     */
    public function searchFriend() {
        $search = new Search;
        $input = Input::get('nick');
        return $search->findFriend($input);
        //$search->list = $search->findFriend($input);
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