<?php
include("connection1.php");
//if(isset($_POST['submit']))
{
	$p_name = $_POST['p_name'];
    $p_id = $_POST['P_id'];
    $p_contact= $_POST['p_contact'];
    //$pin = $_POST['pin'];
    $bloodgroup = $_POST['bloodgroup'];
  //  $dob = $_POST['dob'];
	// $haddress = $_POST['haddress'];
	// $waddress = $_POST['waddress'];

  	$sql= "SELECT * FROM hospital_details WHERE h_username='454';
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
while($rows=mysqli_fetch_array($result))
  {


  echo   $h_lat=$rows['h_lat'];
    $h_lon=$rows['h_lon'];
    $H_name=$rows['hospital_name'];

    $address=$rows['address'];
    $contact1=$rows['contact1'];
    $contact2=$rows['contact2'];

  }

}

$h_latp =$h_lat+0.000001;
$h_latn =$h_lat-0.000001;

$h_lonp =$h_lon+0.000001;
$h_latn =$h_lat-0.000001;

$sql= "select mobile from user_details where bloodgroup='$bloodgroup' and lat between $latp and $latn";
if ($result->num_rows > 0) {
while($rows=mysqli_fetch_array($result))
  {
		echo $rows['mobile'];
  }

}





$ch = curl_init();
$user="lakshman.k@mca.christuniversity.in:123456";
$receipientno="9845785144";
$senderID="TEST SMS";
$msgtxt="this is a test message ";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; }
curl_close($ch);


 ?>
