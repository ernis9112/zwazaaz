<?php

class SearchController extends BaseController {

    /**
     * Store registration form data to variable
     */
    public function searchFriend() {
        $currentUserId = Auth::user()->id;

        $search = new Search;
        if(!Input::get('nick'))
            return "";
        $input = Input::get('nick');
        return $search->findFriend($input, $currentUserId);
    }

    public function addFriend() {
        $currentUserId = Auth::user()->id;

        $search = new Search;
        return $search->addFriend(Input::get('nickname'));
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