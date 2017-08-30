<?php
   include("connection.php");
echo "465";
  
   	$mobile = $_POST['mobile'];
    $pin = $_POST['pin'];
	$sql= "SELECT mobile FROM user_details WHERE mobile='$mobile' and pin='$pin'";
    $result=mysqli_query($conn,$sql);
   // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo "465";
   	if(mysqli_fetch_array($result))
		{
			session_start();
			$_SESSION['mobile']='mobile';
			header("location:user_info.php");
			echo "465";
		}
    else
		{
			//header("location:index.php");
			echo "465";
		}
	


/* if($count == 1) {
		  echo "successss";
         session_register("$name");
         $_SESSION['login_user'] = $name;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }*/
   //echo "465";
  ?> 






 
     
 
<!--   Code below does not work properly
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
      $pin = mysqli_real_escape_string($conn,$_POST['pin']); 
      
      $sql = "SELECT mobile FROM user_details WHERE mobile = '$mobile' and pin = '$pin'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  echo "successss";
         session_register("$name");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
  ?> 
-->


 