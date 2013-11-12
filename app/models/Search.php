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
    public function findFriend($input, $currentUserId) {

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
                        //if(is_user_in_friend_list($a[$i], $currentUserId) == 0)
                            $hint = single_friend_element_block($a[$i], $currentUserId);
                        //else
                            //$hint = single_friend_element_block2($a[$i], $currentUserId);
                    }
                else
                    {
                        //if(is_user_in_friend_list($a[$i], $currentUserId) == 0)
                            $hint = $hint.single_friend_element_block($a[$i], $currentUserId);
                        //else
                            //$hint = single_friend_element_block2($a[$i], $currentUserId);
                    }
                }
            }
        }

        // Set output to "no results" if no hint were found
        // or to the correct values
        if ($hint == "")
        {
            $response = single_no_results_element_block("no results");
        }
        else
        {
            $response = $hint;
        }

        //output the response
        return $response;
    }

    public function addFriend($username, $ID){

        $a = DB::table('users')->where('username', $username)->lists('id');
        $friend_ID = $a['0'];
        $records = DB::select('select id from contacts where owner_id = ? and friend_id = ?', array($ID, $friend_ID));
        if ( $records){
            DB::delete('delete from contacts where owner_id = ? and friend_id = ?', array($ID, $friend_ID));
            return 1;
        }
        else{
            if(!$records && $friend_ID != $ID){
                DB::insert('insert into contacts (owner_id, friend_id) values (?, ?)', array($ID, $friend_ID));
            }
            //return 0;
            return $username;
        }
        //return $username;
        //return $friend_ID;
    }

    public function is_user_in_friend_list($friendName, $ID){
        $a = DB::table('users')->where('username', $friendName)->lists('id');
        $friend_ID = $a['0'];
        $records = DB::select('select id from contacts where owner_id = ? and friend_id = ?', array($ID, $friend_ID));
        if ( $records)
            return 1;
        else{
            return 0;
        }
    }
}

function single_friend_element_block($username, $ID){
    //if(!is_user_in_friend_list($username, $ID))
    return '<li class="webrtc-user" id="webrtc-user-'.$username.'" data-username="'.$username.'"><a href="#"><span class="user-img"><img src="assets/img/user-blank.jpg" alt="username"></span><span class="display-name">'.$username.'</span></a><div class="contact-actions"><span class="action btn btn-success webrtc-call"><i class="glyphicon glyphicon-earphone"></i></span><button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button><button class="action btn btn-success add-to-list"><i class="glyphicon glyphicon-plus"></i></button></div></li>';
    /*else
        return '<li class="webrtc-user" id="webrtc-user-'.$username.'" data-username="'.$username.'"><a href="#"><span class="user-img"><img src="assets/img/user-blank.jpg" alt="username"></span><span class="display-name">'.$username.'</span></a><div class="contact-actions"><span class="action btn btn-success webrtc-call"><i class="glyphicon glyphicon-earphone"></i></span><button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button><button class="action btn btn-warning trash-from-list"><i class="glyphicon glyphicon-trash"></i></button></div></li>';
*/
}
function single_friend_element_block2($username, $ID){
    return '<li class="webrtc-user" id="webrtc-user-'.$username.'" data-username="'.$username.'"><a href="#"><span class="user-img"><img src="assets/img/user-blank.jpg" alt="username"></span><span class="display-name">'.$username.'</span></a><div class="contact-actions"><span class="action btn btn-success webrtc-call"><i class="glyphicon glyphicon-earphone"></i></span><button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button><button class="action btn btn-warning trash-from-list"><i class="glyphicon glyphicon-trash"></i></button></div></li>';
}
function single_no_results_element_block($username){
    return '<li class="webrtc-user"><a href="#"><span class="display-name">'.$username.'</span></a></li>'; // style="background-color:#ace3f0;"
}