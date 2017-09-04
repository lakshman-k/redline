<?php
session_start();
session_destroy();
header("location:/Redline/index.php");
?>