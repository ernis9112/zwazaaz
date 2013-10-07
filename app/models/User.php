<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

    /**
     * Check fields for rules
     *
     * @return message about success or error messages
     */
    public function validateField($input) {

        $rules = array(
            'first_name' => 'required|min:3|max:80|alpha',
            'last_name' => 'required|min:3|max:80|alpha',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:80|unique:users,username',
            'password' => 'required|min:6|max:40|confirmed',
            'password_confirmation' => 'required|min:6|max:40',
        );

        $v = Validator::make($input, $rules);

        $messages = "";
        if ($v->fails())
            $messages = $v->messages();
        else
        if ($input['is_clicked'] == 'yes')
            return self::saveUserToDatabase($input);
        else
            return "GOOD";

        return $messages;
    }

    /**
     * Register new user.
     *
     * @return OK on successful
     */
    public function saveUserToDatabase($input) {
        $user = new User();
        $user->username = $input['username'];
        $user->password = Hash::make($input['password']);
        $user->email = $input['email'];
        $user->name = ucfirst($input['first_name']);
        $user->last_name = ucfirst($input['last_name']);
        $user->save();
        Session::put('just_reg', 'yes');
        self::createUserSession($user);
        return 'OK';
    }

    /**
     * Create user session named 'members'
     *
     * @return string
     */
    public function createUserSession($user) {
        Session::put('members', $user);
    }

}