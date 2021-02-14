<!DOCTYPE html>
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
      	auto: true,
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
						
  </div><center> <h1 style="padding-top: 50px; font-style: italic; color: red">You will Never Disappointed</h1></center>
			<div class="clearfix"> </div>
</div>
<!---->	
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">				  
					  
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 
				 </div>
	         </li>
        </ul>
	  </div>
</div>

	
	<div style="padding: 20px;" class="product-model">	 
	 <div class="container">
			
			<h2 style="margin-bottom:20px; width: 100%; color: white; background: #D81B1E">Our Products</h2>	
		 
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
								
								<input type="text" name="itemscount" class="item_quantity" value="1" />

								<a href="contact.php?pid=<?php echo $rows['id'] ?>">
								<input type="button" name="ordernow" class="item_add items" value="Order"></a>
							
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
