<?php 
include("connection.php");
$id=$_GET['id'];
$query=mysql_query("DELETE FROM `user` WHERE `uid`='$id'");
if ($query) {
	header("location:manage_user.php");
}
 ?>