<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:order.php");
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PROFILE | Sarasavi Ads </title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>

		<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

		<link rel="stylesheet" href="fontawesome/css/all.css">
  <script type="text/javascript" src="fontawesome/js/all.js"></script>





		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>


<body style="background-color: #F2F2F2;">




	<!--<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">-->	
			<div class="navbar-header">
				<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
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
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in RS.</div>
	
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hello ,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
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








	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-1" ></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<!--<div id="get_brand">
				</div>-->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg"> </div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading" style="color: #F2F2F2; background-color: #607d8b; font-weight: 600; font-size: 22px">Products</div>
					<div class="panel-body">
						<div id="get_product" >
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
									<div class="panel-body">Avalable:$product_qty</div>
								</div>
								<div class="panel-heading">RS.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>


					<div class="row" >
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno" >
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
					
						<div class="panel-footer">Sarasavi Ads &copy; 2020</div>
						
			</div>
			<div class="col-md-1"></div>
		</div>

	


		
		






<div id="copyright" class="container" style="background-color: #af1641; width:100%" >
	<p style="font-weight:100px; font-size: 17px; "> &copy; All rights reserved Sarasavi Advertising - Rathnapura - Sri Lanka  <br> Design by Sarasavi Advertising <br> Contach Us Mobile - 077 6677888 | E-mail - sarasaviads@gmail.com 	</p> <br>


	<p>

	<a href="https://www.facebook.com/sarasaviadvertising"><i class="fab fa-facebook" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>

	

	<a href="#"><i class="fab fa-instagram" style="margin-right:10px; width:40px; height:40px;"></i> 	</a> &nbsp; &nbsp;

	<a href="#"><i class="fab fa-youtube" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>&nbsp; &nbsp;

	<a href="#"><i class="fab fa-twitter" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>&nbsp; &nbsp;

	<a href="#"><i class="fab fa-linkedin" style="margin-right:10px; width:38px; height:38px;">&nbsp;</i> 	</a>


	</p>








</body>
</div>
</div>
</div>

</html>










	
   


	















































