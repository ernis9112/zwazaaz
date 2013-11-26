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
            return Redirect::to('profile');
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
                return Redirect::to('profile');
            }
            else {
                return Redirect::to('profile')->with('login_errors', true);
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

}
