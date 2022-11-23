<?php 
	$page_title = 'Paradigm Pet Professionals';
	include('includes/header.html');
?> 
	<!-- Begin page content -->


	<section class="d-flex justify-content-center">
		<div class="col-xs-12 col-md-7 col-xxl-5 p-1">
			<form action="consultation-form-handler.php" method="post" class="p-2 form">
				<h1 class="text-light">Pet Care Consultations</h1>

				<fieldset class="p-2 fieldset mb-2">
					<div class="row ps-3">
						<div class="row my-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label class="form-label" for="firstname">First Name</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="text" name="firstname" id="firstname" required>
							</div>
						</div>
						<div class="row my-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label for="lastname">Last Name</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="text" name="lastname" id="lastname" required>
							</div>
						</div>
					</div>
					<div class="row ps-3">
						<div class="row my-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label for="email">Email</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="email" name="email" id="email" required>
							</div>
						</div>
						<div class="row my-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label for="phone">Phone</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="tel" name="phone" id="phone" required>
							</div>
						</div>
					</div>
					<div class="row ps-3">
						<div class="row mb-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label for="timezone">Time Zone</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="text" name="timezone" id="timezone" required>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset class="p-2 fieldset mb-2">
					<legend>Pet Information</legend>
					<div class="row ps-3">
						<div class="row mb-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label class="form-label" for="petname">Name</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="text" name="petname" id="petname" required>
							</div>
						</div>
						<div class="row mb-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label class="form-label" for="pet-type">Type</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="text" name="pet-type" id="pet-type">
							</div>
						</div>
					</div>
					<div class="row ps-3">
						<div class="row mb-2 p-2 col-xl-6">
							<div class="col-md-4 pe-0">
								<label class="form-label" for="pet-age">Age</label>
							</div>
							<div class="col-md-8 ps-md-0">
								<input class="form-control" type="number" name="pet-age" id="pet-age">
							</div>
						</div>
					</div>
				</fieldset>

				<div class="d-flex justify-content-between">
					<p class="text-light" style="font-size:.8em;">all fields required*</p>
					<button type="submit" class="btn btn-secondary px-2 py-1">Submit</button>
				</div>
			</form>
		</div>
	</section>
	











	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>