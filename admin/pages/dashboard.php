<?php
session_start();
include("connection.php");


$query="select * from user_details";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);


$query1="select * from hospital_details";
$result1=mysqli_query($conn,$query1);
$count1=mysqli_num_rows($result1);

$query2="select * from bloodbank_details";
$result2=mysqli_query($conn,$query2);
$count2=mysqli_num_rows($result2);

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

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">


	<link href="../dist/css/AdminLTE.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/trial.css"/>  
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                       
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> REPORT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li> 
                                    <a href="short_list.php">view user report</a>
                                </li>
                                </ul>
                         
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
                            
                            <!-- /.nav-second-level -->
                      
                   </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            
        </nav>


        <!-- Page Content -->
        
            
       
        <div id="page-wrapper">
          <div class="container-fluid backg_theme">
         
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DashBoard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
           </div>     
           
          <div class="backg_theme">
           
               <div class="card card-stats backg_theme" >
                            <div class="col-lg-3 col-xs-6">
                                 <!-- small box -->
                              <div class="small-box bg-teal">
                                <div class="inner">
                                  <h3><?php echo $count ?></h3>
                                  <p> Users</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="user_admin.php" class="small-box-footer">Users</a>
                             </div>
                            </div><!-- ./col -->
                   
                        
          
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  
                  	<div class="small-box bg-aqua">
                    
                                <div class="inner">
                             		
                                     <h3><?php echo $count1 ?></h3>
                              			<p>Hospitals</p>
                                       
                                </div>
                            <div class="icon">
                              <i class="fa fa-plus-square"></i>
                           </div>
                    <a href="hospitals_admin.php" class="small-box-footer">Hospital  List </a>
           		</div>
             
           </div><!-- ./col -->       
          
          
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              
              	<div class="small-box backg">
               
                        <div class="inner">
                      <h3><?php echo $count ?></h3>
                      <p> Temporarily</p>
                    </div>
                        <div class="icon">
                          <i class="fa fa-ban"></i>
                        </div>
                    <a href="#" class="small-box-footer">
                      <i class="fa fa-arrow-circle-right"></i>
                    </a>
                   
            	</div>
            </div><!-- ./col -->             
                          
					</div>
                    
           <div class="card card-stats backg_theme" >
                   <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                        <div class="small-box bg-red">
                                <div class="inner">
                              <h3><?php echo $count2 ?></h3>
                              <p> Blood Banks</p>
                            </div>
                                <div class="icon">
                                  <i class="fa fa-heartbeat"></i>
                                </div>
                            <a href="bloodbank_admin.php" class="small-box-footer">Blood Bank List </a>
                        </div>
                        
                        
            </div><!-- ./col --> 
           
           </div>         
             
            </div>
  <!-- <div class="backg_theme thumbnail">
                    
	<h2><a href="manage_user.php" > Total number of registration: </a>
	<h2><a href="manage_user.php" > Total number of active users: </a>
	<h2><a href="manage_user.php" > Total number of blood banks: </a>
	<h2><a href="manage_user.php" > Total number of blocked users: </a>
	<h2><a href="manage_user.php" > Total number of donations: </a>
	<h2><a href="manage_user.php" > Total number of current requests: </a>
    
	
    
    </div>
-->
  
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>


