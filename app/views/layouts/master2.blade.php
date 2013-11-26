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
        <source src="{{ asset('assets/sounds/Matrix_Phone.ogg') }}" type="audio/ogg">
        <source src="{{ asset('assets/sounds/Matrix_Phone.mp3') }}" type="audio/mpeg">
    </audio>
</div>

<div class="container">

        <div style="position: relative;">
            <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="toggle-sidebar navbar-toggle" type="button" data-target=".main-sidebar" title="Toggle sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" title="Toggle menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ asset('') }}">Zwazaaz</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Zwazaaz team</a></li>
                            <li><a href="#">About project</a></li>
<!--                            <li><a href="#">Something else here</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#">Separated link</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#">One more separated link</a></li>-->
                        </ul>
                    </li>
                </ul>
<!--                <form class="navbar-form navbar-left" role="search">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="Search">-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-default">Submit</button>-->
<!--                </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ asset('logout') }}">logout&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        </div>
        <div class="page-content">

        <aside class="main-sidebar">
            <div class="user-status">
                <!--<a href="#profile" class="profile-link">{{ $userName }}</a>-->
                {{ HTML::link('/profile', $userName, array('class' => 'profile-link')) }}
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
                    <!--<li><a href="#recent">Recent</a></li> (then will be resent)-->
                    <li class="hidden"><a href="#contact-search">Search</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="contacts">

                        <ul class="contacts-list">

                            @for ($i = 0; $i < sizeOf($contacts); $i++)
                            <li class="webrtc-user" id="webrtc-user-{{ $contacts[$i] }}" data-username="{{ $contacts[$i] }}">
                                <a href="{{ asset('user/'.$contacts[$i].'') }}">
                                    <span class="user-img">
                                        {{ HTML::image('assets/img/user-blank.jpg', 'username') }}
                                    </span>
                                    <span class="display-name">{{ $contacts[$i] }}</span>
                                    <span class="status webrtc-status"></span>
                                </a>
                                <div class="contact-actions">
                                    <button type="button" class="action btn btn-success webrtc-call">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                    </button>

                                    <a href="{{ asset('user/'.$contacts[$i].'') }}" class="action btn btn-info">
                                        <i class="glyphicon glyphicon-info-sign"></i>
                                    </a>

                                    <button class="action btn btn-warning add-or-del-to-list">
                                        <i class="glyphicon glyphicon-trash"></i>
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
                                        {{ HTML::image('assets/img/user-blank.jpg', 'username') }}
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
                                        {{ HTML::image('assets/img/user-blank.jpg', 'username') }}
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

        <!-- main content -->
        {{ $content2 }}
        <!-- main content end -->

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
            autoRemoveVideos: false,
            username: '{{ $userName }}'
        });
    </script>