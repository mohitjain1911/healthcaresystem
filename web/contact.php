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
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<div class="agileits-contact py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">
			<h3 class="title">Contact Us</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
		</div>
		<div class="d-flex">
			<div class="col-lg-5 w3_agileits-contact-left">
			</div>
			<div class="col-lg-7 contact-right-w3l">
				<h5 class="title-w3 text-center mb-5">Get In Touch</h5>
				<form action="contact" method="post">
					<div class="form-group">
						<input type="text" class="name form-control" name="name" placeholder="Name" required="">
					</div>
					<div class="form-group">
						<input type="email" class="name form-control" name="email" placeholder="Email" required="">
					</div>
					<div class="form-group">
						<input type="text" class="name form-control" name="subject" placeholder="Subject" required="">
					</div>

					<div class="form-group">
						<textarea placeholder="Your Message" required="" name="message" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="Submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- Map -->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5130900428026!2d44.506621715459396!3d40.17539347939393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1509605601510"></iframe>
</div>
<!-- //Map -->


<?php
include_once('footer.php');
?>