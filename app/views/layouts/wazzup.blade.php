<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> Zwazaaz | Free online calling </title>
    <meta name="keywords" content="online, video, chat, WebRTC "/>
    <meta name="description" content="Free online video chat system  based on  WebRTC   working on  web browsers with Real-Time Communications (RTC) capabilities "/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/prettyPhoto.css"/>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="js/main3.js"></script>
    <script type="text/javascript" src="js/organictabs.jquery.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery-mobilemenu.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.to-top').click(function() {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        });
    </script>
</head>
<body>
    {{ $content }}


    <div class="footer">
        <div class="wrapper">
            <div class="row-fluid">
                <div class="span6 copy">
                    <p>© 2013 Zwazaaz</p>
                </div>

                <div class="span6 right visible-desktop">
                    <a href="#toppage" class="to-top"></a>
                    <ul class="bottom-menu visible-desktop">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>