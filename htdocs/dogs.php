<?php 
	$page_title = 'Pet Care for Dogs';
	include('includes/header.html');
?> 
	<!-- Begin page content -->


	<div class="d-flex justify-content-center">
		<h1 class="display-3">Pet Care for Dogs</h1>
	</div>
	<hr/>

	<div class="d-flex justify-content-center">
		<section class="d-lg-flex page-content mb-2 p-1 col-lg-9">
			<div class="row">
				<picture class="col-lg-5">
					<source media="(min-width: 600px)" srcset="../assets/images/black-spaniel-med.jpg">
					<img class="img-fluid" src="../assets/images/black-spaniel-sm.jpg" alt="a black spaniel lying down" style="height:100%;">
				</picture>
				<div class="col-lg-6" style="align-self:center;">
					<p class="p-1 content"><strong style="font-size:1.2em;">The domestic dog</strong> is an extremely social animal and offers a diverse variety of choices as there are well over 300 breeds recognized by the World Canine Organization. Adopting a dog offers mutual benefits between dog and owner. Many studies cite the social benefits of having a companion as well as the reduced feelings of loneliness from adopting a dog. Studies even show medical indicators such as reduced blood pressure and improved lipid profiles. If you have a dog, it is important to make sure that you care for your dog; be mindful of what you feed your dog and provide enough opportunities for exercise. In this page, you will find more information about how to care for your pets throughout the various stages of their lives.</p>
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
		<div class="row col-xs-12 col-lg-9"> 
			<h2 class="display-3 text-center">Care and Diet</h2>
			<div class="col-xs-12 col-md-6 mb-2 ps-lg-0">
				<section class="page-content p-2" style="height:100%;">
					<h2 class="text-center">Diet and Exercise</h2>
					<p>Throughout dogs’ lifespans, they should generally be fed fewer meals as they mature. Puppies should be nursed the first two months, then introduced to three meals per day when they are about three to six months years old. Their food intake should be reduced to two meals per day when they are six months to one year old and finally reduced to one meal after they reach one year old. And a dog’s typical body mass is composed of somewhere between 60 and 70 percent water. The <a href="https://www.aspca.org">ASPCA</a> says just a 10 percent decrease in body water can cause illness, and a 15 percent loss can cause death, so make sure you keep your pooch hydrated!</p>
					<p>Much like humans, dogs need to have a healthy level of activity to keep their organs healthy, as well as sun and fresh air. The minimum recommended time for exercise varies greatly with breed and size differences, but generally a range of 30–120 minutes of exercise is recommended per day! Can you imagine exercising two hours per day? OK, I know that wouldn't bother some of you reading this. But the thought of it to me makes me cringe! And by the way, exercising your dog does not mean you are being challenged to a push-up contest. Brisk walks are OK too! You can also choose from a variety of toys to encourage physical activity; just be sure they are age appropriate and do not pose a choking hazard. Pay careful attention to toys that require supervision.</p>
				</section>
			</div>
			<div class="col-xs-12 col-md-6 mb-2 pe-lg-0">
				<section class="page-content mb-2 p-2">
					<h2 class="text-center">Grooming & Handling</h2>
					<p>Keeping your furry family member clean is important to its health. So be sure to brush frequently to reduce the amount of shedding and prevent matted and tangled fur that can prove to be extremely difficult to remove. Check for insects such as ticks and fleas, especially after visiting heavily wooded areas. Bathing is not only important to your dog’s health but can be an exercise depending on how strong willed the dog is. Rinse all of the soap out, as any residual soap can result in a rash. Be sure the soap is formulated for your puppy or dog, since harsh soaps can cause allergic reactions. And as always, be careful how you handle your loved one. No matter the size of your dog, you need to be cautious as you carry your canine. If you have a small dog, then cradle the pup with one hand under the chest and the forearm supporting the back half. If it is a large dog, reach under the belly with both your arms perpendicular to the dog, and use each arm to support the chest and rear as you lift.</p>
				</section>
				<section class="page-content p-2">
					<h2 class="text-center">Vaccinations & Medications</h2>
					<p>You should always consult with your veterinarian, but there is a core set of vaccines that are typically recommended. Vaccines that reduce the exposure risk to things such as hepatitis, rabies, and parvovirus. Others may be determined by your vet depending on the environment in which the dog resides. Some of these include Bordetella bronchiseptica, Borrelia burgdorferi, and Leptospira bacteria.</p>
				</section>
			</div>
		</div>
	</div>








	<!-- end page content --> 
<?php
	include('includes/footer.html'); 	
?>