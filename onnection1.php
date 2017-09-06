<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password,"redline");

// Check connection
if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
