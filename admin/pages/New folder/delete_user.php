<?php
include("connection.php");
$id=$_GET['uid'];
$qry=mysql_query("DELETE FROM `user` WHERE uid='$id'");
if ($qry) {
    header("location:manage_user.php");
    
    # code...
}

?>
