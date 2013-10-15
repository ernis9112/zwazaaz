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
    <a href="#profile" class="profile-link">Simas</a>
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
    <div class="profile-view">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                        <img src="../assets/img/user-blank.jpg" alt="UserName">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Name
                    </div>
                    <div class="info-value col-md-7">
                        Simas Skilinskas
                    </div>
                </div>
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Zwazaaz name
                    </div>
                    <div class="info-value col-md-7">
                        simaks
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-actions">
                    <a href="#" class="action btn btn-success btn-lg"><i class="glyphicon glyphicon-earphone"></i><span class="text">Call</span></a>
                    <a href="#" class="action btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i><span class="text">remove contact</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



</div> <!-- /container -->
<div class="incoming-call">
    <div class="caller-info">
        Zwazius calling...
    </div>
    <div class="call-actions">
        <a href="#" class="action btn btn-success btn-lg"><i class="glyphicon glyphicon-earphone"></i></a>
        <a href="#" class="action btn btn-danger btn-lg"><i class="glyphicon glyphicon-earphone"></i></a>
    </div>
</div>


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

