<?php 
	$page_title = 'Pet Care for Fish';
	include('includes/header.html');
?> 
	<!-- Begin page content -->

	<div class="d-flex justify-content-center">
		<h1 class="display-3">Pet Care for Fish</h1>
	</div>
	<hr/>

	<div class="d-flex justify-content-center">
		<section class="d-lg-flex page-content mb-2 p-1 col-lg-11 col-xxl-9">
			<div class="row">
				<picture class="col-lg-5">
					<source media="(min-width: 600px)" srcset="../assets/images/fish-med.jpg">
					<img class="img-fluid" src="../assets/images/fish-sm.jpg" alt="A small orange and white fish" style="height:100%;">
				</picture>
				<div class="col-lg-6" style="align-self:center;">
					<p class="p-1 content"><strong style="font-size:1.2em;">Fish</strong> represent a broad class of aquatic animals that can live in fresh or saltwater, depending on the species. Bringing fish into your home can be an exciting hobby, especially if you intend to breed them, and the presence of a fish tank in your home can induce feelings of peace and tranquility.</p>
					<p class="p-1 content">Whether you are bringing your fish home for the first time or maintaining your aquarium, it is important to test your water once per week to ensure it is free from toxins that can harm your fish.</p>
					<div>
						<button class="btn" id="cta-button" onclick="window.location.href='consultation-form.php';">
							Schedule a one-on-one Consultation 
						</button>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="d-flex justify-content-center">
		<div class="row col-xs-12 col-lg-11 col-xxl-9"> 
			<h2 class="display-3 text-center">Aquarium Maintenance</h2>
			<div class="col-xs-12 col-md-6 col-xl-4 mb-2 ps-lg-0" style="">
				<section class="page-content p-2">
					<h2 class="text-center">Freshwater Fish</h2>
					<p class="content p-1">There are several freshwater fish to choose from when setting up your aquarium, but it is best to <a href="consultation-form.php" style="text-decoration: none;">consult with a “Pexpert”</a> to ensure your fish will get along! No matter the species, ensure your fish are suited for a freshwater environment by investing in a water testing kit. Follow these general water chemistry guidelines to ensure your fish will adapt well to your aquarium and avoid ingesting toxins that can harm or kill your fish:</p>
					<ul class="p-1">
						<li>pH Level: 6.8–7.6 (7.0 is considered neutral)</li>
						<li>Ammonia: any level above zero is harmful to fish</li>
						<li>Nitrates: 5 to 10 ppm</li>
						<li>Nitrites: less than 0.5 ppm</li>
					</ul>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 col-xl-4 mb-2 pe-lg-0">
				<section class="page-content p-2" style="height:100%;">
					<h2 class="text-center">Saltwater Fish</h2>
					<p class="content p-1">Saltwater fish also offer several options when it comes to choosing among species for your aquarium. As with freshwater fish, <a href="consultation-form.php" style="text-decoration:none;">consult with a “Pexpert”</a> to ensure your fish will get along are suited for a saltwater environment. Following these general guidelines to avoid dangerous water conditions and ensure the appropriate salinity level for your fishies:</p>
				<ul class="p-1">
					<li>Salinity: 1.020–1.028 sg</li>
					<li>pH Level: 7.6–8.4 (7.0 is considered neutral)</li>
					<li>Ammonia: any level above 0.1 ppm requires attention</li>
					<li>Nitrates: 10 to 40 ppm</li>
					<li>Nitrites: less than 0.2 ppm</li>
				</ul>
				</section>
			</div>
			<div class="col-xs-12 col-xl-4 pb-2 px-lg-0 ps-xl-4">
				<section class="page-content p-2" style="height:100%;">
					<h4>For more information on making your tap water safe for your fish, please visit:</h4>
					<ul class="p-1">
						<li>
							<a target="_blank" href="https://www.theaquariumwiki.org/wiki/How_to_make_tap_water_safe_for_fish">The Aquarium Wiki</a>
						</li>
						<li>
							<a target="_blank" href="https://www.fishbase.org/home.htm">Fishbase</a>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</div>


	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>