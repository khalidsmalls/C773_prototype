<?php 
	$page_title = 'Contact Us';
	include('includes/header.html');
?> 
	<!-- Begin page content -->

	<div class="d-flex justify-content-center">
		<h1 class="display-3">Contact Us</h1>
	</div>
	<hr/>

	<div class="row d-flex justify-content-center mb-3">
		<div class="col-xs-12 col-md-8 col-lg-6 col-xxl-5">
			<form action="contact-form-handler.php" method="post" class="p-1 form">
				<fieldset class="p-3 fieldset">
					<div class="row justify-content-center my-3 pt-2">
						<div class="col-xs-12 col-md-3">
							<label for="firstname" class="form-label">First Name<span>*</span></label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input class="form-control" type="text" name="firstname" id="firstname" required>
						</div>
					</div>

					<div class="row justify-content-center my-3">
						<div class="col-xs-12 col-md-3">
							<label for="lastname" class="form-label">Last Name<span>*</span></label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input class="form-control" type="text" name="lastname" id="lastname" required>
						</div>
					</div>

					<div class="row justify-content-center my-3">
						<div class="col-xs-12 col-md-3">
							<label for="email" class="form-label">Email<span>*</span></label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input  style="border: 1px solid #003B6D;" class="form-control" type="email" name="email" id="email" required>
						</div>
					</div>

					<div class="row justify-content-center my-3">
						<div class="col-xs-12 col-md-3">
							<label for="comments" class="form-label">Comments</label>
						</div>
						<div class="col-xs-12 col-md-6">
							<textarea style="border: 1px solid #003B6D;" class="form-control" rows="6" name="comments" id="comments"></textarea>
						</div>
					</div>

					<div>
						<p class="ps-3" style="font-size: .8em;">* required field</p>
					</div>
				</fieldset>
				<div class="d-flex justify-content-end p-3 me-3">
					<button type="submit" class="btn btn-secondary px-2 py-1">Submit</button>
				</div>
			</form>
		</div>
	</div>

	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>