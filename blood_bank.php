
<?php
include 'header.php';
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

  <div class="container">

    <form class="well form-horizontal" action="bregister.php" method="post"  id="contact_form">
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
<button class="tablinks"><a  href="index.php">Donor</a></button>
<button class="tablinks"><a  href="hospital.php">Hospital</a></button>
<button class="tablinks"><a  href="blood_bank.php">Blood Bank</a></button>

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
  <label class="col-md-4 control-label">Blood Bank Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input   class="form-control" required  name="name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Email id</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control" required name="email" placeholder="E-mail " class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">contact 1</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
   <input  class="form-control" required type="number" class="form-control"required name="contact1" id="mobile"  onchange="minimum()" placeholder="Enter contact number">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">contact 2</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
   <input  class="form-control"  type="number" class="form-control" name="contact2" id="mobile"  onchange="minimum()" placeholder="Enter alternate number">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input   class="form-control" required  name="uname" placeholder="User Name" class="form-control"  type="text">
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


<!-- pin input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input  class="form-control" required  class="form-control" required  name="pin" placeholder="Password" class="form-control" type="password">
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
  <input   class="form-control" required class="form-control" required  name="address" placeholder="Address " class="form-control" type="text">
    </div>
  </div>
</div>
<!--
<div class="form-group">
  <label class="col-md-4 control-label">Work Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address1" placeholder="Work Address" class="form-control" type="text">
    </div>
  </div>
</div>
-->

<!-- Text input-->

<!-- <div class="form-group">
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input   class="form-control" required class="form-control" required  name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div> -->




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
