<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us || Shree Baljee Hardware || A Hardware Store </title>
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
	<body>
		<?php include 'navigation.php'; ?>
		<div class="contactus">
			<div class="container">
				<div class="contactfrm pt-5 pb-3">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12 pl-5 ">
							
							<h1 class="text-center pb-2">Shree Balajee Hardware</h1>
							
							
							<p><h6><i class="fa fa-phone"></i>&nbsp+91-9876543210</h6></p>
							<p><h6><i class="fa fa-phone"></i>&nbsp+91-1234567890</h6></p>
							<p><h6><i class="fa fa-envelope-o"></i>&nbspagarwaldeepak491@gmail.com</h6></p>
							<p><h6><i class="fa fa-map-marker"></i>&nbspBank More,Dhanbad,Jharkhand 826001</h6></p>
							<br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58407.40906607052!2d86.39923034543015!3d23.802127179782723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6a30804ccfc6d%3A0xfa151e1b85f764e7!2sDhanbad%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1624787475974!5m2!1sen!2sin" width="auto" height="auto" style="border:0;" allowfullscreen=""  aria-hidden="false" tabindex="0" loading="lazy"></iframe>
							
							<h4 class="pt-3 pb-2"> Our Second unit  </h4>
							<p><h6><i class="fa fa-map-marker"></i>&nbspKatras Road, Bank More, Dhanbad, Jharkhand 826001</h6></p>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							
							
							<h1 class="title text-center">Message Us</h1>
							
							<div class="w-50 m-auto">
								<form action="userinfo.php" method="post">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="user" autocomplete="off" class="form-control " placeholder="Enter your name">
									</div>
									<div class="form-group">
										<label>Email Id</label>
										<input type="email" name="email" autocomplete="off" class="form-control " placeholder="Enter your email">
									</div>
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" name="mobile" autocomplete="off" class="form-control " placeholder="Enter your phone number">
									</div>
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control " name="comments" placeholder="Enter your message"></textarea><br>
										<button type="sumbit" class="btn btn-success"><i class="fa fa-paper-plane"></i>&nbspSumbit</button>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>