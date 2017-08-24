<?php
include("connection.php");
//if(isset($_POST['submit']))
{
	//if(isset($_POST['name']))
	$name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pin = $_POST['pin'];
    $bloodgroup = $_POST['bloodgroup'];
    $dob = $_POST['dob'];
	$haddress = $_POST['address'];
	$waddress = $_POST['address1'];
	$city = $_POST['city'];
	//$Pincode=$_POST['Pincode'];
    
	
	try {
    $sql = "INSERT INTO user_details(name, mobile, pin, bloodgroup, dob,homeaddress,workaddress,city) 
	VALUES('$name','$mobile','$pin','$bloodgroup','$dob','$haddress','$waddress','$city')";
    
    $sql=mysqli_query($conn,$sql);
	
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    if($sql==true)
    {
        echo "New record created successfully";
		
    }
    else{
        echo "failed";
    }
}
?>