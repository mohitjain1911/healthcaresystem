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
					<h3 class="w3_inner_tittle two">Add Medicine </h3>

					<div class="grid-1 ">
						<div class="form-body">
							<form class="form-horizontal">

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">File</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="exampleInputEmail1" placeholder="Password">
									</div>
								</div>



								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
											<option>Lorem ipsum dolor sit amet.</option>
											<option>Dolore, ab unde modi est!</option>
											<option>Illum, fuga minus sit eaque.</option>
											<option>Consequatur ducimus maiores voluptatum minima.</option>
										</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control1">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medicine Category</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="mediuminput" required>
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medicine Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="mediuminput" required>
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Name of the Company</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="mediuminput" required>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><input type="checkbox"> Check me out</label>
									<div class="col-sm-8">
										<button type="submit" class="btn btn-default">Submit</button>
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