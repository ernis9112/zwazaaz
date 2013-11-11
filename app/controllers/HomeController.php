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
        //114
        $value = Session::get('user.id', Auth::user()->id);

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


    /**
     * Show the dashboard page.
     */
    public function showDashboard()
    {
        $this->layout->content = View::make('dashboard');
        $this->layout->bodyclass = "home-page";

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

}
