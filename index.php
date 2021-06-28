<!-- 
   ----------------------------------------------------------------
  |  This is only a sample project. There is no intention of any   |
  | commercial use.                                                |
  |                      @Author: Deepak Agarwal                   |
   ----------------------------------------------------------------
 -->

<!DOCTYPE html>
<html>
	<head>
		<title>Shree Balajee Hardware|| Hardware Store </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="Stylesheets/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="shorcut icon" type="image/png" href="Media/Images/Header/logo.png">
	</head>
	<body onload="myFunction()">
		<div id="load">
			<div class="main_div">
				<div class="center_div">
					<div class="rot"></div>
					<h1 class="loading">loading</h1>
				</div>
			</div>
		</div>
		<div class="header">
			
			<?php include 'navigation.php'; ?>
			
			<div class="containerss">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12 banner pt-5">
						<br><br>
						<div class="main">
							<h1>
							 <div class="sub_main">
								<ul>
									<li>Best</li>
									<li>Trendy</li>
									<li>Efficent</li>									
								</ul>
							</div>
							 Hardware needs
							</h1>
							<p>Styling your home.</p>
						</div>
						<a href="#Explore" class="btn1">Explore Now &#8594;</a>
					</div>
					
					<div class="col-lg-6 col-md-6 col-12 banner">
						<img src="Media/Images/Header/header.png" class="image-fluid">
					</div>
				</div>
			</div>
			<img src="Media/Images/Header/wave.png" class="bottom-img">
		</div>
		<!--Categories Sections-->
		<a name="Explore"></a>
		<section id="services">
			<div class="container">
				<h1 class="title text-center">Shop Categories</h1>
				<div class="row text-center">
					<!--Categories Section 1-->
					<div class="col-lg-4 col-md-4 col-12 service ">
						<img src="Media/Images/Category/cat1.jpg" alt="Image not available" class="service-img img-fluid">
						<h4> Power Tools</h4>
						<p>Drill Machine, Grinder, Cutters, Vibrators and many more.  </p>
						
					</div>
					<!--Categories Section 2-->
					<div class="col-lg-4 col-md-4 col-12 service">
						<img src="Media/Images/Category/cat2.jpg" alt="Image not available" class="service-img ">
						<h4> Hand Tools</h4>
						<p>Wrench, Hammers, Screwdrivers, Pliers, Tape measure and many more.</p>
						
					</div>
					<!--Categories Section 3-->
					<div class="col-lg-4 col-md-4 col-12 service">
						<img src="Media/Images/Category/cat3.jpg" alt="Image not available" class="service-img img-fluid">
						<h4> Welding Tools</h4>
						<p>Welding Machines, Electrodes, Welding Gloves & Glasses and many more.  </p>
						
					</div>
					<!--Categories Section 5-->
					<div class="col-lg-4 col-md-4 col-12 service">
						<img src="Media/Images/Category/cat4.jpg" alt="Image not available" class="service-img img-fluid">
						<h4>  fasteners</h4>
						<p>Pin Type, Drop in fastener and many more.</p>
						
					</div>
					<!--Categories Section 5-->
					<div class="col-lg-4 col-md-4 col-12 service">
						<img src="Media/Images/Category/cat5.jpg" alt="Image not available" class="service-img img-fluid">
						<h4>  Home & Office Appliances</h4>
						<p>Furnitures, Lockers, Aldropes, Handles, Hinges,Telescopic Channels and many more. </p>
						
					</div>
					<!--Categories Section 6-->
					<div class="col-lg-4 col-md-4 col-12 service">
						<img src="Media/Images/Category/cat6.jpg" alt="Image not available" class="service-img img-fluid">
						<h4> Saftey Tools</h4>
						<p>Helmets, Jackets, Belts, Rope, Shoes and many more.</p>
						
					</div>
				</div>
			</div>
		</section>
		<!--Categories Section Ends-->
		<!--Carousel Starts-->
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="Media\Images\carousel\C1.png" alt="carousel image" width="1100" height="500">
					<div class="carousel-caption">
						
					</div>
				</div>
				<div class="carousel-item">
					<img src="Media\Images\carousel\C2.png" alt="carousel image" width="1100" height="500">
					<div class="carousel-caption">
						
					</div>
				</div>
				<div class="carousel-item">
					<img src="Media\Images\carousel\C3.jpg" alt="carousel image" width="1100" height="500">
					<div class="carousel-caption">
						
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<!--Carousel ends-->
		<section id="services">
			<div class="container">
				<h1 class="title text-center">Products Gallery</h1>
				<div class="row text-center">
					<!--Product Gallery Section 1-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery1.jpg" alt="Product image" class="service-img img-fluid ">
						<h4>  Grinder </h4>
						
						
					</div>
					<!--Product Gallery Section 2-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery2.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Cutter </h4>
						
						
					</div>
					<!--Product Gallery Section 3-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery3.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Drill Machine </h4>
						
						
					</div>
					<!--Product Gallery Section 4-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery4.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Hammer </h4>
						
						
					</div>
					<!--Product Gallery Section 5-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery5.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Bolts </h4>
						
						
					</div>
					<!--Product Gallery Section 6-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery6.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Aldropes </h4>
						
					</div>
					<!--Product Gallery Section 7-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery7.jpg" alt="Product image" class="service-img img-fluid ">
						<h4> Taparia Screwdriver </h4>
						
						
					</div>
					<!--Product Gallery Section 8-->
					<div class="col-lg-3 col-md-6 col-12 service">
						<img src="Media/Images/product/gallery8.jpg" alt="Product image" class="service-img img-fluid ">
						<h4>  Godrej Lockers </h4>
						
					</div>
					
					
				</div>
			</div>
		</section>
		<!--Product GalLery Ends-->
		
		<!--Exclusive-->
		<div class="offer">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 ">
					<br><br>
					<img src="Media/Images/product/exlusive.png" class="img-fluid offer-img">
				</div>
				<div class="col-lg-6 col-md-6 col-12 pt-5 ">
					<br><br>
					<p class="available">Available at Shree Balajee Hardware  </p>
					<h1>GB KORE ARC GB-ARC200i Inverter Welding Machine</h1>
					<p class="Description">GB KORE ARC, a brand you can trust backed by our fanatical customer service. ARC welding machine or stick welding gear is utilized to weld metal to metal by making enough warmth to liquefy the metal utilizing power.This machine is very
					light in weight and we can shift to the site very easily. </p>
				</div>
			</div>
		</div>
		<!--Exclusive section Ends-->
		<!--Brands We love-->
		<section id="services">
			<div class="container">
				<h1 class="title text-center">Brands We Love</h1>
				<div class="row text-center">
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo1.png" alt="Card image" class="service-img" >
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo2.jpg" alt="Card image" class="service-img">
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo3.jpg" alt="Card image" class="service-img" >
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo4.jpg" alt="Card image" class="service-img" >
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo5.jpg" alt="Card image" class="service-img" >
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo6.png" alt="Card image" class="service-img" >
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo7.png" alt="Card image" class="service-img">
						
						
						
					</div>
					<!--Logo Sub Section-->
					<div class="col-lg-3 col-md-3 col-6 service">
						<img class="card-img-top" src="Media/Images/brands/Logo8.jpg" alt="Card image" class="service-img">
						
						
					</div>
					
					
				</div>
			</div>
		</section>
		<!--Favourite Brands-->
		<!--Contact Us form-->
		<div class="contact">
			<section class="my-5">
				<div class="py-5">
					<h1 class="title text-center">Contact Us</h1>
				</div>
				<div class="w-50 m-auto">
					<form action="userinfo.php" method="post">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter your email">
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your phone number">
						</div>
						<div class="form-group">
							<label>Your Query</label>
							<textarea class="form-control" name="comments" placeholder="Enter your query"></textarea><br>
							<button type="sumbit" class="btn btn-success"><i class="fa fa-paper-plane"></i>&nbspSumbit</button>
						</div>
					</form>
				</div>
			</section>
		</div>
		<!--Footer section starts-->
		<?php include 'footer.php'; ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
		
		<script>
		
		var preloader = document.getElementById('load');
		function myFunction(){
			preloader.style.display='none';
		}
		</script>
	</body>
</html>
