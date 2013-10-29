<?php

class HomeController extends BaseController
{
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    /**
     * Show home page - the login page.
     */
    public function showWelcome()
    {
        $this->layout->content = View::make('hello');
        $this->layout->bodyclass = "sign-in-page";
    }

    /**
     * Show the user profile.
     */
    public function showProfile()
    {
        $this->layout->content = View::make('profile');
        $this->layout->bodyclass = "home-page";
        $value = Session::get('user.id', 114);

        $this->layout->content = View::make('profile', array('user' => User::find($value)));
    }


    public function showProfilePost()
    {
        $rules = array('first_name' => 'required|min:3|max:80|alpha',
            'last_name' => 'required|min:3|max:80|alpha');

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('profile')->withErrors($validator);
        }
    }

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

    public function get_update()
    {
        // trink lauk sita
        // tai man paaiškink, kodel mano hujovas? :D
        var_dump(Input::get('id'), \Illuminate\Support\Facades\Input::get());
        $id = Input::get('id');
        $rules = array('name' => 'required|min:3|max:80|alpha',
            'last_name' => 'required|min:3|max:80|alpha');

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            var_dump($validator->errors());
//            return Redirect::to('profile')->withErrors($validator);
        } else {
            //User::update($id, array('first_name' => 'asdasdasd',
            //                 'last_name' => Input::get('last_name')));
            DB::table('users')
                ->where('id', $id)
                ->update(array('name' => Input::get('name')));
//            return Redirect::to('profile');
//del ko cia pakeite??????
                // gal nemokejai paziuret :D?
                // nemokėjau, bet kad tu tik redirectus užkomentavai
                // pl pabandom sutvarkyt cia :D oke
            var_dump("succeess");
        }


        //DB::update('update users set name = ? where id = ?',$input->name, $input->id);


    }


    /**
     * Show the dashboard.
     */
    public function showDashboard()
    {
        $this->layout->content = View::make('dashboard');
    }

    /**
     * Show the registration page.
     */
    public function showRegistration()
    {
        $this->layout->content = View::make('registration');
        $this->layout->bodyclass = "register-page";
    }

    public function showCall()
    {
        $this->layout->content = View::make('call');
        $this->layout->bodyclass = "sign-in-page";
    }

}
