<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $u=$_POST['uid'];
    $f=$_POST['fullname'];
    $e=$_POST['email'];
    $m=$_POST['mob_no']
    $a=$_POST['add'];
    $p=$_POST['password'];
    $qry=mysql_query("SELECT * FROM user WHERE uid='$u' fullname='$f' email='$e' mob_no=$m add='$a' and password='$p'");
    if(mysql_fetch_array($qry))
    {
        session_start();
        $_SESSION['uid']=$row[0];
        header("location:pages/dashboard.php");
    }
    else{
        header("location:index.php?fail");
    }
}

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOBSkaut admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="UserId" name="uid" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="FullName" name="fullname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="MobileNumber" name="mob_no" type="" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Address" name="add" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="PASSWORD" name="password" type="password">
                                </div>
                                
                                  <input type="submit" value="register" name="submit" class="btn btn-danger">
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                        <?php
                            if (isset($_GET['fail'])) {
                                echo " incomplete details";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
