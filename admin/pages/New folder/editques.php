<?php
include("connection.php");
$id=$_GET['id'];

$query=mysql_query("select * from question where qid='$id' ");
 $res=mysql_fetch_array($query);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOBSkaut admin</title>

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
                <a class="navbar-brand" href="index.php">JOBSkaut admin</a>
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
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="view_user.php">View Users</a>
                                </li>
                                <li>
                                    <a href="controls.php">Controls</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
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
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> view report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="short_list.php">Short-Listing</a>
                                </li>
                                <li>
                                    <a href="calculation.php">Calculation</a>
                                </li>
                                <li>
                                    <a href="validation.php">validation</a>
                                </li>

                                   
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="postings.php"><i class="fa fa-table fa-fw"></i> postings</a>
                        </li>
                        <li>
                            <a href="question_bank.php"><i class="fa fa-edit fa-fw"></i> question bank</a>
                        </li>
                        <li>
                            <a href="events.php"><i class="fa fa-edit fa-fw"></i> events</a>
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
                        <h1 class="page-header">question bank</h1>
                    </div>
<div class="panel-body" style="float:left; width:40%;">
                        <form role="form" action="updateques.php" method="post" >
                            
                                <input type="hidden" name="qid" value="<?php echo $res['qid']; ?>">
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['ques']; ?>" name="quest" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['op1']; ?>" name="opt1" type="text" required>
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['op2']; ?>" name="opt2" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['op3']; ?>" name="opt3" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['op4']; ?>" name="opt4" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo $res['ans']; ?>"name="answer" type="text" required>
                                </div>
                                <input type="submit" value="update" name="submit" class="btn btn-danger">
                            </form>
                            </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
       

     <div style="width:60%; float:left;">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>questions</th>
        <th>option 1</th>
        <th>option 2</th>
        <th>option 3</th>
        <th>option 4</th>
        <th>answer</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $query=mysql_query("select * from question ");
       while($res=mysql_fetch_array($query))
       {
        echo" <tr>
        <td>".$res['ques']."</td>
        <td>".$res['op1']."</td>
        <td>".$res['op2']."</td>
        <td>".$res['op3']."</td>
        <td>".$res['op4']."</td>
        <td>".$res['ans']."</td>

        <td><a class='btn btn-danger' href='deleteques.php?id=".$res['qid']."'>Delete</a> <a class='btn btn-info' href='question_bank.php?id=".$res['qid']."'>Edit</a></td>
      </tr>";
  }
      ?>



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

</body>

</html>
