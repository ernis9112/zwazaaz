<div class="main-content">

    <div class="profile-edit">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                       <img width="140" height="140" src=" {{URL::asset('uploads/'.$user->id.'.jpg')}} " alt="username">
                        <!-- <img src="{{URL::to('http://www.gravatar.com/avatar/' . md5( strtolower( trim( $user->email ) ) ) . '?d=' . urlencode( '../public/assets/img/user-blank.jpg' ) . '&s=' . 140)}}" alt="username"> -->
                    </div>
                    <!-- this will open popup-->
                      <button type="button" class="btn btn-default btn-xs" onclick="$('#upload_modal').modal();">Change image<i class
                              ="icon-plus-sign icon-plus"></i></button>

                    @if (Session::has('upload_file'))
                    <p class="help-block">{{ Session::get('upload_file') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-sm-9">
                {{ Form::model($user, array('route' => array('user.update.name', $user->id), 'class' => 'form-horizontal')) }}
                    <fieldset>
                        <legend>Personal information</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-first-name">First name<span class="required">*</span></label>
                            <div class="col-lg-8">
                                {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'edit-first-name')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-last-name">Last name<span class="required">*</span></label>
                            <div class="col-lg-8">
                                {{ Form::text('last_name', null, array('class'=>'form-control', 'id' => 'edit-last-name')) }}
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-sm btn-success">Update information</button>
                        </div>
                    </fieldset>
                {{ Form::token() }}
                {{ Form::close() }}
                {{Form::model($user, array('route' => array('user.update.email', $user->id), 'class' => 'form-horizontal')) }}
                    <fieldset>
                        <legend>Change email:</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-email">Your email address<span class="required">*</span></label>
                            <div class="col-lg-8">
                                {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'edit-email')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-email-current-password">Current password<span class="required">*</span></label>
                            <div class="col-lg-8">
                                {{ Form::password('password', array('placeholder' => 'Password','class'=>'form-control', 'id' => 'edit-email-current-password')) }}
                                @if (Session::has('login_errors'))
                                <p class="help-block">Password incorrect.</p>
                                @else
                                <p class="help-block">We need you to confirm your password to change your email.</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-sm btn-success">Change</button>
                        </div>
                    </fieldset>
                {{ Form::token() }}
                {{ Form::close() }}
                {{Form::model($user, array('route' => array('user.update.password', $user->id), 'class' => 'form-horizontal')) }}
                    <fieldset>
                        <legend>Change password</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-password-current-password">Current password<span class="required">*</span></label>
                            <div class="col-lg-8">
                               <!-- <input type="password" class="form-control" id="edit-password-current-password" value="sgaahf" required> -->
                                {{ Form::password('old_password', array('placeholder' => 'Password','class'=>'form-control', 'id' => 'edit-password-current-password')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-password-new-password">New password<span class="required">*</span></label>
                            <div class="col-lg-8">
                                <!--<input type="password" class="form-control" id="edit-password-new-password" value="sgasdgasdghahf" required> -->
                                {{ Form::password('password', array('placeholder' => 'Password','class'=>'form-control', 'id' => 'edit-password-new-password'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4" for="edit-password-repeat-password">Repeat password<span class="required">*</span></label>
                            <div class="col-lg-8">
                                <!-- <input type="password" class="form-control" id="edit-password-repeat-password" value="sgasghahf" required> -->
                                 {{ Form::password('password_confirmation', array('placeholder' => 'Password','class'=>'form-control', 'id' => 'edit-password-repeat-password'))}}
                                 @if (Session::has('password_changed'))
                                 <p class="help-block">{{Session::get('password_changed') }}</p>
                                 @endif
                             </div>
                         </div>
                         <div class="form-submit">
                             <button type="submit" class="btn btn-sm btn-success">Change</button>
                         </div>
                     </fieldset>
                 {{ Form::token() }}
                 {{ Form::close() }}
             </div>
         </div>
    </div>

    <div class="web-cam-wrapper">
        <div class="video-container friend-camera va-middle" id="remoteVideos">
        </div>
        <div class="video-container my-camera" id="localVideo">
        </div>
        <div class="call-controls">
            <span class="action btn btn-danger webrtc-decline"><i class="glyphicon glyphicon-earphone"></i></span>
            <button id="video-full-screen-toggle" class="action btn btn-primary"><i class="glyphicon glyphicon-fullscreen"></i></button>
        </div>
    </div>

</div>