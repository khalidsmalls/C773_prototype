<?php 
	$page_title = 'Paradigm Pet Professionals';
	include('includes/header.html');


	$firstname = $_POST['firstname'] ?? NULL;
	$lastname = $_POST['lastname'] ?? NULL;
	$email = $_POST['email'] ?? NULL;
	$comments = $_POST['comments'] ?? NULL;

	if ($firstname && $lastname && $email) {
		echo "<h1 class='text-center' style='padding-top: 15%;'>Thank You!</h1>
	<p class='text-center' style='font-size: 1.2em;'>We will promptly reply to you at <strong>$email</strong></p>";
	} else {
		echo "<h1 class='text-center' style='padding-top:15%;'>There was an error submitting the form.</h1><p class='text-center' style='font-size:1.2em;'>Please make sure all required fields are populated.</p>";
	}


	include('includes/footer.html'); 	
?>