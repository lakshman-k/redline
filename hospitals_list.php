<?php
include("connection.php");
include 'header.php';
$query1="select * from hospital_details";
$result1=mysqli_query($conn,$query1);
$count1=mysqli_num_rows($result1);


/*if(!(isset($_SESSION['uname']))){
    echo '<script> alert("session expired please login to continue!!");  
    window.location="../index.php";
    </script>';
}*/

?>


<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   

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
	<link rel="stylesheet" href="../../css/trial.css"/>  
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>



    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        
               
        
        <div id="page-wrapper">
                      
         <div class="container" >
    <table class="table table-bordered">
    	<tr> 		
        		  <th>Hospital Name</th>    <th>Address</th>  <th>City</th>  <th>Phone No</th>       
          </tr>
                <?php
					$query1="select * from hospital_details";
					$result1=mysqli_query($conn,$query1);
					
						 	
						while($fetchFromTable=mysqli_fetch_array($result1))
							{
								$name= $fetchFromTable['name'];
								$mobile= $fetchFromTable['mobile'];
								$address=$fetchFromTable['address'];	
								$city=$fetchFromTable['city'];				
				?>
         <tr>
         <td><?php echo $name; ?></td><td><?php echo $address; ?></td><td><?php echo $city; ?></td></td><td><?php echo $mobile; ?></td>
          </tr>
 <?php } ?>     
    	
    </table>

   </div>
           
           </div>       
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

</body>

</html>


