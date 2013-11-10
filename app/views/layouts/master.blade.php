<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/bootstrap-3.0.0/assets/ico/favicon.png">
    <title>Zwazzaz</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/bootstrap-3.0.0/assets/js/html5shiv.js"></script>
    <script src="assets/bootstrap-3.0.0/assets/js/respond.min.js"></script>
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

<!-- Required script for dashboard page -->
{{ HTML::script('assets/js/script.js') }}


</body>

</html>