<?php

class SearchController extends BaseController {

    /**
     * Store registration form data to variable
     */
    public function searchFriend() {
        $currentUserId = Auth::user()->id;

        $search = new Search;
        $input = Input::get('nick');
        if(!$input)
            return "";
        return $search->findFriend($input, $currentUserId);
    }

    public function addFriend() {
        $currentUserId = Auth::user()->id;

        $search = new Search;
        $addThe = Input::get('nickname');
        return $search->addFriend($addThe, $currentUserId);
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