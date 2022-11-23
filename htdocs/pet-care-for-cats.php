<?php 
	$page_title = 'Pet Care for Cats';
	include('includes/header.html');
?> 
	<!-- Begin page content -->

	<div class="d-flex justify-content-center">
		<h1 class="display-3">Pet Care for Cats</h1>
	</div>
	<hr/>

	<div class="d-flex justify-content-center">
		<section class="d-lg-flex page-content mb-2 p-1 col-lg-11 col-xxl-9">
			<div class="row">
				<picture class="col-lg-5">
					<source media="(min-width: 600px)" srcset="../assets/images/brown-and-white-cat-med.jpg">
					<img class="img-fluid" src="../assets/images/brown-and-white-cat-sm.jpg" alt="A cute brown cat with black stripes" style="height:100%;">
				</picture>
				<div class="col-lg-6" style="align-self:center;">
					<p class="p-1 content"><strong style="font-size:1.2em;">Cats</strong> were first domesticated around 7500 BCE in the western Asia region and are currently the second most popular domestic pet in the United States. While there are over 60 unique documented cat breeds, care and diet can differ between breeds. However, some diets and practices are generally recommended for the well-being of your fluffy family member regardless of breed. Schedule a one-on-one consultation with one of our "Pexperts" to discuss feeding needs for specific breeds.</p>
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
			<h1 class="display-3 text-center col-12">Care and Diet</h1>
			<div class="col-xs-12 col-md-6 mb-2 ps-lg-0">
				<section class="page-content mb-2 p-2">
					<h2 class="text-center">Zero to Four Weeks Old</h2>
					<p>It is important the queen (a term commonly used for a female cat that is either pregnant or nursing) directly nurse her young if possible. Monitor your kitten’s growth closely to make sure its growth rate is progressing steadily. If any kitten is not growing at a sufficient rate, a caretaker might need to feed the kitten directly either with a bottle or a feeding tube. Some reasons why kittens might not gain weight appropriately include the following:</p>
					<ul class="ps-2" style="font-size:1.1em;">
						<li class="mb-2">too many other siblings are competing for mom's milk</li>
						<li class="mb-2">gastrointestinal disease</li>
						<li class="mb-2">environmental conditions such as extreme heat or cold, or unsanitary conditions</li>
					</ul>
				</section>
				<section class="page-content p-2">
					<h2 class="text-center">Four Weeks to One Year Old</h2>
					<p>Kittens can start being introduced to soft wet kitten food typically around three to four weeks after birth. According to the <a href="https://www.aspca.org/">ASPCA</a>, kittens at this age should eat half to one cup of dry kitten food or six to nine ounces of wet kitten food per day. If your kitten has difficulties eating hard food, a small amount of water can be added to soften the food. Cat food that is optimized for kittens provides the additional nutrients that are needed for growth, energy, and wellness. Depending on the breed, your cat may have different dietary requirements. You should always consult with your veterinarian for recommendations.</p>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 mb-2 ps-lg-0 pb-2">
				<section class="page-content mb-2 p-2" style="height:50%;">
					<h2 class="text-center">One Year to Seven Years Old</h2>
					<p>This age is when kittens reach the cat stage and do not need as many nutrients. At this age, their level of activity decreases, and so does their metabolism. It is <strong>not</strong> recommended to leave food out for the cats all day. Instead, provide food a couple times a day so they eat meals rather than snacking throughout the day. This practice reduces the risk of obesity and other weight-related feline ailments.</p>
				</section>
				<section class="page-content p-2" style="height:50%;">
					<h2 class="text-center">Seven Years Old and More</h2>
					<p>Much like many living organisms, the body begins to deteriorate and experience a lot of changes. Cats at this age should eat less fats and calories and more quality proteins. This means when you are purchasing packaged foods for your cat, look for food that states a particular protein (such as "salmon") and <strong>not</strong> just a category (such as fish). This usually means they are byproducts, or combinations, of lesser quality proteins.</p>
				</section>
			</div>
		</div>
	</div>







	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>