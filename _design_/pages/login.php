<!DOCTYPE html>

<html lang="en">

<head>

    <?php require_once("../inc/head.php"); ?>
</head>



<body class="sign-in-page">

<div class="container">
    <form>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#">
                    <img src="../assets/img/logo.png" alt="hwazaah">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> We didn't recognize your sign-in details. Please check your Hwazaah Name and password, then try again.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label" for="sign-in-name">Hwazaah Name</label>
                    <input type="text" class="form-control" id="sign-in-name" value="hwazaazius" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="sign-in-password">Password</label>
                    <input type="password" class="form-control" id="sign-in-password" value="sgasdgasdghahf" required>
                </div>
                <div class="form-group btn-group" data-toggle="buttons">
                    <label class="btn custom-checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default">Sign in</button>&nbsp;or&nbsp;<a href="#">Create an account</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Alternatively, sign in with</label>
                </div>
                <div class="form-group">
                    <a href="#"><img class="icon" src="../assets/img/icon-facebook.png" alt="fb">&nbsp;<span class="va-middle">Facebook</span></a>
                </div>
                <div class="form-group">
                    <a href="#"><img class="icon" src="../assets/img/icon-google.png" alt="g+">&nbsp;<span class="va-middle">Google+</span></a>
                </div>
            </div>
        </div>
    </form>
</div> <!-- /container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/bootstrap-3.0.0/assets/js/jquery.js"></script>
<script src="../assets/bootstrap-3.0.0/dist/js/bootstrap.js"></script>

<script src="../assets/bootstrap-3.0.0/assets/js/holder.js"></script>

<script src="../assets/bootstrap-3.0.0/assets/js/application.js"></script>


</body>

</html>

