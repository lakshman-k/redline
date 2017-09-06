<<<<<<< HEAD
<?php
session_start();
include("connection1.php");
include("header.php");


if(!(isset($_SESSION['h_username']))){
    echo '<script> alert("session expired please login to continue!!");
    window.location="../login.php";
    </script>';
}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>hospital Register</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="style.css">


</head>

<body>
	 <a style="margin-top:-70px;margin-right:10px;  position:relative"  class="pull-right" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  <div class="container">

    <form class="well form-horizontal" action="" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Register with Us Today!</legend>

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
<!--<div class="form-group">
  <label class="col-md-4 control-label">Select User Type</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
<div class="tab">
<button class="tablinks"><a  href="index.php">Donor</a></button>
<button class="tablinks"><a  href="hospital.php">Hospital</a></button>
<button class="tablinks"><a  href="blood_bank.php">Blood Bank</a></button>
</div>
</div>
  </div>
</div>
-->

<!--  <button class="tablinks" onclick="window.open('index.html')">Donor</button>
  <button class="tablinks" onclick="location.reload();location.href='hospital.html'">Hospital</button>
  <button class="tablinks" onclick="window.open('blood_bank.html')">Blood Bank</button>-->


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
  <label class="col-md-4 control-label">Hospital Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control" readonly required name="name" placeholder="Hospital Name" class="form-control"  type="text"  value=<?php echo $_SESSION['hospital_name'];?>/>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Email id</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control"  required name="email" placeholder="E-mail " class="form-control"  type="text" value=<?php echo $_SESSION['email'];?>/>
    </div>
  </div>
</div>


<!-- Text input-->

 <script type="text/javascript">
  function minimum()
  {

    var pass=document.getElementById('mobile').value.length;
    if(pass!=10){
      alert("invalid mobile number");
      document.getElementById('mobile').value="";
    return false;
}
  }

</script>

<div class="form-group">
  <label class="col-md-4 control-label">contact 1</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
   <input  class="form-control" readonly required type="number" class="form-control"required name="contact1" id="mobile"  onchange="minimum()"  value=<?php echo $_SESSION['contact1'];?>/>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">contact 2</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
   <input  class="form-control"   readonly type="number" class="form-control" name="contact2" id="mobile"  onchange="minimum()" placeholder="Enter alternate number"	value=<?php echo $_SESSION['contact2'];?>/>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control" readonly required name="uname" placeholder="User Name" class="form-control"  type="text" value=<?php echo $_SESSION['h_username'];?>/>
    </div>
  </div>
</div>

<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input class="form-control" readonly required name="pin" placeholder="Password" class="form-control" type="password" value=<?php echo $_SESSION['pin'];?>/>
    </div>
  </div>
</div>

<!-- Blood Group input-->
<!--

<div class="form-group">
  <label class="col-md-4 control-label">Blood Group</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="bloodgroup" class="form-control selectpicker" >
      <option value=" " >Please select Blood Group</option>
		<option>A+</option>
      <option>A-</option>
      <option >B+</option>
      <option >B-</option>
    </select>
  </div>
</div>
</div>
-->
<!-- Text input-->
      <!--
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date Of Birth</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <i class="fa fa-calendar">
         </i>
  <input name="dob" placeholder="MM/DD/YYYY" class="form-control" type="text">
    </div>
  </div>
</div>

-->
<!-- Text input-->
     <!-- address 1-->

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input class="form-control" readonly required  name="address" placeholder="Address " class="form-control" type="text"	value=<?php echo $_SESSION['address'];?>/>
    </div>
  </div>
</div>

<!-- Success message
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for registering with us .</div>
-->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" name="update" class="btn btn-success update" disabled >Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
  <div class="col-md-4">
    <button type="button" id="edit" class="btn btn-success" >Edit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>


</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  <!--  <script src="js/index.js"></script>
  -->
<script>
$('#edit').click(function(){
	$('.edit').removeAttr('readonly');
	$('.update').removeAttr('disabled');
});
</script>

</body>
</html>


<?php



	if(isset($_POST['update']))
	{
    
		$h_username = $_POST['h_username'];
		$pin = $_POST['pin'];
		$hospital_name = $_POST['hospital_name'];
		$contact1 = $_POST['contact1'];
		$email=$_POST['email'];
		$contact2=$_POST['contact2'];
		$address = $_POST['address'];
		echo $h_username;
		try
			{
				$sql = "update hospital_details set hospital_name='$hospital_name', pin='$pin',contact1='$contact1 ', contact2='$contact1', email='$email', address='$address' where h_username='$h_username'";
				$sql=mysqli_query($conn1,$sql);

				/*echo $hospital_name;
				echo $h_username;
				echo $pin;
				echo $contact1;
				echo $contact2;
				echo $address;*/

				echo '<script> alert("Details are updated");  </script>';
			}
		catch(PDOException $e)
			{
				echo '<script> alert("This mobile number already exists");  </script>';
				echo $sql . "<br>" . $e->getMessage();

			}
}

?>
=======
<?php
session_start();
include("connection1.php");
include("header.php");


if(!(isset($_SESSION['h_username']))){
    echo '<script> alert("session expired please login to continue!!");  
    window.location="../login.php";
    </script>';
}


?>

<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>



  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   
</head>

