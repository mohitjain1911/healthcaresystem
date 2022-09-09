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
				<a href="home">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Profile</li>
		</ol>
	</div>
</div>
<!-- //page details -->
<!-- contact -->
<div class="agileits-contact py-5">
	<div class="py-xl-5 py-lg-3">
		<div class="w3ls-titles text-center mb-5">z
			<h3 class="title">My Profile</h3>
			<span>
				<i class="fas fa-user-md"></i>
			</span>
		</div>
		<div class="d-flex">
			<div class="col-lg-5">
				<img src="../upload/user/<?php echo $fetch->image; ?>" width="100%" alt="">
			</div>
			<div class="col-lg-7 contact-right-w3l">
				<form action="profile" method="post">
					<div class="form-group">
						Name:<input type="text" class="name form-control" disabled value="<?php echo $fetch->name; ?>">
					</div>
					<div class="form-group">
						Mobile No.:<input type="text" class="name form-control" disabled value="<?php echo $fetch->mobile; ?>">
					</div>
					<div class="form-group">
						Email:<input type="text" class="name form-control" disabled value="<?php echo $fetch->email; ?>">
					</div>
					<div class="form-group">
						Gender:<input type="text" class="name form-control" disabled value="<?php echo $fetch->gender; ?>">
					</div>
					<div class="form-group">
						<a href="edit?user_id=<?php echo $fetch->user_id; ?>">Edit</a>
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