<?php
if (isset($_SESSION['admin'])) {
} else {
	echo "<script>
	alert('You Have To Login.');
	window.location='index';
	</script>";
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Health Care System</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Health Care system Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- //custom-theme -->
	<link rel="stylesheet" type="text/css" href="css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />



	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="wthree_agile_admin_info">
		<!-- /w3_agileits_top_nav-->
		<!-- /nav-->
		<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				<!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page"> <i class="fa fa-tachometer"></i> Admin Dashboard</a></li>



								<li>
									<a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Manage Employee <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="add_emp"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Employee</a></li>
										<li class="mini_list_w3"><a href="view_emp"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Employee</a></li>
									</ul>
								</li>

								<li>
									<a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Manage Location <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="add_location"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Location</a></li>
										<li class="mini_list_w3"><a href="view_location"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Location</a></li>
									</ul>
								</li>

								<li>
									<a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Manage Doctor <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="add_doctor"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Doctor</a></li>
										<li class="mini_list_w3"><a href="view_doctor"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Doctor</a></li>
									</ul>
								</li>

								<li>
									<a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Manage Health Issues <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="add_healthissue"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Health Issues</a></li>
										<li class="mini_list_w3"><a href="view_healthissue"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Health Issues</a></li>
									</ul>
								</li>

								<li>
									<a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Manage Medicines <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="add_medicines"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Medicines</a></li>
										<li class="mini_list_w3"><a href="manage_medicines"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Medicines</a></li>
									</ul>
								</li>

								<li><a href="manage_user"> <i class="fa fa-table" aria-hidden="true"></i> Manage User</a></li>
								<li><a href="view_appointment"> <i class="fa fa-table" aria-hidden="true"></i> View Appointment</a></li>
								<li><a href="medicine_orders"> <i class="fa fa-table" aria-hidden="true"></i> View Orders of Medicines</a></li>
								<li><a href="manage_contact"> <i class="fa fa-table" aria-hidden="true"></i> Contact</a></li>
								<li><a href="manage_feedback"> <i class="fa fa-table" aria-hidden="true"></i> Feedback</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo">
					<h1><a href="main-page"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Health Care system </a></h1>
				</li>
				<li class="second admin-pic">
					<ul class="top_dp_agile">
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="profile-img"><img src="images/admin.jpg" alt=""> </span>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="profile"><i class="fa fa-user"></i> Profile</a> </li>
								<li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Your Notifications</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/a3.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>John Smith</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/a1.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>Jasmin Leo</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>3 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/a2.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>James Smith</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>2 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/a4.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>James Smith</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all Notifications</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Your Messages</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/a3.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>John Smith</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>3 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/a1.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>Jasmin Leo</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>2 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/a2.jpg" alt=""></div>
										<div class="notification_desc">
											<h6>James Smith</h6>
											<p>Lorem ipsum dolor</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all Messages</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 4 Pending tasks</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="second w3l_search">

					<form action="#" method="post">
						<input type="search" name="search" placeholder="Search here..." required="">
						<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>

				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
					</section>
				</li>

			</ul>
			<!-- //nav -->

		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->