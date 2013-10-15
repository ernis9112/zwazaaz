<!DOCTYPE html>

<html lang="en">

<head>

    <link href="../assets/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <?php require_once("../inc/head.php"); ?>
</head>



<body class="home-page">
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
                <a href="#profile" class="profile-link active">Simas</a>
                <form class="online-status">
                    <select>
                        <option>Online</option>
                        <option>Away</option>
                    </select>
                </form>
            </div>
            <div class="contact-search">
                <form>
                    <input type="search" placeholder="Search contacts" class="form-control">
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
                                    <img src="../assets/img/user-blank.jpg" alt="username">
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
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                            <span class="display-name">Rokas Budnikas</span>
                        </a>
                        <div class="contact-actions">
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                            <button class="action btn btn-danger"><i class="glyphicon glyphicon-earphone"></i></button>
                            <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                            <span class="display-name">Simas</span>
                            <span class="new-message-num">83</span>
                        </a>
                        <div class="contact-actions">
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                            <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                            <span class="display-name">Elvis</span>
                        </a>
                        <div class="contact-actions">
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                            <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
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
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                            <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                        </a>
                        <div class="contact-actions">
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                            <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                            <span class="display-name">Senasis_Greideris</span>
                        </a>
                        <div class="contact-actions">
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                            <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                            <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane chat-history" id="recent">
            <time class="chat-time" datetime="2013-10-09">Today</time>
            <ul class="contacts-list">
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
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
                <li class="active">
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Rokas Budnikas</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-danger"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Simas</span>
                        <span class="new-message-num">83</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Elvis</span>
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
                                    <img src="../assets/img/user-blank.jpg" alt="username">
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
            <time class="chat-time" datetime="2013-10-05">2013-10-05</time>
            <ul class="contacts-list">
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">-=Ξ=[M] a ž v i s=Ξ=-</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
                <li>
                    <a href="#">
                                <span class="user-img">
                                    <img src="../assets/img/user-blank.jpg" alt="username">
                                </span>
                        <span class="display-name">Senasis_Greideris</span>
                    </a>
                    <div class="contact-actions">
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-facetime-video"></i></button>
                        <button class="action btn btn-success"><i class="glyphicon glyphicon-earphone"></i></button>
                        <button class="action btn btn-info"><i class="glyphicon glyphicon-info-sign"></i></button>
                    </div>
                </li>
            </ul>
            </div>
            </div>
            </div>
        </aside>
        <div class="main-content">
            <div class="profile-edit">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profile-img">
                            <div class="profile-img-wrapper">
                                <img src="../assets/img/user-blank.jpg" alt="Simas">
                            </div>
                            <!-- this will open popup-->
                            <button class="btn btn-default btn-xs">change image</button>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Personal information</legend>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-first-name">First name<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="edit-first-name" value="zwazaazius" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-last-name">Last name<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="edit-last-name" value="" required>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-sm btn-success">Update information</button>
                                </div>
                            </fieldset>
                        </form>
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Change email:</legend>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-email">Your email address<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" id="edit-email" placeholder="example@example.exm" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-email-current-password">Current password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="edit-email-current-password" value="sgaahf" required>
                                        <p class="help-block">We need you to confirm your password to change your email.</p>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-sm btn-success">Change</button>
                                </div>
                            </fieldset>
                        </form>
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Change password</legend>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-password-current-password">Current password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="edit-password-current-password" value="sgaahf" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4" for="edit-password-new-password">New password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="edit-password-new-password" value="sgasdgasdghahf" required>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="control-label col-lg-4" for="edit-password-repeat-password">Repeat password<span class="required">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="edit-password-repeat-password" value="sgasghahf" required>
                                        <p class="help-block">Passwords do not match!</p>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-sm btn-success">Change</button>
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

