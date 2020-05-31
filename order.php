<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> ORDER NOW | Sarasavi Ads</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		
		<link rel="stylesheet" type="text/css" href="default.css">


		<link rel="stylesheet" href="fontawesome/css/all.css">
  		<script type="text/javascript" src="fontawesome/js/all.js"></script>
		
		
	</head>
<body style="background-color: #FFF">
















<!--<div class="wait overlay">
	<div class="loader"></div>
</div>-->
	<!--<div class="navbar navbar-inverse navbar-fixed-top">-->
		<!--<div class="container-fluid">-->	
			<div class="navbar-header">
				<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>-->
				</button>
				<!--<a href="#" class="navbar-brand">Sarasavi Advertising</a>-->
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<!--<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>-->
				<li style="width:300px;left:560px;top:510px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:510px;left:570px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:800px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in RS.</div>

								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">       
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in RS.</div>

								</div>-->
								

								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
				<li><a href="customer_registration.php?register=1" ><span class="glyphicon glyphicon-user"></span> Register</a>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
					



			</ul>
		</div>
	</div>
</div>

<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#" style="position: none">Sarasavi Ads E-Store</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Home Page</a></li>
				<li class="active"><a href="#.php" accesskey="4" title="">Order Now</a></li>
				<li><a href="Contact.php" accesskey="5" title="">Contact Us</a></li>
			</ul>

			

		</div>
	</div>
	</div>







	<div id="banner">
		
			<div class="title">
				<h2> Order Now </h2>
				<span class="byline">Find your items</span> <br><br><br><br>
				<span class="byline">| Delivery Free |</span>
				
				 </div>
			</div>	

			
			</div>



	</div>



       













	<p><br/></p>
	<p><br/></p>
	<p><br/></p>







	<!--<div class="container-fluid">-->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category" style="background-color: #e3f2fd " >
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> 
				<!--<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/></div>
								<div class="panel-body">Avalable:$product_qty</div>
							
								<div class="panel-heading">RS.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<!--<div class="panel-footer">All Rigth Reseved HNDIT &copy; 2019</div>-->
</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		 
	</div>
			
	</div>

</li>
</ul>
</div>






<div id="copyright" class="container" style="background-color: #af1641; width:100%">
	<p style="font-weight:100px; font-size: 17px; "> &copy; All rights reserved Sarasavi Advertising - Rathnapura - Sri Lanka  <br> Design by Sarasavi Advertising <br> Contach Us Mobile - 077 6677888 | E-mail - sarasaviads@gmail.com 	</p> <br>


	<p>

	<a href="https://www.facebook.com/sarasaviadvertising"><i class="fab fa-facebook" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>

	

	<a href="#"><i class="fab fa-instagram" style="margin-right:10px; width:40px; height:40px;"></i> 	</a> &nbsp; &nbsp;

	<a href="#"><i class="fab fa-youtube" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>&nbsp; &nbsp;

	<a href="#"><i class="fab fa-twitter" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>&nbsp; &nbsp;

	<a href="#"><i class="fab fa-linkedin" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>


	</p>







</body>
</html>
















































