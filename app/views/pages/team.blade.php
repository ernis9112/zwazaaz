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

        <style>
            #our-team {
                list-style: none;
                width: 100%;
                min-height: 230px;
                padding: 0;
                margin: 0 0 30px 0;
                clear: both;
            }
            #our-team li {
                display: block;
                float: left;
                width: 20%;
                padding: 0 1%;
                margin: 0;
                cursor: pointer;
            }
            #our-team li img {
                width: 100%;
            }
            #our-team li span, .we-are-zwazaaz {
                display: block;
                text-align: center;
            }
            #our-team img, .team img {
                margin:0px 45px 10px 0px;
                max-width: 547px;
                height: auto;
                -webkit-border-radius: 140px;
                -moz-border-radius: 140px;
                border-radius: 140px;
            }
            .team {
                display: none;
            }
            .we-are-zwazaaz {
                font-size: 200%;
                padding: 0 15%;
            }
            .alignleft {
                float: left;
            }
        </style>
        {{ HTML::script('assets/bootstrap-3.0.0/assets/js/jquery.js') }}
        <script>
            jQuery(document).ready(function(){
                jQuery('#our-team li').click(function(){
                    var we = '.' + jQuery(this).attr('class').split(' ')[0];
                    var we_t = '.' + jQuery(this).attr('class').split(' ')[0] + '_t';
                    jQuery('.current').removeClass('current');
                    jQuery(this).addClass('current');
                    jQuery('.team').addClass('not-show');
                    jQuery(we_t).removeClass('not-show');
                    if(!jQuery(this).hasClass('current'))
                        jQuery('.team').hide('slow');
                    else
                        jQuery('.not-show').hide('fast');
                    jQuery(we_t).slideDown('fast');
                });
            });
        </script>

        <!-- main content -->
        <div class="main-content" style="width:100%">
            <h1>Our Team</h1>
            <div class="team ernestas_t"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg" width="300" height="300"><p></p>
                <h2>Ernestas Oželis – projekto koordinatorius</h2>
                <h4>Kauno technologijos universitetas /&nbsp;Informatikos fakultetas / Programų sistemos</h4>
                <p>Planuoju visą procesą, analizuoju projekto reikalavimus, palaikau ryšį su užsakovu. Taip pat programuoju vartotojo identifikavimo sritį, administruoju svetainę.</p>
                <p>Laisvalaikis: žvejyba, knygų skaitymas, tenisas.</p>
                <p>Moto: šiandien būtent ta diena, kai gali TAI pradėti!</p>
                <p>&nbsp;</p>
                <p><strong>Zwazaaz vartotojo vardas:</strong> Ernestas</p>
                <p><strong>El. paštas:</strong> ernis9112@gmail.com</p>
                <p>&nbsp;</p>
                <hr style="clear: both;">
            </div>
            <div class="team aidas_t"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg" width="300" height="300"><p></p>
                <h2>Aidas Klimas – vyr. programuotojas</h2>
                <h4>Kauno technologijos universitetas /&nbsp;Informatikos fakultetas / Programų sistemos</h4>
                <p>Planuoju proceso vystymą, analizuoju reikalavimus, administruoju Agile lentą. Programuoju skambinimo sąsajos sritį, integruoju WebRTC technologiją.</p>
                <p>Laisvalaikis: —</p>
                <p>Moto: —</p>
                <p>&nbsp;</p>
                <p><strong>Zwazaaz vartotojo vardas:</strong>&nbsp;Aidas</p>
                <p><strong>El. paštas:</strong> aidaskk@gmail.com</p>
                <p>&nbsp;</p>
                <hr style="clear: both;">
            </div>
            <div class="team simas_t"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg" width="300" height="300"><p></p>
                <h2>Simas Skilinskas – Front-End programuotojas</h2>
                <h4>Kauno technologijos universitetas /&nbsp;Informatikos fakultetas / Programų sistemos</h4>
                <p>Kuriu projekto dizainą, programuoju prisitaikymą prie įvairių įrenginių, administruoju Agile lentą, testuoju Front End dalį.</p>
                <p>Laisvalaikis: —</p>
                <p>Moto: —</p>
                <p>&nbsp;</p>
                <p><strong>Zwazaaz vartotojo vardas:</strong> Simas</p>
                <p><strong>El. paštas:</strong> simskil@gmail.com</p>
                <p>&nbsp;</p>
                <hr style="clear: both;">
            </div>
            <div class="team elvinas_t"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg" width="300" height="300"><p></p>
                <h2>Elvinas Jakubcevičius – Back-End programuotojas</h2>
                <h4>Kauno technologijos universitetas /&nbsp;Informatikos fakultetas / Programų sistemos</h4>
                <p>Sprendžiu klausimus, susijusius su registruoto vartotojo profiliu.&nbsp;Programuoju minėtą sritį bei sąsają su kitomis sistemos dalimis, testuoju Back-End dalį.</p>
                <p>Laisvalaikis: —</p>
                <p>Moto: —</p>
                <p>&nbsp;</p>
                <p><strong>Zwazaaz vartotojo vardas:</strong> elvinoza</p>
                <p><strong>El. paštas:</strong> elvinoza@gmail.com</p>
                <p>&nbsp;</p>
                <hr style="clear: both;">
            </div>
            <div class="team mazvydas_t"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg" width="300" height="300"><p></p>
                <h2>Mažvydas Čepulkovskis – Back-End programuotojas</h2>
                <h4>Kauno technologijos universitetas /&nbsp;Informatikos fakultetas / Programų sistemos</h4>
                <p>Sprendžiu klausimus, susijusius su vartotojo kontaktų knyga. Programuoju minėtą sritį bei sąsają su kitomis sistemos dalimis, testuoju Back-End dalį.</p>
                <p>Laisvalaikis: krepšinis, gatvės šokiai</p>
                <p>Moto: —</p>
                <p>&nbsp;</p>
                <p><strong>Zwazaaz vartotojo vardas:</strong>mazvis</p>
                <p><strong>El. paštas:</strong> sivzam@gmail.com</p>
                <p>&nbsp;</p>
                <hr style="clear: both;">
            </div>
            <ul id="our-team">
                <li class="ernestas"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg"><br>
                    <span>Ernestas Oželis – Project Manager</span></li>
                <li class="aidas"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg"><br>
                    <span>Aidas Klimas – chief programmer</span></li>
                <li class="simas"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg"><br>
                    <span>Simas Skilinskas – Front-End Developer</span></li>
                <li class="elvinas"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg"><br>
                    <span>Elvinas Jakubcevičius – Back-End Developer</span></li>
                <li class="mazvydas"><img class="size-medium wp-image-63 alignleft" alt="no-photo" src="http://svetaine.zwazaaz.eu/wp-content/uploads/2013/12/no-photo-300x300.jpg"><br>
                    <span>Mažvydas Čepulkovskis – Back-End Developer</span></li>
            </ul>
            <br/><div class="we-are-zwazaaz">We are the ones who create who want to and who can. We are the <i>Zwazaaz</i> team.</div>
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