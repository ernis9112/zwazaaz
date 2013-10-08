<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <link href="../assets/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <?php require_once("../inc/head.php"); ?>
</head>



<body class="home-page">

<div class="container">
    <div class="row">
        <aside class="main-sidebar">
            <div class="user-status">
                <a href="#profile" class="profile-link active">Simas</a>
                <form class="online-status">
                    <select>
                        <option>Online</option>
                        <option>Away</option>
                    </select>
                </form>
            </div>
            <div class="tabs">
                <ul class="nav nav-tabs" id="sidebarTabs1">
                    <li class="active"><a href="#contacts">Contacts</a></li>
                    <li><a href="#recent">Recent</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Aidas Klimas</span>
                                    <span class="new-message-num">5</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Rokas Budnikas</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Simas</span>
                                    <span class="new-message-num">83</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Elvis</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Ernestas</span>
                                    <span class="new-message-num">9+</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg">
                                </span>
                                    <span class="display-name">Senasis_Greideris</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="recent">
                    </div>
                </div>
            </div>
        </aside>
        <div class="main-content">
            <div class="profile-edit">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profile-image-wrapper">
                            <img src="../assets/img/user-blank.jpg" alt="Simas">
                        </div>
                        <!-- this will open popup-->
                        <button class="btn btn-default btn-xs">change image</button>
                    </div>
                    <div class="col-sm-9">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Personal information:</legend>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="register-first-name">First name<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="register-first-name" value="zwazaazius" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="register-last-name">Last name<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="register-last-name" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="register-name">Your email address<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" id="register-name" placeholder="example@example.exm" required>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Change password</legend>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="register-password">Current password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="register-password" value="sgaahf" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="register-password">New password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="register-password" value="sgasdgasdghahf" required>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="control-label col-lg-4" for="register-repeat-password">Repeat password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="register-repeat-password" value="sgasghahf" required>
                                        <p class="help-block">Passwords do not match!</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div> <!-- /container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/jQuery/jquery-1.10.2.min.js"></script>
<script src="../assets/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>

<script src="../assets/bootstrap-3.0.0/assets/js/holder.js"></script>

<script src="../assets/bootstrap-3.0.0/assets/js/application.js"></script>


<script src="../assets/js/script.js"></script>


</body>

</html>

