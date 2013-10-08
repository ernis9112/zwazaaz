<!DOCTYPE html>

<html lang="en">

<head>

    <link href="../assets/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <?php require_once("../inc/head.php"); ?>
</head>



<body class="home-page">

<div class="container">


    <ul class="nav nav-tabs" id="myTab">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="#messages">Messages</a></li>
      <li><a href="#settings">Settings</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="home">..5.</div>
      <div class="tab-pane" id="profile">..2.</div>
      <div class="tab-pane" id="messages">..3.</div>
      <div class="tab-pane" id="settings">..4.</div>
    </div>
</div>
</body>

<script>
$(function () {
    $('#myTab a:last').tab('show')
  })
</script>
</html>

