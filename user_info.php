<?php
session_start();
include("connection.php");
include("header.php");


if(!(isset($_SESSION['uname']))){
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
  




    <form class="well form-horizontal" action="" method="post"  id="contact_form">
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
  <label class="col-md-4 control-label">User Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  class="form-control edit" readonly required name="name" placeholder="Name" class="form-control"  type="text" value=<?php echo $_SESSION['name'];?> />
    </div>
  </div>
</div>





<!-- Text input-->

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
  <label class="col-md-4 control-label">Mobile Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        
  <input type="number" class="form-control edit" readonly required name="mobile" id="mobile"  onchange="minimum()" value=<?php echo $_SESSION['uname'];?> />

    </div>
  </div>
</div>

<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input class="form-control edit" required name="pin"  readonly type="text" value= <?php echo $_SESSION['pin'];?> />
    </div>
  </div>
</div>

<!-- Blood Group input-->

<div class="form-group"> 
  <label class="col-md-4 control-label">Blood Group</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        
    <select name="bloodgroup" class="form-control selectpicker edit" readonly required >
      <option value=<?php echo $_SESSION['bloodgroup'];?> ><?php echo $_SESSION['bloodgroup'];?> </option>
							  <option value="A+">A+</option>
					  <option value="A-">A-</option>
					  <option value="AB+">AB+</option>
					  <option value="AB-">AB-</option>
					  <option value="B+">B+</option>
					  <option value="B-">B-</option>
					  <option value="O+">O+</option>
					  <option value="O-">O-</option>

    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date Of Birth</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <i class="fa fa-calendar">
         </i>
  <input  type="date" class="form-control edit" readonly required value=<?php echo $_SESSION['dob'];?> name="dob" id="dob" max="<?php $d=date('Y-m-d'); echo date('Y-m-d',strtotime('-216 Months',strtotime($d))); ?>" min="<?php $d=date('Y-m-d'); echo date('Y-m-d',strtotime('-780 Months',strtotime($d))); ?>">
    
    </div>
  </div>
</div>


<!-- Text input-->
     <!-- address 1-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Home Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input class="form-control edit" required name="haddress" placeholder="Home Address "  readonly type="text" value= <?php echo $_SESSION['haddress'];?> />
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Work Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="waddress" placeholder="Work Address (optional)" class="form-control edit" readonly type="text" value= <?php echo $_SESSION['waddress'];?> />
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
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];	
		$pin = $_POST['pin'];
		$bloodgroup = $_POST['bloodgroup'];
		$dob = $_POST['dob'];
		$haddress = $_POST['haddress'];
		$waddress = $_POST['waddress'];
		try 
			{
				$sql = "update user_details set name='$name', mobile='$mobile', pin='$pin',bloodgroup='$bloodgroup',
						dob='$dob', haddress='$haddress', waddress='$waddress',
					 where mobile='$mobile'";
				$sql=mysqli_query($conn,$sql);
				
				echo '<script> alert("Details are updated");  </script>';
			}
		catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
}
	
?>
