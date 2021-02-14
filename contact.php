<html>
<head>
<title>Farsam Clothing</title>
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
<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="index.php">Farsam Clothing</a></h1>
					
				</div>
			 <!---->		 
			 
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>
<!---->
<div class="contact">
	  <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Ordering Area</li>
		 </ol>
			<!--start contact-->
			<h3>Order Now</h3>
		  <div class="section group">				
			<!--	<div class="col-md-6 span_1_of_3">
					
				</div>	-->			
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					  
					  <?php
					  if(@$_POST["psubmit"])
					  {
						  $con=mysqli_connect("localhost","root","","farsam_clothing_db");
					  		
					  		$name=@$_POST["userName"];
					  		$suits=@$_POST["suits"];
					  		$email=@$_POST["userEmail"];
					  		$number=@$_POST["userPhone"];
					  		$pid=$_GET["pid"];

					  if($email!="")
					  {
						  mysqli_query($con,"INSERT INTO `orders` (`orderid`, `email`, `contact`, `suitcount`, `productid`) VALUES (NULL, '$name', '$email', '$suits', '$pid');");
						  echo "<script>alert('Orderd Successfully')</script>";
						  header("location:account.php");
						  
					  }
						  else{echo "<script>alert('Please Fill The form')</script>";}
					  		
					  }
					  
					  		
					  ?>
					    <form method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Number of Suits</label></span>
						    	<span><input name="suits" placeholder="" value="1" type="number" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
							
						   <div>
						   		<span><input type="submit" name="psubmit" class="mybutton" value="Submit Order"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
		  </div>
	  </div>
 </div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
<!---->
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
</body>
</html>