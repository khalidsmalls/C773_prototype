<?php 
	$page_title = 'Paradigm Pet Professionals';
	include('includes/header.html');
?> 
	<!-- Begin page content -->

	<section class="d-flex justify-content-center py-2">
		<div id="hero-image-div" class="col-xs-12 col-lg-10 col-xl-9">
			<div class="p-1">
				<picture>
					<source media="(min-width: 600px)" srcset="../assets/images/dog-and-cat-med.jpg">
					<source media="(min-width: 768px)" srcset="../assets/images/dog-and-cat-desktop.jpg"> 
					<img class="img-fluid" id="hero-image" src="../assets/images/dog-and-cat-mobile.jpg" alt="A dog and cat lying together">
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
					<button class="btn" id="cta-button" onclick="window.location.href='consultation-form.php';" >
						Schedule a one-on-one Consultation 
					</button>
				</div>
			</div>
		</div>
	</section> 

	<div class="d-flex justify-content-center">
		<div class="row col-xs-12 col-lg-10 col-xl-9"> 
			<div class="col-xs-12 col-md-6 mb-2 ps-lg-0">
				<section class="page-content p-2 mb-2">
					<h1>Evidence-based pet care advice for every pet lover</h1>
					<p class="p-1">Looking for basic pet care advice for the most common type of pets? Need additional help determining which type of pet is right for you and your family? We will work with you and provide tailored evidence-based pet care to ensure lifelong health and wellness of your new companion. </p>
				</section>
				<section class="page-content p-2">
					<h2 style="padding-left:32px;">Services</h2>
					<hr/>
					<ul class="p-0">
						<li class="mb-3" style="line-height:1.3; font-size:1.2em;">Virtual consultations and presentations</li>
						<li class="mb-3" style="line-height:1.3; font-size:1.2em;">One-on-one consultations concerning individual pets</li>
						<li class="mb-3" style="line-height:1.3; font-size:1.2em;">Group presentations regarding general pet care (can be tailored to the needs of the group)</li>
					</ul>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 mb-2 pe-lg-0">
				<aside class="page-content p-2" style="height:100%;">
					<h3>Looking for your new best friend?</h3>
					<p class="p-1"><span style="font-size:1.1em;">We are also happy to help you navigate the adoption process!</span> We will guide you through each step in the process from determining which type of pet is best suited for your family and home environment, to completing the necessary paperwork, to bringing your new loved one home. Please fill out our <a href="consultation-form.php">contact form</a> to request a consultation. We will contact you within 48 hours to schedule a consultation. All fields are required.</p>
					<!-- <h3>Looking for your new best friend?</h3> -->
					<p>The following organizations can help you find and adopt the perfect companion:</p>
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
