<?php 
include("connection.php");
$id=$_GET['id'];
if (isset($_GET['Unblock'])) {
	$query=mysql_query("UPDATE `user` SET `status`='Active' WHERE `uid`='$id'");
	if ($query) {
	header("location:manage_user.php");
}
}
elseif (isset($_GET['Block'])) {
$query=mysql_query("UPDATE `user` SET `status`='Blocked' WHERE `uid`='$id'");
if ($query) {
	header("location:manage_user.php");
}
}

 ?>