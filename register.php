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
	$haddress = $_POST['haddress'];
	$hcity = $_POST['hcity'];
	$waddress = $_POST['waddress'];
	$wcity = $_POST['wcity'];
	//$Pincode=$_POST['Pincode'];
    
	
	try {
    $sql = "INSERT INTO user_details(name, mobile, pin, bloodgroup, dob,haddress,hcity,waddress,wcity) 
	VALUES('$name','$mobile','$pin','$bloodgroup','$dob','$haddress','hcity','$waddress','$wcity')";
    
    $sql=mysqli_query($conn,$sql);
	
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    if($sql==true)
    {
       // echo "New record created successfully";
	   header("location:login.html");
		
    }
    else{
        echo "failed";
    }
}
?>