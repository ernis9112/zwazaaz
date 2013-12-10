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
        <nav class="navbar navbar-default navbar-absolute" role="navigation">
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
                    <li class="active"><a href="{{ asset('page/about') }}">About</a></li>
                    <li><a href="{{ asset('page/team') }}">Team</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ asset('page/how-to-use') }}">How to use</a></li>
                            <li><a href="{{ asset('page/problems-with-mind') }}">Problems with mind</a></li>
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

        <!-- main content -->
        <div class="main-content" style="width:100%">
            <h1>Page title</h1>
            <p>Info page content.</p>
        </div>
        <!-- main content end -->
        @section('form_modals')
        @if(Auth::check())
        @include('plugins.upload_modal')
        @endif

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