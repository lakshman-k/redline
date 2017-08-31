<?php
//session_start();
include("connection.php");

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
  
  <div class="container">

    <form class="well form-horizontal" action="register.php" method="post"  id="contact_form">
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
<div class="form-group">
  <label class="col-md-4 control-label">Select User Type</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
<div class="tab">
<button class="tablinks"><a  href="index.html">Donor</a></button>
<button class="tablinks"><a  href="hospital.html">Hospital</a></button>
<button class="tablinks"><a  href="blood_bank.html">Blood Bank</a></button>

<!--  <button class="tablinks" onclick="location.reload();location.href='index.html'">Donor</button>
  <button class="tablinks" onclick="location.reload();location.href='hospital.html'">Hospital</button>
  <button class="tablinks" onclick="location.reload();location.href='blood_bank.html'">Blood Bank</button>-->
</div>
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
  <label class="col-md-4 control-label">User Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  class="form-control" required name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>





<!-- Text input-->

<script type="text/javascript">
  /*function minimum()
  {
	  alert("sdf");
    var pass=document.getElementById('mobile').value.length;
    if(pass!=10){
      alert("invalid mobile number");
      document.getElementById('mobile').value="";
    return false;
}*/


function mininum(mobile)  
{  
  var phoneno = /^\d{10}$/;  
  if(mobile.value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
  }  
    
</script> 
     
<div class="form-group">
  <label class="col-md-4 control-label">Mobile Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input type="number" class="form-control"required name="mobile" id="mobile"  onchange="minimum(mobile)" placeholder="Enter mobile number">

    </div>
  </div>
</div>

<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input class="form-control" required name="pin" placeholder="Password" class="form-control" type="password">
    </div>
  </div>
</div>

<!-- Blood Group input-->


<div class="form-group"> 
  <label class="col-md-4 control-label">Blood Group</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        
    <select name="bloodgroup" class="form-control selectpicker" required >
      <option value="" >Please select Blood Group</option>
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
  <input  type="date" class="form-control"required name="dob" id="DOB" max="<?php $d=date('Y-m-d'); echo date('Y-m-d',strtotime('-216 Months',strtotime($d))); ?>" min="<?php $d=date('Y-m-d'); echo date('Y-m-d',strtotime('-780 Months',strtotime($d))); ?>">
    
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
  <input class="form-control" required name="haddress" placeholder="Home Address " class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Home City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input class="form-control" required name="hcity" placeholder="Home City" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Work Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="waddress" placeholder="Work Address (optional)" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Working City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="wcity" placeholder="Working City (optional)" class="form-control"  type="text">
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
    <button type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-send"></span></button>
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

</body>
</html>
