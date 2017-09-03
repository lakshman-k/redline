<?php
include("connection.php");
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM `question` WHERE  qid='$id'");
if ($qry) {
	header("location:question_bank.php");
}
echo '<script>}</script>';
?>
