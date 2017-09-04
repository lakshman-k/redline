<?php
session_start();
   include("connection.php");
   include 'header.php';
				if(isset($_POST['submit']))
					 {
								$choice = $_POST['type'];
								$uname=$_POST['name'];//name of the text box of usernname
								$pin=$_POST['pin']; //name of fth e password Textbox
							if($choice=="donor")
								{
									try
										{
											$sql= "SELECT * FROM user_details WHERE mobile='$uname' and pin='$pin'";
											$result=$conn->prepare($sql);
											$result->execute();
											$result1 = $result->fetchAll();
											//print_r($result1);
											//echo $result1[0][0];
											$_SESSION['mobile']=$result1[0][0];
											$_SESSION['pin']=$result1[0][1];
											$_SESSION['name']=$result1[0][2];
											$_SESSION['bloodgroup']=$result1[0][3];
											$_SESSION['dob']=$result1[0][4];
											$_SESSION['haddress']=$result1[0][5];
											$_SESSION['waddress']=$result1[0][6];
											//echo $_SESSION['name'];
											header("location:user_profile.php");
											
										}
									catch (PDOException $e)
										{
										  echo "error" .$e->getMessage();
										}
								}
								
							else if($choice=="hospital")
								{
									try
										{
											$sql= "SELECT * FROM hospital_details WHERE h_username='$uname' and pin='$pin'";
											$result=$conn->prepare($sql);
											$result->execute();
											$result1 = $result->fetchAll();
											//print_r($result1);
											//echo $result1[0][0];
											$_SESSION['h_username']=$result1[0][0];
											$_SESSION['pin']=$result1[0][1];
											$_SESSION['hospital_name']=$result1[0][2];
											$_SESSION['contact1']=$result1[0][3];
											$_SESSION['contact2']=$result1[0][4];
											$_SESSION['address']=$result1[0][5];
											$_SESSION['email']=$result1[0][10];
											//echo $_SESSION['hospital_name'];
											header("location:l_hospital.php");
											
										}
									catch (PDOException $e)
										{
										  echo "error" .$e->getMessage();
										}
								}	
							else if($choice=="bloodbank")
								{
									try
										{
											$sql= "SELECT * FROM  blood_bank_details WHERE b_username='$uname' and pin='$pin'";
											$result=$conn->prepare($sql);
											$result->execute();
											$result1 = $result->fetchAll();
											//print_r($result1);
											//echo $result1[0][0];
											$_SESSION['b_username']=$result1[0][0];
											$_SESSION['pin']=$result1[0][1];
											$_SESSION['bloodbank_name']=$result1[0][2];
											$_SESSION['contact1']=$result1[0][3];
											$_SESSION['contact2']=$result1[0][4];
											$_SESSION['address']=$result1[0][5];
											$_SESSION['email']=$result1[0][10];
											//echo $_SESSION['hospital_name'];
											header("location:bloodbank_info.php");
											
										}
									catch (PDOException $e)
										{
										  echo "error" .$e->getMessage();
										}
								}	
								
								
			}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
		 <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>

<body>

  <div class="container">

    <form class="well form-horizontal" action="" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>welcome back !</legend>

<!-- Text input-->
<!-- style sheet copied --->
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<div class="form-group">
  <label class="col-md-4 control-label">Select User Type</label>
    <div class="col-md-4 inputGroupContainer">

    <div class="input-group">
<!--<div class="tab">
  <button class="tablinks" onclick="location.reload();location.href='index.html'">Donor</button>
  <button class="tablinks" onclick="location.reload();location.href='hospital.html'">Hospital</button>
  <button class="tablinks" onclick="location.reload();location.href='blood_bank.html'">Blood Bank</button>
  </div>
  -->
   <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <select 	name="type" class="col-md-4 form-control selectpicker"   required >
			<option value="" selected>-- Choose the type of user --</option>
			<option value="donor" >Donor</option>
			<option value="hospital" >Hospital</option>
            <option value="bloodbank" >Blood Bank</option>
	</select>

</div>
  </div>
</div>

<!--  was not working at the time
<script>
function open(type) {
  if (type=='donor'){
	  window.open("index.html");

  }
	else if (type=='hospital'){
		window.open("hospital_register.html")
	}
	else
		window.open("bloodbank_register.html");
    evt.currentTarget.className += " active";
}
</script>
-->
<!-- cpied content over -->

<div class="form-group">
  <label class="col-md-4 control-label">Mobile No / User Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>





<!-- Text input-->


<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input name="pin" placeholder="Password" class="form-control" type="password">
    </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <input class="btn btn-warning" type="submit" value="Login" name="submit" class="glyphicon glyphicon-send"/>
  </div>
</div>


 <?php
      //   if (isset($_GET['fail']))
			// {
      //              echo "invalid username or password!";
      //       }
	?>
  </fieldset>
</form>

</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  <!--  <script src="js/index.js"></script>
  -->

</body>
</html>
