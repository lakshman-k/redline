<?php
include("connection.php");
//if(isset($_POST['submit']))
{
  $pin = $_POST['pin'];
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		  $contact1 = $_POST['contact1'];
		  $email=$_POST['email'];
		  $contact2=$_POST['contact2'];
		$address = $_POST['address'];

	try {
	include ('geocords.php');
		$sql = "INSERT INTO blood_bank_details(bloodbank_name,pin, b_username,contact1, contact2, address,h_lat,h_lon,email)VALUES('$name',$pin,'$uname','$contact1','$contact2','$address',$latitude,$longitude,'$email')";

 $conn->exec($sql);
   echo "New record created successfully";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


}

?>
