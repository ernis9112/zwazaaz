{{ Form::open(array('route' => 'login.try', 'id' => 'login')) }}
    <div class="row">
        <div class="col-sm-12 text-center">
            <a class="logo-link" href="{{ route('index') }}">
                <img src="assets/img/zwazaaz-logo.png" alt="Zwazaaz">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger"  @if (!Session::get('tried_login')) style="display:none" @endif >
                <strong>Oh snap!</strong> We didn't recognize your sign-in details. Please check your Zwazaaz Name and password, then try again.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2>Authenticate yourself</h2>
            <div class="form-group">
                <label class="control-label" for="sign-in-name">Zwazaaz Name</label>
                <input name="username" type="text" class="form-control" id="sign-in-name" value="@if (Session::get('tried_login')){{ Session::get('tried_login') }}@endif" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="sign-in-password">Password</label>
                <input name="password" type="password" class="form-control" id="sign-in-password" value="" required>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-default">Sign in</button>&nbsp;or&nbsp;<a href="{{ route('registration') }}">Create an account</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <img style="max-width: 100%;" class="pull-right" src="{{ asset('assets/img/which-one-are-you.png') }}" alt="Sign In">
        </div>
    </div>
{{ Form::token() }}
{{ Form::close() }}