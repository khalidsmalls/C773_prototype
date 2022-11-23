<?php 
	$page_title = 'Paradigm Pet Professionals';
	

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$searchterm = $_POST['search'] ?? NULL;
		if ($searchterm) {
			$filename = "pet-care-for-" . strtolower($searchterm) . ".php";

			if (file_exists($filename)) {
				header('Location: '. $filename);
				exit;
			} else {
				include('includes/header.html');
				echo "<div class='d-flex justify-content-center pt-5'><div class='col-md-8 col-lg-6 text-center'>";
				echo "<h1>Sorry, your search returned no results.</h1><p>We may not currently offer consultations for your type of pet, but please send us an email or fill out a consultation form and we will promptly reply within 48 hours.</p>";

				echo "</div></div>";
				include('includes/footer.html');
			}
		} else {
			include('includes/header.html');
			echo "<h1 class='text-center' style='padding-top:15%;'>There was an error submitting the form.</h1><p class='text-center' style='font-size:1.2em;'>Please make sure all required fields are populated.</p>";
			include('includes/footer.html');
		}
	}

	
?>