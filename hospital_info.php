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
