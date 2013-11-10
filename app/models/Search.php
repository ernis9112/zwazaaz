<?php

use Illuminate\Auth\UserInterface;

use Illuminate\Auth\Reminders\RemindableInterface;

class Search extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
   
    /**
     * Check fields for rules
     *
     * @return message about success or error messages
     */
    public function findFriend($input) {
    
        return "<li><a href='#'>Jonas</a></li>
            <li><a href='#'>Jonus</a></li>
            <li><a href='#'>Jons54</a></li>";
        
    }
}
