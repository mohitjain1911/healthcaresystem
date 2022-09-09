<?php
include_once('Header.php');
?>
<!-- banner 2 -->
<div class="inner-banner-w3ls">
	<div class="container">

	</div>
	<!-- //banner 2 -->
</div>
<!-- page details -->
<div class="breadcrumb-agile">
	<div aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Appointment</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<div class="appointment py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Appointment</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
		</div>
		<div class="d-flex">
			<div class="appoint-img">

			</div>
			<div class="contact-right-w3l appoint-form">
				<h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>
				<form action="appointment" method="post">
					<div class="form-group">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
						<label for="recipient-name" class="col-form-label">Patient's Name </label>
						<input type="text" class="form-control" name="patient_name" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="patient_age" class="col-form-label">Patient's Age </label>
						<input type="text" class="form-control" name="patient_age" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="datepicker" class="col-form-label">Select your doctor</label>
						<select name="doctor_id" required="" class="form-control">
							<option>Select your doctor</option>
							<?php
							foreach ($doctor_arr as $d) {
							?>
								<option value="<?php echo $d->doctor_id; ?>"><?php echo $d->doctor_name; ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="datepicker" class="col-form-label">Select your disease</label>
						<select name="health_id" required="" class="form-control">
							<option>Select your disease</option>
							<?php
							foreach ($healthissue_arr as $d) {
							?>
								<option value="<?php echo $d->health_id; ?>"><?php echo $d->health_name; ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="appoint_dt" class="col-form-label">Select Date/Time </label>
						<input type="datetime-local" class="form-control" name="appoint_dt" id="recipient-name" required="">
					</div>
					<input type="submit" name="submit" value="Book Appointment" class="btn_apt">
				</form>
			</div>
			<div class="clerafix"></div>
		</div>
	</div>
</div>
<!-- //contact -->

<?php
include_once('footer.php');
?>