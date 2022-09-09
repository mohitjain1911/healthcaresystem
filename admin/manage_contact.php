<?php
include_once('header.php');
?>
<div class="clearfix"></div>
<!-- //w3_agileits_top_nav-->

<!-- /inner_content-->
<div class="inner_content">
	<!-- /inner_content_w3_agile_info-->

	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="">Home</a><span>«</span></li>

				<li>Manage Contact</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle">Manage Contact</h2>
		<!-- tables -->

		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<h3 class="w3_inner_tittle two">Manage Categories</h3>
				<table id="table">
					<thead>
						<tr>
							<th>Contact ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>

						<?php
						foreach ($contact_arr as $d) {
						?>
							<tr>
								<td><?php echo $d->contact_id; ?></td>
								<td><?php echo $d->name; ?></td>
								<td><?php echo $d->email; ?></td>
								<td><?php echo $d->subject; ?></td>
								<td><?php echo $d->message; ?></td>
								<td><a href="delete?contact_id=<?php echo $d->contact_id; ?>"><?php echo 'Delete'; ?></td>
							</tr>
						<?php
						}
						?>

					</tbody>
				</table>


			</div>




		</div>
		<!-- //tables -->
		<?php
		include_once('footer.php');

		?>