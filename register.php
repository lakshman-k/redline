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
		$address=$haddress;
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');

// Convert the JSON to an array
$geo = json_decode($geo, true);

if ($geo['status'] == 'OK') {
  // Get Lat & Long
  $latitude = $geo['results'][0]['geometry']['location']['lat'];
  $longitude = $geo['results'][0]['geometry']['location']['lng'];

}
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redline";
 //   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO user_details (name, mobile, pin, bloodgroup, dob,haddress,hcity,waddress,wcity,lat,lon) VALUES ('$name','$mobile','$pin','$bloodgroup','$dob','$haddress','$hcity','$waddress','$wcity','$latitude','$longitude')";
    // use exec() because no results are returned
		
 $conn->exec($sql);
   echo "New record created successfully";
	//	$sql="INSERT INTO user_details(lat,lon ) VALUES('1.2434','23.4545')";
	//	$conn->exec($sql);
//	}
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

		//$sql = "INSERT INTO user_details(name, mobile, pin, bloodgroup, dob,haddress,hcity,waddress,wcity,lat,lon)VALUES('$name','$mobile','$pin','$bloodgroup','$dob','$haddress','$hcity','$waddress','$wcity','$latitude'','$longitude')";
    
   // echo $sql1=mysqli_query($conn,$sql);
	
    
   //if($sql1==true)
   // {
    //   echo "New record created successfully";
	 //  header("location:login.html");
		
//    }
  //  else{
     //   echo "failed";
    //}
}

?>