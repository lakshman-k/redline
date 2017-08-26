<?php
include("connection.php");
//if(isset($_POST['submit']))
{
	//if(isset($_POST['name']))
	$name = $_POST['name'];
	$uname = $_POST['uname'];
    $mobile = $_POST['mobile'];
    $pin = $_POST['pin'];
   // $bloodgroup = $_POST['bloodgroup'];
    //$dob = $_POST['dob'];
	$address = $_POST['address'];
	//$waddress = $_POST['address1'];
	$city = $_POST['city'];
	//$Pincode=$_POST['Pincode'];
    
	
	try {
    $sql = "INSERT INTO bloodbank_details(name, uname, mobile, pin, address,city) 
	VALUES('$name','$uname','$mobile','$pin','$address','$city')";
    
    $sql=mysqli_query($conn,$sql);
	
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    if($sql==true)
    {
        //echo "New record created successfully";
		header("location:login.html");
		
    }
    else{
        echo "failed";
    }
}
?>