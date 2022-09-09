<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE>
<lang="zxx">

	<head>
		<title>Health Care System</title>
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8" />
		<meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script>
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--// Meta tag Keywords -->

		<!-- Custom-Files -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Bootstrap-Core-CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!-- Style-CSS -->
		<link rel="stylesheet" href="css/fontawesome-all.css">
		<!-- Font-Awesome-Icons-CSS -->
		<!-- //Custom-Files -->

		<!-- Web-Fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<!-- //Web-Fonts -->

	</head>

	<body>
		<!-- header -->
		<header>
			<!-- top-bar -->
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 top-social-agile">
							<div class="row">
								<!-- social icons -->
								<ul class="col-lg-4 col-6 top-right-info text-center">
									<li>
										<a href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
									<li class="ml-3">
										<a href="#">
											<i class="fab fa-pinterest-p"></i>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
								<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
									<p class="text-white">
										<i class="fas fa-map-marker-alt mr-2"></i>Parma Via Modena,BO, Italy
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-5 top-social-agile text-lg-right text-center">
							<div class="row">
								<div class="col-lg-7 col-6 top-w3layouts">
									<p class="text-white">
										<i class="far fa-envelope-open mr-2"></i>
										<a href="mailto:info@example.com" class="text-white">info@example.com</a>
									</p>
								</div>
								<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
									<p class="text-white">
										<i class="fas fa-phone mr-2"></i>+1 000263676
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top-bar -->

		<!-- header 2 -->
		<div id="home">
			<!-- navigation -->
			<div class="main-top py-1">
				<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
					<div class="container">
						<!-- logo -->
						<h1>
							<a class="navbar-brand font-weight-bold font-italic" href="home">
								Health Care System
							</a>
						</h1>
						<!-- //logo -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
							<ul class="navbar-nav ml-lg-auto">
								<li class="nav-item mx-lg-4 my-lg-0 my-3">
									<a class="nav-link" href="home">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Services
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">

										<a class="dropdown-item" href="appointment">Appointment</a>
										<a class="dropdown-item" href="order_medicine">Order Medicines</a>
									</div>
								</li>
								<li class="nav-item mx-lg-4 my-lg-0 my-3">
									<a class="nav-link" href="about">About</a>
								</li>
								<li class="nav-item mx-lg-4 my-lg-0 my-3">
									<a class="nav-link" href="contact">Contact</a>
								</li>

								<?php
								if (isset($_SESSION['user'])) {
								?>

									<li class="nav-item mx-lg-4 my-lg-0 my-3">
										<a class="nav-link" href="profile">My Profile</a>
									</li>

								<?php
								}
								if (isset($_SESSION['user'])) {
								?>
									<!-- logout -->
									<a href="logout" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3">
										<i class="fas fa-sign-in-alt mr-2"></i>Logout</a>
									<!-- //logout -->
								<?php
								} else {
								?>
									<!-- //register -->
									<a href="register" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter2">
										<i class="fas fa-sign-in-alt mr-2"></i>Register</a>
									<!-- //register -->
									<!-- login -->
									<a href="login" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
										<i class="fas fa-sign-in-alt mr-2"></i>Login</a>
									<!-- //login -->
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<!-- //navigation -->
			<!-- modal -->
			<!-- login -->
			<div class="modal fade" id="exampleModalCenter1" ta"home="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="login px-4 mx-auto mw-100">
								<h5 class="text-center mb-4">Login Now</h5>
								<form action="login" method="post">
									<div class="form-group">
										<label>Your Email</label>
										<input type="email" class="form-control" name="email" placeholder="" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" name="password" placeholder="" required="">
									</div>
									<button type="submit" formaction="login" name="Login" class="btn submit mb-4">Login</button>
									<p class="forgot-w3ls text-center pb-4">
										<a href="#" class="text-white">Forgot your password?</a>
									</p>
									<p class="account-w3ls text-center pb-4">
										Don't have an account?
										<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- register -->
			<div class="modal fade" id="exampleModalCenter2" ta"home="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-2">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="login px-4 mx-auto mw-100">
								<h5 class="text-center mb-4">Register Now</h5>
								<form action="register" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" required="">
									</div>

									<div class="form-group">
										<label>Mobile No.</label>
										<input type="number" class="form-control" name="mobile" required="">
									</div>
									<div class="form-group">
										<label>Gender</label>
										<input type="radio" value="Female" name="gender">Female
										<input type="radio" value="Male" name="gender">Male
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Set Password</label>
										<input type="password" class="form-control" name="password" id="password1" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Set Profile</label>
										<input type="file" class="form-control" name="image">
									</div>
									<button type="submit" name="Register" class="btn btn-primary submit mb-4">Register</button>
									<p class="text-center pb-2">
										<a href="register" class="text-white">By clicking Register, I agree to your terms</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //register -->
			<!-- //modal -->
		</div>
		<!-- //header 2 -->