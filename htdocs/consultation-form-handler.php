<?php 
	$page_title = 'Paradigm Pet Professionals';
	include('includes/header.html');

	$firstname = $_POST['firstname'] ?? NULL;
	$lastname = $_POST['lastname'] ?? NULL;
	$email = $_POST['email'] ?? NULL;
	$phone = $_POST['phone'] ?? NULL;
	$timezone = $_POST['timezone'] ?? NULL; 
	$petname = $_POST['petname'] ?? NULL;
	$pettype = $_POST['pet-type'] ?? NULL; 
	$petage = $_POST['pet-age'] ?? NULL;

	if ($firstname && $lastname && $email && $phone && $timezone && $petname && $pettype && $petage) {
		echo "<div class='d-flex justify-content-center'>";
		echo "<div class='col-md-8 col-lg-6'>";

		echo "<h1 class='text-center' style='padding-top: 15%;'>Thank You!</h1>
	<p class='text-center' style='font-size: 1.2em;'>We will contact you at <strong>$email</strong> within 48 hours to schedule a one-on-one pet care consultation.</p>";

		echo "</div></div>"; 
	} else {
		echo "<h1 class='text-center' style='padding-top:15%;'>There was an error submitting the form.</h1><p class='text-center' style='font-size:1.2em;'>Please make sure all required fields are populated.</p>";
	}


	include('includes/footer.html'); 	
?>