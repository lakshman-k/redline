<?php
session_start();
include("connection.php");
include("header.php");


if(!(isset($_SESSION['uname']))){
    echo '<script> alert("session expired please login to continue!!");
    window.location="../login.php";
    </script>';
}


?>

<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>

<body>
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

<h3>Welcome H_user</h3>

<div class="vertical-menu">
  <a href="#" class="active">Requests</a>
  <a href="#">Recieved Blood</a>
  <a href="#">Organize Camps</a>
  <a href="#">Completed Camps</a>
  <a href="#">info</a>
</div>
</div>

<div id="section">

   <a style="margin-top:-70px;margin-right:10px;  position:relative"  class="pull-right" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

  <button type="button" onclick="location.href = 'req_b.php';" id="edit" class="btn btn-success" >Request Blood<span class="glyphicon glyphicon-send" ></span></button>


 </div>
 </body>
 </html>

 <!-- Logout trial-->
