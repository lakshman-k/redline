<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $n=$_POST['uname'];
    $p=$_POST['pass'];
    $qry=mysqli_query($conn,"SELECT * FROM admin WHERE uname='$n' and pass='$p'");
   
    if(mysqli_fetch_array($qry))
    {
        session_start();
        $_SESSION['uname']='admin';
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

    <title>RedLine Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="login">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top:40%; opacity:0.9;">
                    <div class="panel-heading">
                        <h3 style ="color:black;">LOGIN PAGE</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="UserName" required="" name="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="PASSWORD" required="" name="pass" type="password">
                                </div>
                                
                                  <input type="submit" value="Login" name="submit" class="btn btn-danger">
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                                
                        <?php
                            if (isset($_GET['fail'])) {
                                echo "invalid username or password!";
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
