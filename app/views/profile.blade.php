{{-----------------------------Do not delete this code------------------------}}
@if (Session::get('just_reg') == "yes")

<div class="col-sm-12">
    <div class="alert alert-success">
        <strong>@lang('registration.great')</strong>
        @lang('registration.success')
    </div>
</div>

{{ Session::forget('just_reg') }}
@endif
{{----------------------------------------------------------------------------}}
<div class="incoming-call">
    <div class="caller-info">
        <span class="who"></span> calling...
    </div>
    <div class="call-actions">
        <a href="#" class="action btn btn-success btn-lg answer"><i class="glyphicon glyphicon-earphone"></i><span class="text">Answer</span></a>
        <a href="#" class="action btn btn-danger btn-lg decline"><i class="glyphicon glyphicon-remove-circle"></i><span class="text">Decline</span></a>
    </div>
    <audio preload loop>
        <source src="assets/sounds/Matrix_Phone.ogg" type="audio/ogg">
        <source src="assets/sounds/Matrix_Phone.mp3" type="audio/mpeg">
    </audio>
</div>

<div class="mobile-navigation hidden-md hidden-lg">
    <button class="toggle-sidebar" type="button" data-target=".main-sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="container">
<div class="row">
<aside class="main-sidebar">
<div class="user-status">
    <!--<a href="#profile" class="profile-link">{{ $userName }}</a>-->
    {{ HTML::link('/dashboard', $userName, array('class' => 'profile-link active')) }}
    <form class="online-status">
        <select>
            <option>Online</option>
            <option>Away</option>
        </select>
    </form>
</div>
<div class="contact-search">
    {{ Form::open(array('route' => 'search.friend', 'id' => 'search-form')) }}
        <input type="search" placeholder="Search contacts" class="form-control" name="friend-search" id="friend-search" autocomplete="off">
    {{ Form::token() }}
    {{ Form::close() }}
</div>
<div class="tabs">
<ul class="nav nav-tabs" id="sidebarTabs1">
    <li class="active"><a href="#contacts">Contacts</a></li>
    <!--<li><a href="#recent">Recent</a></li>-->
    <li class="hidden"><a href="#contact-search">Search</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="contacts">

    <ul class="contacts-list">

        @for ($i = 0; $i < sizeOf($contacts); $i++)
        <li class="webrtc-user" id="webrtc-user-{{ $contacts[$i] }}" data-username="{{ $contacts[$i] }}">
            <a href="#">
                    <span class="user-img">
                        <img src="assets/img/user-blank.jpg" alt="username">
                    </span>
                <span class="display-name">{{ $contacts[$i] }}</span>
                <span class="status webrtc-status"></span>
            </a>
            <div class="contact-actions">
                <span class="action btn btn-success webrtc-call">
	                <i class="glyphicon glyphicon-earphone"></i>
                </span>
                <button class="action btn btn-info">
                    <i class="glyphicon glyphicon-info-sign"></i>
                </button>
            </div>
        </li>

        @endfor
    </ul>
</div>
<div class="tab-pane chat-history" id="recent">
    <time class="chat-time" datetime="2013-10-09">Today</time>
    <ul class="contacts-list">
        <li>
            <a href="#">
                            <span class="user-img">
                                <img src="../_design_/assets/img/user-blank.jpg" alt="username">
                            </span>
                <span class="display-name">Aidas Klimas</span>
                <span class="new-message-num">5</span>
            </a>
            <div class="contact-actions">
                <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
            </div>
        </li>
    </ul>
    <time class="chat-time" datetime="2013-10-08">Yesterday</time>
    <ul class="contacts-list">
        <li>
            <a href="#">
                            <span class="user-img">
                                <img src="../_design_/assets/img/user-blank.jpg" alt="username">
                            </span>
                <span class="display-name">Ernestas</span>
                <span class="new-message-num">9+</span>
            </a>
            <div class="contact-actions">
                <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
            </div>
        </li>
    </ul>
</div>

<div class="tab-pane" id="contact-search">
    <ul id="livesearch" class="contacts-list"></ul>
</div>

</div>
</div>
</aside>
<div class="main-content">

    <div class="profile-edit">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                        <img src="{{URL::to('http://www.gravatar.com/avatar/' . md5( strtolower( trim( $user->email ) ) ) . '?d=' . urlencode( '../public/assets/img/user-blank.jpg' ) . '&s=' . 140)}}" alt="username">
                    </div>
                    <!-- this will open popup-->
                    <button class="btn btn-default btn-xs">change image</button>
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
                        <div class="form-group has-error">
                            <label class="control-label col-lg-4" for="edit-password-repeat-password">Repeat password<span class="required">*</span></label>
                            <div class="col-lg-8">
                                <!-- <input type="password" class="form-control" id="edit-password-repeat-password" value="sgasghahf" required> -->
                                 {{ Form::password('password_confirmation', array('placeholder' => 'Password','class'=>'form-control', 'id' => 'edit-password-repeat-password'))}}
                                 @if (Session::has('password_changed'))
                                 <p class="help-block">{{Session::get('password_changed') }}</p>
                                 @else
                                 <p class="help-block">Passwords do not match!</p>
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
</div>

<!-- Required script for contacts search and add -->
{{ HTML::script('assets/contacts/search-and-add.js') }}

{{ HTML::script('assets/js/socket.io.js') }}
{{ HTML::script('assets/js/simplewebrtc.bundle.js') }}
{{ HTML::script('assets/js/dashboard-webrtc.js') }}
{{ HTML::script('assets/js/dashboard.js') }}
<script>
    dashboard.init({
        url: "http://144.76.59.98:8888",
        debug: true,
        // the id/element dom element that will hold "our" video
        localVideoEl: 'localVideo',
        // the id/element dom element that will hold remote videos
        remoteVideosEl: 'remoteVideos',
        // immediately ask for camera access
//        autoRequestMedia: true,
        username: '{{ $userName }}'
    });
</script>