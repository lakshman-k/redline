<?php
include("connection.php");
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM `job` WHERE jid='$id'");
if ($qry) {
	header("location:postings.php");
	
	# code...
}

?>
