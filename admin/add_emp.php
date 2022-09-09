<?php
include_once('header.php');
?>

<!-- /inner_content-->
<div class="inner_content">
	<!-- /inner_content_w3_agile_info-->

	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="dashboard">Home</a><span>«</span></li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle"></h2>

		<!--/forms-->
		<div class="forms-main_agileits">


			<!--/forms-inner-->
			<div class="forms-inner">

				<div class="wthree_general graph-form agile_info_shadow ">
					<h3 class="w3_inner_tittle two">Add Employee </h3>

					<div class="grid-1 ">
						<div class="form-body">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="name">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mobile</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="mobile">
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio" name="gender" value="Female">Female</label></div>
										<div class="radio block"><label><input type="radio" name="gender" value="Male">Male</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="Password" class="form-control" name="password">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="file" name="image" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8">
										<button type="submit" name="submit" class="btn btn-default">Submit</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>


			</div>
			<!--//forms-inner-->
		</div>
		<!--//forms-->

		<?php
		include_once('footer.php');
		?>