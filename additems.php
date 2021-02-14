<!DOCTYPE html>
<!DOCTYPE php>
<html>
<head>
	<?php
	session_start();
	if($_SESSION["name"]!="Admin")
	{
		header("location:login.php");
	}
	
	if(@$_POST["Log"])
	{
		session_destroy();
		$_SESSION["name"]="";
		header("location:login.php");
	}
	?>
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
		  <li class="active">Uploading Area</li>
		 </ol>
	<form method="post" >
		<div class="registration_form">
	 		<input type="submit" name="Log" value="Logout">
		</div>
	
	</form>
	
	 <div class="registration">
		 <div class="registration_left">
			 
			 
			 <h2>Add items</h2>
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
				<form method="post" enctype="multipart/form-data">
					<div>
						<label>
							<input placeholder="Title" name="itemtitle" type="text" tabindex="1">
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Price" name="itemprice" type="text" tabindex="2">
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Description (Max Limit 120 characters)" name="itemdescription" type="text" tabindex="3">
						</label>
					</div>		
							
						<label>Select Image</label>
						<div><input type="file" name="mfile"></div>
					
						<div>
							<input type="submit" name="uploaddata" value="Upload Data">
						</div>
						
					
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree Terms & conditions terms of service by SDA </label>
					</div>
				</form>
				<!-- /Form -->
				 
			 </div>
		 </div>
		 <!--Right_Pane-->
<div class="registration_form" style=" 
	width: available;
    height: available;
    position: relative;
    margin-left: 60%;
    border-collapse: inherit;">
	
	<h2>Feedbacks</h2>
	
	<?php
	
		 $con=mysqli_connect("localhost","root","","farsam_clothing_db");	
			$query=mysqli_query($con,"SELECT * FROM feedback");
	?><table style="border: solid; border-color: crimson" width="100%">
	<tr><th>Name</th><th>Status</th><th>About</th><th>Comments</th></tr><?php
			while($rows=mysqli_fetch_array($query))
			{?><form method="post">
						
					<tr><td><?php echo $rows["name"]?></td>
						<td><?php echo $rows["orderstatus"]?></td>
						<td><?php echo $rows["about"]?></td>
						<td><?php echo $rows["comments"]?></td>	
					</tr>
						
						
					
					
							
			   </form>
				
			<?php
			}?>
	</table>
	
	
	
</div>
		 
		 <div class="clearfix"></div>
	 </div>
</div>
	
	<div style="padding: 20px;" class="product-model">	 
	 <div class="container">
			
			<h2 style="margin-bottom:20px; width: 100%; color: white; background: #D81B1E">Uploaded Products</h2>			
		 
		 <?php
		 $con=mysqli_connect("localhost","root","","farsam_clothing_db");	
			$query=mysqli_query($con,"SELECT * FROM product");
			while($rows=mysqli_fetch_array($query))
			{?><form method="post">
				<a href=""><div class="product-grid">
						
						<div class=" b-link-stripe  thickbox" style="height: 230px; margin-left: 5px; margin-top: 5px;  width: 300px; border: solid;border-color: #D92F32; padding: 5px;">
							
							<img src="<?php echo $rows["image"]?>" height="100%" width="100% class="img-responsive" alt="Dress Image"/>
							
						</div></a>					
						<div class="product-inf simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $rows["title"]?></h4>								
								<span class="item_price">Price: <?php echo $rows["price"]?></span>	
								<div class="ofr">
						          <p class="disc"><?php echo $rows["description"]?></p>
								</div>
							
							  <div class="clearfix"> </div>
							</div>						
						</div>
					</div></form>
		 						
					
				<?php
			}
			?>
					
					 
				
					
					
			
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
<?php

$con=mysqli_connect("localhost","root","","farsam_clothing_db");

if(@$_POST["uploaddata"])
{
	$title=$_POST["itemtitle"];
	$price=$_POST["itemprice"];
	$description=$_POST["itemdescription"];
	
	
	$dir="images/";
	$path = $dir.basename($_FILES["mfile"]["name"]);
	if(move_uploaded_file($_FILES["mfile"]["tmp_name"],$path))
	{  echo mysqli_query($con,"INSERT INTO product(title, image, description, price) VALUES('$title','$path','$description',$price)");
		 echo ("<script>alert('Data Has been uploaded by SDA')</script>");
			echo "Uploaded Successfully";
	}
	else
	{
		echo ("<script>alert('Please Input a valid Data')</script>");
		echo "Error while uploading a file...";
	}
}

?>