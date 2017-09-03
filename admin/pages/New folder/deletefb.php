<?php
include("connection.php");
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM `feedback` WHERE  id='$id'");
if ($qry) {
    header("location:feedbacks.php");
    
    # code...
}

?>
