<?php 
	$page_title = 'About Us';
	include('includes/header.html');
?> 
	<!-- Begin page content -->


	<div class="d-flex justify-content-center">
		<h1 class="display-3">About Us</h1>
	</div>
	<hr/>

	<div class="d-flex justify-content-center">
		<section class="d-lg-flex page-content mb-2 p-1 col-xxl-9">
			<div class="row">
				<picture class="col-xl-6 col-xxl-5">
					<source media="(min-width: 768px)" srcset="../assets/images/brown-dog-med.jpg">
					<source media="(min-width: 1000px)" srcset="../assets/images/brown-dog-large.jpg">
					<img class="img-fluid" src="../assets/images/brown-dog-small.jpg" alt="A cute brown dog" style="height:100%;">
				</picture>
				<div class="col-xl-5 col-xxl-6" style="align-self:center;">
					<p class="p-1 content"><strong style="font-size:1.2em;">Pets are nature's gift to humanity</strong>. It has been scientifically proven that opening our homes and hearts to a pet increases our longevity and improves our overall quality of life as well as the lives of our pets. At Pet Paradigm Professionals, our mission is to offer resources to help you care for your furry, scaly, feathery, and slimy loved ones. Our pet experts—or “Pexperts”—have been working with pet owners and professionals alike for the past twelve years. They offer <a href="consultation-form.php">one-on-one consultations</a> with current and prospective pet owners as well as group presentations designed for veterinary, pet shelter, and pet breeding professionals.</p>
					<div>
						<button class="btn" id="cta-button" onclick="window.location.href='consultation-form.php';" >
							Schedule a one-on-one Consultation 
						</button>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="d-flex justify-content-center">
		<div class="row col-xs-12 col-xxl-9"> 
			<div class="col-xs-12 col-md-6 mb-2 ps-xxl-0">
				<section class="page-content p-2 mb-2">
					<h2 class="p-1">Evidence-based pet care advice for every pet lover</h2>
						<picture>
							<source media="(min-width: 768px)" srcset="../assets/images/veterinary-med.jpg">
							<source media="(min-width: 1000px)" srcset="../assets/images/veterinary-large.jpg">
							<img class="img-fluid" id="hero-image" src="../assets/images/veterinary-small.jpg" alt="A veterinarian caring for a dog">
						</picture>
					<p class="p-1">Looking for basic pet care advice for the most common type of pets? Need additional help determining which type of pet is right for you and your family? We will work with you and provide tailored evidence-based pet care to ensure lifelong health and wellness of your new companion. </p>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 mb-2 pe-xxl-0 pb-2">
				<section class="page-content mb-2 p-2" style="height:100%;">
					<h2 class="pt-2 ps-4">Services</h2>
					<hr/>

					<ul class="ps-2 pb-1">
						<li class="mb-3" style="line-height:1.3;font-size:1.1em;">Virtual consultations and presentations</li>
						<li class="mb-3" style="line-height:1.3;font-size:1.1em;">One-on-one consultations concerning individual pets</li>
						<li class="mb-3" style="line-height:1.3;font-size:1.1em;">Group presentations regarding general pet care (can be tailored to the needs of the group)</li>
					</ul>
					<h4>We are also happy to help you navigate the adoption process!</h4>
					<p class="p-1">We will guide you through each step in the process from determining which type of pet is best suited for your family and home environment, to completing the necessary paperwork, to bringing your new loved one home. Please fill out our <a href="consultation-form.php">contact form</a> to request a consultation. We will contact you within 48 hours to schedule a consultation. All fields are required.</p>
				</section>
			</div>
		</div>
	</div>



	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>