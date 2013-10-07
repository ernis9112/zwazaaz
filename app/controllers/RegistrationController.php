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

}