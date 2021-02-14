<!DOCTYPE html>
<!DOCTYPE php>
<html>
<head>
<title>Farsam Clothing</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
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
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>
<!---->	
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Feedback Form</span></h2>
			
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				 
				 <?php 
				 
				 if(@$_POST["fsubmit"])
					  {
						  $con=mysqli_connect("localhost","root","","farsam_clothing_db");
					  		
					  		$status=@$_POST["status"];
					  		$about=@$_POST["about"];
					  		$comment=@$_POST["comments"];
					 		$name=@$_POST["uname"];		
					  		//$oid=@$_POST["orderid"];
					  		

					  if($status!="")
					  {
						  mysqli_query($con,"INSERT INTO `feedback` (`name`, `orderstatus`, `about`, `orderid`, `comments`) VALUES ('$name', '$status', '$about', NULL, '$comment')");
						  echo "<script>alert('Feedback Recieved')</script>";
						  
					  }
						  else{echo "<script>alert('Please Fill The form')</script>";}
					  		
					  }
				 ?>
				<form method="post">
					<div>
						<label>
							<label><h4>Name</h4></label>
							<input name="uname" placeholder="" type="text" tabindex="0">
						</label>
					</div>
					<div>
						<label>
							<label><h4>Do you recieved order?</h4></label>
							<input name="status" placeholder="" type="text" tabindex="1">
						</label>
					</div>
					<div>
						<label>
							<label><h4>About our Product</h4></label>
							<input name="about" placeholder="" type="text" tabindex="2">
						</label>
					</div>
					<div>
						<label>
							<label><h4>Comments About your Bussiness</h4></label>
							<input name="comments" style="height: 200px" placeholder="" type="text" tabindex="3">
						</label>
					</div>					
					<div>
						<input type="submit" name="fsubmit" value="Submit FeedBack" id="register-submit">
					</div>
					
					
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree Terms & conditions terms of service by SDA</a> </label>
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>

		 <div class="clearfix"></div>
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