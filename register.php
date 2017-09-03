<?php
include("connection.php");
//if(isset($_POST['submit']))
{
	$name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pin = $_POST['pin'];
    $bloodgroup = $_POST['bloodgroup'];
    $dob = $_POST['dob'];
	$haddress = $_POST['haddress'];
	$waddress = $_POST['waddress'];
	try {
		$address=$haddress;
		include ('geocords.php');

   $sql = "INSERT INTO user_details (name, mobile, pin, bloodgroup, dob,haddress,waddress,lat,lon) VALUES ('$name','$mobile','$pin','$bloodgroup','$dob','$haddress','$waddress','$latitude','$longitude')";
    // use exec() because no results are returned
 $conn->exec($sql);
   //echo "New record created successfully";
	 session_start();
$_SESSION['u_type']="donor";
	 $_SESSION['uname']='$mobile';

	 header("location:user_info.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
}
?>