<body>

   <a style="margin-top:-70px;margin-right:10px;  position:relative"  class="pull-right" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  <div class="container">

  
 <!-- Logout trial-->
  




    <form class="well form-horizontal" action="hospital_info.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>  </legend>

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
<!--<div class="form-group">
  <label class="col-md-4 control-label">Select User Type</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
<div class="tab">
<button class="tablinks"><a  href="index.html">Donor</a></button>
<button class="tablinks"><a  href="hospital.html">Hospital</a></button>
<button class="tablinks"><a  href="blood_bank.html">Blood Bank</a></button>


</div>
</div>
  </div>
</div>-->

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
  <label class="col-md-4 control-label">Hospital Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  class="form-control edit" readonly required name="hospital_name" placeholder="Hospital Name" class="form-control"  type="text" value="<?php echo $_SESSION['hospital_name'];?>"/>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Email ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  class="form-control edit" readonly required name="email" placeholder="Hospital Name" class="form-control"  type="text" value="<?php echo $_SESSION['email'];?>"/>
    </div>
  </div>
</div>



<script type="text/javascript">
  function minimum()
  {
	  
    var pass=document.getElementById('mobile').value.length;
    if(pass!=10)
		{
			  alert("invalid mobile number");
			  document.getElementById('mobile').value="";
			return false;
		}
  }
    
</script> 
     
<div class="form-group">
  <label class="col-md-4 control-label">Contact 1</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        
  <input type="number" class="form-control edit" readonly required name="contact1" id="contact1"  onchange="minimum()" placeholder="Enter contact number" value="<?php echo $_SESSION['contact1'];?>" />

    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Contact 2</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        
  <input type="number" class="form-control edit" readonly name="contact2" id="mobile"  onchange="minimum()" placeholder="Enter contact number(optional)" value="<?php echo $_SESSION['contact2'];?>" />

    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  class="form-control edit" readonly required name="h_username" placeholder="Hospital Name" class="form-control"  type="text" value="<?php echo $_SESSION['h_username'];?>"/>
    </div>
  </div>
</div>


<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input class="form-control edit" required name="pin"  readonly type="text" value= "<?php echo $_SESSION['pin'];?>" />
    </div>
  </div>
</div>

<!-- Text input-->
     <!-- address 1-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input class="form-control edit" required name="address" placeholder="Home Address "  readonly type="text" value= "<?php echo $_SESSION['address'];?>" />
    </div>
  </div>
</div>


<!-- Text input-->
 




<!-- Success message 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for registering with us .</div>
-->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" name="update" class="btn btn-success update" disabled >Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
  <div class="col-md-4">
    <button type="button" id="edit" class="btn btn-success" >Edit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  <!--  <script src="js/index.js"></script>
  -->
<script>
$('#edit').click(function(){
	$('.edit').removeAttr('readonly');
	$('.update').removeAttr('disabled');
});
</script>
</body>
</html>


<!--Code for updation of details -->

<?php
	if(isset($_POST['update']))
	{
		echo "adf";
		
		$h_username = $_SESSION['h_username'];
		$hospital_name = $_POST['hospital_name'];	
		$pin = $_POST['pin'];
		$email = $_POST['email'];
		$contact1 = $_POST['contact1'];
		$contact2 = $_POST['contact2'];
		$address = $_POST['address'];
		$sql = "update hospital_details set hospital_name='$hospital_name', pin='$pin',
						contact1='$contact1',contact2='$contact2', email='$email',address='$address'
						where h_username='$h_username'";
		//$conn1->qurey($sql);
		$sql=mysqli_query($conn1,$sql);			
	}

/*		try 
			{
			
				/*$sql = "update hospital_details set hospital_name='$hospital_name', pin='$pin',
						contact1='$contact1',contact2='$contact2', email='$email',address='$address',
						where h_username='forti'";*/
				//$sql = "update hospital_details set ('hospital_name'='$hospital_name', 'pin'='$pin', 'contact1'='$contact1','contact2'='$contact2','email'='$email','address'='$address') where h_username='forti'";
				//$conn->exec($sql);
				
		/*$result = $conn->prepare("UPDATE hospital_details SET 'hospital_name'=:hospital_name, 'pin'=:pin, 'contact1'=:contact1,
		'contact2'=:contact2, 'email'=:email,'address'=:address WHERE 'h_username'=:h_username");*/
//				$stmt = $conn->prepare($sql);
			//	$stmt->bindParam(':hospital_name', $hospital_name, PDO::PARAM_STR);       
				//$stmt->bindParam(':pin', $_POST['$pin'], PDO::PARAM_STR);    
				//$stmt->bindParam(':contact1', $_POST['contact1'], PDO::PARAM_STR);
				// use PARAM_STR although a number  
			///	$stmt->bindParam(':contact2', $_POST['contact2'], PDO::PARAM_STR); 
				//$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);   
			//	$stmt->bindParam(':address', $_POST['address'], PDO::PARAM_INT);   
			//	$stmt->bindParam(':h_username', $_POST['h_username'], PDO::PARAM_INT); 
				//$stmt->execute();  
			//	$result = $conn->prepare($sql);
			/*$qr =	$result->execute(array($hospital_name,$pin,$contact1,$contact2,$email,$address,$h_username));
		  		

			}
		catch(PDOException $e)
			{
				echo   $e->getMessage();
			}
}
	*/
?>
>>>>>>> 112804c5485d4e280b65961f6132674db7aca37d
