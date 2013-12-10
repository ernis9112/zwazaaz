{{ Form::open(array('route' => 'registration.store', 'id' => 'registration')) }}
<div class="row">
    <div class="col-sm-12 text-center">
        <a href="{{ route('hello') }}">
            <img src="assets/img/zwazaaz-logo.png" alt="Zwazaaz">
        </a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger" style="display:none">            
            @lang('registration.failed')
        </div>
        <div class="alert alert-success" style="display:none">            
            @lang('registration.click_submit')
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <fieldset>
            <legend>@lang('registration.personal_info')</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="register-first-name">@lang('registration.first_name')<span class="required">*</span></label>
                        <input type="text" name="first_name" class="form-control" id="register-first-name" required>
                        {{-- Form::text('first_name', null, array('class' => 'form-control', 'id' => 'register-first-name', 'value' => '', 'required')) --}}
                        <p class="help-block message-first_name"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="register-last-name">@lang('registration.last_name')<span class="required">*</span></label>
                        <input type="text" name="last_name" class="form-control" id="register-last-name" required>
                        <p class="help-block message-last_name"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="register-name">@lang('registration.email')<span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" id="register-name" placeholder="example@example.exm" required>
                        <p class="help-block message-email"></p>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="col-sm-6">
        <fieldset>
            <legend>@lang('registration.information')</legend>
            <div class="form-group">
                <label class="control-label" for="register-username">@lang('registration.username')<span class="required">*</span></label>
                <input type="text" name="username" class="form-control" id="register-username" required>
                <p class="help-block message-username"></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="register-password">@lang('registration.password')<span class="required">*</span></label>
                        <input type="password" name="password" class="form-control" id="register-password" required>
                        <p class="help-block message-password"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="register-repeat-password">@lang('registration.r_password')<span class="required">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" id="register-repeat-password" required>
                        <p class="help-block message-password_confirmation"></p>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<input type="hidden" name="is_clicked" id="is_clicked" value="no">
{{ Form::token() }}
{{ Form::close() }}
<div class="row">
    <div class="col-sm-12 text-center">
        <button id="submit-form" class="btn btn-lg btn-primary">@lang('registration.submit_registration')</button>         
    </div>
</div>

<!-- Required script for registration page -->
{{ HTML::script('assets/registration/validation.js') }}