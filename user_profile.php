<?php
session_start();
include("connection.php");
include("header.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Redline</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="style.css">


</head>
<style>
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:500px;
    width:200px;
    float:left;
    padding:5px;
}
#section {
    width:850px;
    float:left;
    padding:10px;
}
</style>


<!-- Page Content -->


<div id="nav">
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
<body>
   <a style="margin-top:-70px;margin-right:10px;  position:relative"  class="pull-right" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

<h3>Welcome User </h3>

<div class="vertical-menu">
  <a href="user_info.php" class="active">Info</a>
  <a href="#">Donations</a>
  <a href="#">Donate Now</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>
</div>

<div id="section">

</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<!--  <script src="js/index.js"></script>
-->

</body>
</html>
