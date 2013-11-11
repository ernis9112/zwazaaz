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
    {{ HTML::link('/profile', $userName, array('class' => 'profile-link active')) }}
    <form class="online-status">
        <select>
            <option>Online</option>
            <option>Away</option>
        </select>
    </form>
</div>
<div class="contact-search">
    {{ Form::open(array('route' => 'search.friend', 'id' => 'search-form')) }}
        <input type="search" placeholder="Search contacts" class="form-control" name="friend-search" id="friend-search">
    <!--    <ul id="livesearch" class="contacts-list"></ul>
    {-{ Form::token() }-}
    {-{ Form::close() }-}-->
</div>
<div class="tabs">
<ul class="nav nav-tabs" id="sidebarTabs1">
    <li class="active"><a href="#contacts">Contacts</a></li>
    <li><a href="#recent">Recent</a></li>
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

        <?php /*<li class="active">
            <a href="#">
                <span class="user-img">
                    <img src="../_design_/assets/img/user-blank.jpg" alt="username">
                </span>
                <span class="display-name">Rokas Budnikas</span>
            </a>
            <div class="contact-actions">
                <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                <button class="action btn btn-danger"><i class="glyphicon glyphicon-earphone"></i></button>
                <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
            </div>
        </li>*/?>

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
    {{ Form::token() }}
    {{ Form::close() }}
</div>

</div>
</div>
</aside>
<div class="main-content">

    <div class="profile-view">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                        <img src="../_design_/assets/img/user-blank.jpg" alt="UserName">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Name
                    </div>
                    <div class="info-value col-md-7">
                        Rokas Budnikas
                    </div>
                </div>
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Zwazaaz name
                    </div>
                    <div class="info-value col-md-7">
                        rokasbud
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-actions">
                    <a href="#" class="action btn btn-success btn-lg"><i class="glyphicon glyphicon-earphone"></i><span class="text">Call</span></a>
                </div>
                <div class="contact-actions pull-right">
                    <a href="#" class="action btn btn-warning btn-xs"><i class="glyphicon glyphicon-trash"></i><span class="text">Remove</span></a>
                    <a href="#" class="action btn btn-danger btn-xs"><i class="glyphicon glyphicon-ban-circle"></i><span class="text">Block</span></a>
                </div>
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