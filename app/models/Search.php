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

        $a = DB::table('users')->where('id', $currentUserId)->lists('username');
        $currentUserName = $a['0'];

        // Fill up array with names
        $a = DB::table('users')->lists('username');

        //get the q parameter from input
        $q=$input;

        //lookup all hints from array if length of q>0
        if (strlen($q) > 0)
        {
            $hint="";
            for($i=0; $i<count($a); $i++)
            {
                if (strtolower($q) == strtolower(substr($a[$i],0,strlen($q))))
                {
                    if ($hint == ""){
                        if($a[$i] != $currentUserName)
                            $hint = single_friend_element_block($a[$i], $currentUserId);
                    }
                else
                    {
                        if($a[$i] != $currentUserName)
                            $hint = $hint.single_friend_element_block($a[$i], $currentUserId);
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

    }

    public function is_user_in_friend_list2($username, $ID){
        $a = DB::table('users')->where('username', $username)->lists('id');
        $friend_ID = $a['0'];
        $records = DB::select('select id from contacts where owner_id = ? and friend_id = ?', array($ID, $friend_ID));
        if ($records){
            return 1;
        }
        else{
            return 0;
        }
    }

}

function single_friend_element_block($username, $ID){
    $buttonAdd =
        '<button class="action btn btn-success add-or-del-to-list">'.
            '<i class="glyphicon glyphicon-plus"></i>'.
        '</button>';
    $buttonRemove =
        '<button class="action btn btn-warning add-or-del-to-list">'.
            '<i class="glyphicon glyphicon-trash"></i>'.
        '</button>';

    if(is_user_in_friend_list($username, $ID) == 0)
        $button = $buttonAdd;
    else
        $button = $buttonRemove;

    return '<li class="webrtc-user" id="webrtc-user-'.$username.'" data-username="'.$username.'">'.
                '<a href="'.asset('user/'.$username).'">'.
                    '<span class="user-img">'.
                        '<img src="'.asset('assets/img/user-blank.jpg').'" alt="username">'.
                    '</span>'.
                    '<span class="display-name">'.$username.'</span>'.
                    '<span class="status webrtc-status"></span>'.
                '</a>'.
                '<div class="contact-actions">'.
                    '<button type="button" class="action btn btn-success webrtc-call">'.
                        '<i class="glyphicon glyphicon-earphone"></i>'.
                    '</button>'.
                    '<button type="button" class="action btn btn-danger webrtc-decline">'.
                        '<i class="glyphicon glyphicon-earphone"></i>'.
                    '</button>'.
                    '<a href="'.asset('user/'.$username).'" class="action btn btn-info">'.
                        '<i class="glyphicon glyphicon-info-sign"></i>'.
                    '</a>'.
                    $button.
                '</div>'.
            '</li>';
}

//Out of class functions
function single_no_results_element_block($username){
    //return '<li class="webrtc-user"><a href="#"><span class="display-name">'.$username.'</span></a></li>';
    return '<li class="alert alert-info" style="margin-bottom: 0px; border: 0px solid transparent; border-radius: 0px;">User not found.</li>';
}

function is_user_in_friend_list($username, $ID){
    $a = DB::table('users')->where('username', $username)->lists('id');
    $friend_ID = $a['0'];
    $records = DB::select('select id from contacts where owner_id = ? and friend_id = ?', array($ID, $friend_ID));
    if ($records){
        return 1;
    }
    else{
        return 0;
    }
}