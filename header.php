<!DOCTYPE html>
<html>
<head>
<!-- <title>Justice a Law Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title> -->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Justice Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style1.css" type="text/css" rel="stylesheet" media="all">
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<!--ResponsiveTabs-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--//ResponsiveTabs-->
 
</head>
<body>
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default" style="background: #FF0000; border:none">
			<div class="container">
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="container">
					<ul class="nav navbar-nav navbar-center cl-effect-11">
						<li><a href="index.php" >Home</a></li>
						<?php /*?><?php
							session_start();
							if(!(isset($_SESSION['userid']))){
						?><?php */?>
						<li><a href="index.php" >registration</a></li>					
						<li><a href="login.php">login</a></li>
                        <li><a href="hospitals_list.php">hospitals</a></li>
						<li><a href="blood_bank.php" >blood bank</a></li>
                        <li><a href="#" >camps</a></li>
						<li><a href="facts.php" >facts </a></li> 

					<?php /*?>	<?php
							}else{
								include 'connection.php';
								$id=$_SESSION['userid'];
								$q=mysql_query("SELECT * FROM `interview` WHERE userid='$id' and status!='finished'");

								echo '<li><a href="userhom.php" data-hover="Online Test">Online Test</a></li>';
								echo '<li><a href="jobs.php" data-hover="job Postings">job Postings</a></li>';
								echo '<li><a href="resultuser.php" data-hover="Result">Result</a></li>';
								if(mysql_fetch_array($q)){
								echo '<li><a href="intinfo.php" data-hover="Interview">Interview</a></li>';
								}
								echo '<li><a href="logout.php" data-hover="Logout">Logout</a></li>';

							}
						?><?php */?>
						
						<!-- <li><a href="about.php" data-hover="About">About</a></li>					 -->
						<!-- <li><a href="services.php" data-hover="Services">Services</a></li> -->
						<!-- <li><a href="codes.php" data-hover="Codes">Codes</a></li> -->
						<!-- <li><a href="blog.php" data-hover="Blog">Blog</a></li> -->
						
					</ul>	
					<div class="clearfix"> </div>
				</div>
			
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
	
