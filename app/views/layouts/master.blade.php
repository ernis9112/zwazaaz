<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>Zwazaaz</title>
    <meta name="keywords" content="online, video, chat, WebRTC "/>
    <meta name="description" content="Free online video chat system  based on  WebRTC   working on  web browsers with Real-Time Communications (RTC) capabilities "/>
    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/bootstrap-3.0.0/dist/css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/style.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ HTML::script('assets/bootstrap-3.0.0/assets/js/html5shiv.js') }}
    {{ HTML::script('assets/bootstrap-3.0.0/assets/js/respond.min.js') }}
    <![endif]-->
    {{ HTML::script('assets/bootstrap-3.0.0/assets/js/jquery.js') }}
</head>

<body class="{{ $bodyclass }}">
<div class="container">
    {{ $content }}
</div> <!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

{{ HTML::script('assets/bootstrap-3.0.0/dist/js/bootstrap.js') }}
{{ HTML::script('assets/bootstrap-3.0.0/assets/js/holder.js') }}
{{ HTML::script('assets/bootstrap-3.0.0/assets/js/application.js') }}
{{ HTML::script('assets/js/dashboard.js') }}
<!-- Required script for dashboard page -->
{{ HTML::script('assets/js/script.js') }}
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
        username: '{{ Auth::user()->username }}'
    });
</script>

</body>

</html>