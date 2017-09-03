<?php 
include("connection.php");
$id=$_GET['id'];
$resu=$_GET['sts'];
$query=mysql_query("Update `interview` set status='finished',result='$resu' WHERE `userid`='$id'");
if ($query) {
	header("location:view_interview.php");
}
 ?>