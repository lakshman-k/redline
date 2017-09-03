<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
if(!(isset($_SESSION['uname']))){
    echo '<script> alert ("session expired please login to continue!!");  window.location="../index.php";
    </script>';
}
?>


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

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        function check()
        {
            var a = confirm("Are you sure?");
            return a;
        }
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RedLine Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                <!-- </button> -->
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                             <li>
                            <a href="manage_user.php"><i class="fa fa-table fa-fw"></i> Manage user</a>
                        </li>
                                <!-- <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Users<span class="fa arrow"></span></a> -->
                            <!-- <ul class="nav nav-second-level">  -->
                                <!-- <li> -->
                                    <!-- <a href="view_user.php">View Users</a> -->
                              <!--   </li>
                                <li>
                                    <a href="controls.php">Controls</a>
                                </li>
                          </ul> <li>
                            <a href="manage_user.php"><i class="fa fa-table fa-fw"></i> Manage user</a>
                        </li> <li>
                            <a href="manage_user.php"><i class="fa fa-table fa-fw"></i> Manage user</a>
                        </li>
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
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        <!-- </li> --> 
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> REPORT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="short_list.php">view user report</a>
                                </li>
                                <!-- <li>
                                    <a href="view_interview.php">View Interview</a>
                                </li>

                               <!--  <li>
                                    <a href="calculation.php">Calculation</a>
                                </li>
                                <li>
                                    <a href="validation.php">validation</a>
                                </li> -->

                                   
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--<li>
                            <a href="postings.php"><i class="fa fa-table fa-fw"></i> postings</a>
                        </li>
                        <li>
                            <a href="question_bank.php"><i class="fa fa-edit fa-fw"></i> question bank</a>
                        </li>-->
                        <li>
                            <a href="feedbacks.php"><i class="fa fa-edit fa-fw"></i> Feedback</a>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Feedbacks</h1>
                    </div>
                   <div class="table table-responsive" style="width:100%;">
<table class="table table-bordered">
    <tr>
        
        <th>email id</th>
        <th>mobile number</th>
        <th>Message</th>
        <th>Action</th>
       
         </tr>
    <?php
    include("connection.php");
    $qry=mysql_query("SELECT * FROM `feedback`");
    while($row=mysql_fetch_array($qry))
    {
        echo'<tr><td>'.$row['email'].'</td><td>'.$row['mob_no'].'</td><td>'.$row['message'].'</td><td><a class="btn btn-danger" href="deletefb.php?id='.$row['id'].'" onClick="return check();"> Delete</a></td></tr>';
        
       echo' ';
    }
    ?>
</table>
</div>
                </div>
                <!-- /.row -->
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
