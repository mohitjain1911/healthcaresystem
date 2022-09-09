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

				<li>Manage Employee</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle">Manage Employee</h2>
		<!-- tables -->

		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<h3 class="w3_inner_tittle two">Manage Employees</h3>
				<div class="table-responsive">
					<table id="table">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th>Name</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Image</th>
								<th>Created Date/Time</th>
								<th>Updated Date/Time</th>
								<th>Status</th>
								<th>Action</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($employee_arr as $d) {
							?>
								<tr>
									<td><?php echo $d->employee_id; ?></td>
									<td><?php echo $d->name; ?></td>
									<td><?php echo $d->mobile; ?></td>
									<td><?php echo $d->email; ?></td>
									<td><?php echo $d->gender; ?></td>
									<td><img src="../upload/employee/<?php echo $d->image; ?>" width="50px" height="50px"></td>
									<td><?php echo $d->created_dt; ?></td>
									<td><?php echo $d->updated_dt; ?></td>
									<td><?php echo $d->status; ?></a></td>
									<?php
									$status = $d->status;
									if ($status == "Unblock") { ?>
										<td><a href="status?statusemployee_id=<?php echo $d->employee_id; ?>">Block the employee.</td>
									<?php
									} else { ?>
										<td><a href="status?statusemployee_id=<?php echo $d->employee_id; ?>">Unblock the employee.</td>
									<?php
									} ?>
									<td><a href="delete?deleteemployee_id=<?php echo $d->employee_id; ?>"><?php echo 'Delete'; ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>

			</div>




		</div>
		<!-- //tables -->
		<?php
		include_once('footer.php');

		?>