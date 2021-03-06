<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Elvinas
 * Date: 13.10.13
 * Time: 14.23
 * To change this template use File | Settings | File Templates.
 */
class ProfileController extends BaseController
{
    public function profileNamePost(User $user)
    {
        $rules = array('name' => 'required|min:3|max:80|alpha',
            'last_name' => 'required|min:3|max:80|alpha');

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('profile')->withErrors($validator);
        } else {
            $user->name = Input::get('name');
            $user->last_name = Input::get('last_name');
            $user->save();
            return Redirect::to('profile')->with('profile_info', 'Data changed successful!');
        }
    }

    public function profileEmailPost(User $user)
    {
        $rules = array('email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:40');
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('profile')->withErrors($validator);
        } else {
            $pass = Input::get('password');
            if ( Hash::check($pass, $user->password) )
            {
                $user->email = Input::get('email');
                $user->save();
                return Redirect::to('profile')->with('email_update','Email changed successful!');
            }
            else {
                return Redirect::to('profile')->with('email_update','Incorrect password.');
            }
        }
    }

    public function profilePasswordPost(User $user)
    {
        $rules = array('old_password' => 'required|min:6|max:40',
                       'password' => 'required|min:6|max:40',
                       'password_confirmation' => 'required|min:6|max:40',
                       );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('profile')->withErrors($validator);
        }

            $pass = Input::get('old_password');
            if (Hash::check($pass, $user->password))
            {
                if(Input::get('password') == Input::get('password_confirmation')){
                    $user->password = Hash::make(Input::get('password'));
                    $user->save();
                    return Redirect::to('profile')->with('password_changed', 'Password changed successful');
                }
                    //var_dump('bbbbb');
                    return Redirect::to('profile')->with('password_changed', 'New password do not match');
            }
            else {
                //var_dump('aaaa');
                return Redirect::to('profile')->with('password_changed', 'Current password do not match');
            }

    }

    public function uploadProfilePic(){
        $filename = (string)Auth::user()->id.'.jpg';
        $input = Input::all();
        if(Input::file('photo') == null){
            return Redirect::to('profile');
        }
        if ($handle = opendir('uploads')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if($entry == $filename) {
                        @unlink($entry);
                    }
                }
            }
            closedir($handle);
        }
        $rules = array(
                'photo' => 'mimes:jpeg,jpg,bmp,png,gif|max:3000'
                );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return Redirect::to('profile')->with('upload_file','Error. You use wrong file format. Please try again!');
        }
        $destinationPath = 'uploads';
        $uploadSuccess = Input::file('photo')->move($destinationPath, $filename);

        if( $uploadSuccess ) {
            //return Response::json('success', 200); // or do a redirect with some message that file was uploaded
            return Redirect::to('profile')->with('upload_file','Image successful changed!');
        } else {
            return Redirect::to('profile')->with('upload_file','Uploading failed. Please try again.');
        }
    }
    //block user
    public function blockUser(){
        $data = Input::get('nickname');
        $id = DB::select('select id from users where username = ?', array($data)); // who want block
        $myid = Auth::user()->id;
        $all = DB::select('select blocked_id from blocks where user_id = ?',array($myid)); //all users which I blocked
        $deleted = 0;
        for ($i=0;$i<sizeof($all);$i++)
        {
             if($all[$i]->blocked_id == $id[0]->id){
                 DB::delete('delete from blocks where user_id = ? and blocked_id = ?', array($myid, $id[0]->id)); //unblock
                 $deleted = 1;
                 return 0;
             }
        }
        if($deleted == 0){
            DB::insert('insert into blocks (user_id, blocked_id) values (?, ?)', array($myid, $id[0]->id)); //block
            return 1;
        }
    }

}
