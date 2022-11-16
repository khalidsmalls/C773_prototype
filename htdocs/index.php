<?php 
	$page_title = 'Paradigm Pet Professionals';
	include('includes/header.html');
?> 
	<!-- Begin page content -->

	<section class="d-flex justify-content-center py-2">
		<div id="hero-image-div" class="col-xs-12 col-md-10 col-lg-9">
			<div class="p-1">
				<picture>
					<source media="(min-width: 600px)" srcset="../assets/images/dog-and-cat-med.jpg">
					<source media="(min-width: 768px)" srcset="../assets/images/dog-and-cat-desktop.jpg"> 
					<img class="img-fluid" id="hero-image" src="../assets/images/dog-and-cat-mobile.jpg" alt="">
				</picture>
			</div>
			<div class="p-1" id="mission-statement">
				<p style="line-height: 1.3;">At Pet Paradigm Professionals, our mission is to offer resources to help you care for your furry, scaly, feathery, and slimy loved ones.</p>
			</div>
			<div class="p-1" id="call-to-action">
				<div>
					<p id="hero-message">Paradigm Pet Professionals has 12 years’ experience working with pet owners, certifications in pet health and nutrition, and customer recognition for outstanding support.</p>
				</div>
				<div>
					<button class="btn" id="cta-button">
						Schedule a one-on-one Consultation 
					</button>
				</div>
			</div>
		</div>
	</section> 

	<div class="d-flex justify-content-center">
		<div class="row col-xs-12 col-lg-9"> <!-- px-2 -->
			<div class="col-xs-12 col-md-6 mb-2 ps-lg-0">
				<section class="page-content mb-2 p-2">
					<h1>Evidence-based pet care advice for every pet lover</h1>
					<p class="p-1">Pets are nature's gift to humanity. It has been scientifically proven that opening our homes and hearts to a pet increases our longevity and improves our overall quality of life as well as the lives of our pets. Our pet experts—or “Pexperts”—have been working with pet owners and professionals alike for the past twelve years. They offer <a href="#">one-on-one consultations</a> with current and prospective pet owners as well as group presentations designed for veterinary, pet shelter, and pet breeding professionals.</p>
				</section>
				<section class="page-content p-2">
					<p class="p-1">Looking for basic pet care advice for the most common type of pets? Need additional help determining which type of pet is right for you and your family? We will work with you and provide tailored evidence-based pet care to ensure lifelong health and wellness of your new companion. </p>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 mb-2 pe-lg-0">
				<aside class="page-content p-2" style="height:100%;">
					<p class="p-1">We are also happy to help you navigate the adoption process! We will guide you through each step in the process from determining which type of pet is best suited for your family and home environment, to completing the necessary paperwork, to bringing your new loved one home. Please fill out our <a href="#">contact form</a> to request a consultation. We will contact you within 48 hours to schedule a consultation. All fields are required.</p>
					<p>Looking for your new best friend? The following organizations can help you find and adopt the perfect companion:</p>
					<div class="row">
						<span class="col-md-4 col-lg-5 external-links">General Adoption Resources:</span>
						<a href="https://theshelterpetproject.org/" target="_blank" class="col-md-4 external-links">https://theshelterpetproject.org/</a>
					</div>
					<div class="row">
						<span class="col-md-4 col-lg-5">ASPCA:</span>
						<a href="https://www.aspca.org/" target="_blank" class="col-md-4 external-links">"https://www.aspca.org/"</a>
					</div>
					<div class="row">
						<span class="col-md-4 col-lg-5">Fish Rescue:</span>
						<a href="https://www.sterlingshelter.org/humane-society/koi-fish-rescue/" target="_blank" class="col-md-8 col-lg-7 external-links">https://www.sterlingshelter.org/humane-society/koi-fish-rescue/</a>
					</div>
				</aside>
			</div>
		</div>
	</div>



	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>
