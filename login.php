
<title>Admin Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="index.php">Farsam Clothing</a></h1>
				</div>	 
			 </div>
			<div class="clearfix"> </div>
</div>
<!---->	
	

<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Admin Login</h2>
		 <div class="col-md-6 log">		
				 
				 <form method="post">
					 <h5>User Name</h5>	
					 <input name="adminemail" type="text" value="">
					 <h5>Password</h5>
					 <input name="adminpass" type="password" value="">					
					 <input name="credentials" type="submit" value="Login">
				 </form>
		 </div>	
				
		 <div class="clearfix"></div>
	 </div>
</div>
	
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 about-us">
				 <h3>About Us</h3>
				 <p>we coverd all the clothing designs, We have a unique collection!</p>
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>© 2018 All Rights Reserved | Design by SDA</p>
		 </div>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
	<?php
	$con=mysqli_connect("localhost","root","","farsam_clothing_db");	
	session_start();
	@$_SESSION["name"]="Admin";			 
	
	if(@$_POST["credentials"])
	{
		$email=$_POST["adminemail"];
		$pass=$_POST["adminpass"];
		
		$query=mysqli_query($con,"select * from admin where admin_email='$email' and admin_pass='$pass'");
		
		if($rows=mysqli_fetch_array($query))
		{
			header("location:additems.php");
		}
		else
		{
			echo ("<script>alert('Username or password are invalid....')</script>");
		}
	}
	
?>

