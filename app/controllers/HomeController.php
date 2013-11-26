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
        $this->layout->content = View::make('layouts.master2');
        $this->layout->bodyclass = "home-page";
        $this->layout->content->content2 = View::make('profile');
        //114
        $value = Session::get('user.id', Auth::user()->id);

        $this->layout->content->content2 = View::make('profile', array('user' => User::find($value)));

        $dash = new DashboardController();
        $dash->setDataVars($this->layout->content);
    }

    public function showUserProfile($name)
    {
        $this->layout->content = View::make('layouts.master2');
        $this->layout->bodyclass = "home-page";
        $this->layout->content->content2 = View::make('user');

        $all = DB::select('select * from users where username = ?', array($name));
        //114
        $value = Session::get('user.id', $all[0]->id);

        $this->layout->content->content2 = View::make('user', array('user' => User::find($value)));

        $dash = new DashboardController();
        $dash->setDataVars($this->layout->content);
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


    /**
     * Show the dashboard page.
     */
    public function showDashboard()
    {
        $this->layout->content = View::make('layouts.master2');
        $this->layout->bodyclass = "home-page";
        $this->layout->content->content2 = View::make('dashboard');

        $dash = new DashboardController();
        $dash->setDataVars($this->layout->content);
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
    
    public function showInfoPage($name)
    {
    }

}
