<?php
session_start();
include("connection.php");

$query1="select * from hospital_details";
$result1=mysqli_query($conn,$query1);
$count1=mysqli_num_rows($result1);


if(!(isset($_SESSION['uname']))){
    echo '<script> alert("session expired please login to continue!!");  
    window.location="../index.php";
    </script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RedLine Admin</title>

     <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/trial.css"/>  
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

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

</head>

<body>



    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" id="header" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php">RedLine Admin</a> </div>
<!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"> -->
                        <!-- <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> -->
                    <!-- </a> -->
                    <!-- <ul class="dropdown-menu dropdown-user"> -->
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> -->
                        <!-- </li> -->
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                        <!-- </li> -->
                        <!-- <li class="divider"></li> -->
                        <li><a href="logoutadmin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <!-- <input type="text" class="form-control" placeholder="Search..."> -->
                                <span class="input-group-btn">
                                <!-- <button class="btn btn-default" type="button"> -->
                                    <!-- <i class="fa fa-search"></i> -->
                                <!-- /</button> -->
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                           <li>
                            <a href="users_admin_edit.php"><i class="fa fa-table fa-fw"></i> Manage user</a>
                        </li>
                        
                         <li>
                            <a href="hospitals_admin_edit.php"><i class="fa fa-hospital-o"></i> Manage Hospitals</a>
                        </li>
                       <!--  <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="view_user.php">View Users</a>
                                </li>
                                <li>
                                    <a href="controls.php">Controls</a>
                                </li>
                            </ul>
                            <!- /.nav-second-level -->
                        <!-- </li> --> 
                        <!-- <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Filter User Criteria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="validation1.php">Validation</a>
                                </li>
                                <li>
                                    <a href="confirmation.php">Confirmation</a>
                                </li>
                                
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> REPORT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li> 
                                    <a href="short_list.php">view user report</a>
                                </li>
                                <!-- <li>
                                    <a href="view_interview.php">View Interview</a>
                                </li>

                                <!-- <li>
                                    <a href="calculation.php">Calculation</a>
                                </li> -->
                                <!-- <li>
                                    <a href="validation.php">validation</a>
                                </li> -->

                                   
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <!-- <li>
                            <a href="postings.php"><i class="fa fa-table fa-fw"></i> postings</a>
                        </li> -->
                       <!-- <li>
                            <a href="question_bank.php"><i class="fa fa-edit fa-fw"></i> question bank</a>
                        </li> -->
                        <li>
                            <a href="feedbacks.php"><i class="fa fa-edit fa-fw"></i> feedback</a>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <!-- Page Content -->
        
              
        
        <div id="page-wrapper">
            <div class="container-fluid backg_theme" id="tony">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">DashBoard</h1>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                                
                                
           
    <table class="table table-bordered" width: 100%>
    	<tr> 		
        		<th>User Name</th>  <th>Hospital Name</th>    <th>Address</th>  <th>City</th>  <th>Phone No</th><th>Action</th>       
          </tr>
                <?php
					$query1="select * from hospital_details";
					$result1=mysqli_query($conn,$query1);
					
						 	
						while($fetchFromTable=mysqli_fetch_array($result1))
							{
								$name= $fetchFromTable['name'];
								$uname= $fetchFromTable['uname'];
								//$pin= $fetchFromTable['pin'];
								$mobile= $fetchFromTable['mobile'];
								$address=$fetchFromTable['address'];	
								$city=$fetchFromTable['city'];	
										
					 ?>
         <tr>
        <td><?php echo $uname; ?></td> <td><?php echo $name; ?></td><td><?php echo $address; ?></td><td><?php echo $city; ?></td></td><td><?php echo $mobile; ?></td><td><button class="btn btn-default" data-toggle="modal" data-target="#myModal" onClick="edit(this)">Edit</button></td>
          </tr>
 <?php } ?>     
    	
    </table>
                                
                                 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hospital Details</h4>
      </div>
      <form class="well form-horizontal" action="" method="post"  id="contact_form">
      <div class="modal-body">
       


<!-- Form Name -->

            <div class="form-group">
              <label class="col-md-4 control-label">Hospital Name</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" required name="name" id="hospitalName" placeholder="Hospital Name" class="form-control"  type="text">
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label">User Name</label>  
              <div class="col-md-8 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" required name="uname" readonly id="uName" placeholder="User Name" class="form-control"  type="text">
                </div>
              </div>
            </div>
			<div class="form-group">
              <label class="col-md-4 control-label">Mobile Number</label>  
                <div class="col-md-8 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
               <input  class="form-control" required type="number" id="mobileNumber" class="form-control"required name="mobile" id="mob_no"  onchange="minimum()" placeholder="Enter mobile number">
                </div>
              </div>
            </div>



      
        <div class="form-group">
          <label class="col-md-4 control-label">Address</label>  
            <div class="col-md-8 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input class="form-control"required  name="address" id="address" placeholder="Home Address " class="form-control" type="text">
            </div>
          </div>
        </div>

 		<div class="form-group">
          <label class="col-md-4 control-label">City</label>  
            <div class="col-md-8 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input class="form-control"required  name="city" id="city" placeholder="city" class="form-control"  type="text">
            </div>
          </div>
        </div>


	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
<div title="Update Details">

    

      </div>                         
                                
                           
           		</div>

    
            
            <!-- /.container-fluid -->
            


      
            
        </div>
        <!-- /#page-wrapper -->
  
</div>
   
    <!-- /#wrapper -->



    <!-- jQuery -->

  
    

  <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

<script>
	var rownum="";		
function edit(rows)
	{
		//var bodyid="#"+$(rows).closest('tbody').attr('id');
		
		rownum=$(rows).closest('tr').index();
		
			$('#uName').val($(' tr:eq('+rownum+') td:eq(0)').text())
			$("#hospitalName").val($(' tr:eq('+rownum+') td:eq(1)').text());
			$("#mobileNumber").val($(' tr:eq('+rownum+') td:eq(4)').text());
			$("#address").val($(' tr:eq('+rownum+') td:eq(2)').text());	
			$("#city").val($(' tr:eq('+rownum+') td:eq(3)').text());
			
	}


</script>
</body>

</html>

<?php
	if(isset($_POST['update'])){
		
	echo $name = $_POST['name'];
	echo $uname = $_POST['uname'];
    echo $mobile = $_POST['mobile'];
   
  	echo $address = $_POST['address'];
	echo $city = $_POST['city'];

    
	
	try {
   	 	$sql = "update hospital_details set name='$name',mobile='$mobile', address='$address',city='$city' where uname='$uname'";
		$sql=mysqli_query($conn,$sql);
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

   
}
		
	


?>
