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
				<li><a href="main-page.html">Home</a><span>«</span></li>
				<li>Forms <span>«</span></li>
				<li>Inputs</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle">Inputs</h2>

		<!--/forms-->
		<div class="forms-main_agileits">


			<!--/forms-inner-->
			<div class="forms-inner">

				<div class="wthree_general graph-form agile_info_shadow ">
					<h3 class="w3_inner_tittle two">Add Location </h3>

					<div class="grid-1 ">
						<div class="form-body">
							<form class="form-horizontal" action="add_location" method="post">
								<div class="form-group">
									<label for="Location Name" class="col-sm-2 control-label">Location Name</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="Location Name">
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