<!DOCTYPE html>

<html lang="en">

<head>

    <?php require_once("../inc/head.php"); ?>
</head>



<body class="register-page">

<div class="container">
    <form>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a class="logo-link" href="#">
                    <img src="../assets/img/logo.png" alt="Zwazaaz">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <fieldset>
                    <legend>Personal information:</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="register-first-name">First name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="register-first-name" value="zwazaazius" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="register-last-name">Last name<span class="required">*</span></label>
                                <input type="text" class="form-control" id="register-last-name" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="register-name">Your email address<span class="required">*</span></label>
                                <input type="email" class="form-control" id="register-name" placeholder="example@example.exm" required>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-sm-6">
                <fieldset>
                    <legend>Zwazaaz information:</legend>
                    <div class="form-group has-error">
                        <label class="control-label" for="register-username">Zwazaaz Name<span class="required">*</span></label>
                        <input type="text" class="form-control" id="register-username" value="sup" required>
                        <p class="help-block">Your Zwazaaz Name must be between 6-32 characters, start with a letter and contain only letters and numbers (no spaces or special characters).</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="register-password">Password<span class="required">*</span></label>
                                <input type="password" class="form-control" id="register-password" value="sgasdgasdghahf" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-error">
                                <label class="control-label" for="register-repeat-password">Repeat password<span class="required">*</span></label>
                                <input type="password" class="form-control" id="register-repeat-password" value="sgasghahf" required>
                                <p class="help-block">Passwords do not match!</p>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-lg btn-primary">Register</button>
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

