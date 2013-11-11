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
    
        /*return "<li><a href='#'>Jonas</a></li>
            <li><a href='#'>".$input."k</a></li>
            <li><a href='#'>Jons54</a></li>";*/

        // Fill up array with names
        $a = DB::table('users')->lists('username');

        //get the q parameter from input
        $q=$input;

        //lookup all hints from array if length of q>0
        if (strlen($q) > 0)
        {
            $hint="";
            $ii = 0;
            for($i=0; $i<count($a); $i++)
            {
                if (strtolower($q) == strtolower(substr($a[$i],0,strlen($q))))
                {
                    if ($hint == "")
                    {
                        $hint = single_friend_element_block($a[$i]);
                    }
                    else
                    {
                        $hint = $hint.single_friend_element_block($a[$i]);
                    }
                }
            }
        }

        // Set output to "no suggestion" if no hint were found
        // or to the correct values
        if ($hint == "")
        {
            $response = single_no_results_element_block("no suggestion");
        }
        else
        {
            $response = $hint;
        }

        //output the response
        return $response;
    }
}

function single_friend_element_block($username){
    return '<li class="webrtc-user" id="webrtc-user-'.$username.'" data-username="'.$username.'" style="background-color:rgb(187, 223, 228);"><a href="#"><span class="user-img"><img src="assets/img/user-blank.jpg" alt="username"></span><span class="display-name">'.$username.'</span></a><div class="contact-actions"><span class="action btn btn-success webrtc-call"><i class="glyphicon glyphicon-earphone"></i></span><button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button></div></li>';
}
function single_no_results_element_block($username){
    return '<li class="webrtc-user" style="background-color:rgb(187, 223, 228);"><a href="#"><span class="display-name">'.$username.'</span></a></li>';
}
