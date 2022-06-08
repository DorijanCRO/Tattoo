<?php include ('header.php'); ?>
<!------------------ SLIDER JS ------------------>
<script type="text/javascript">
$(window).load(function() {
  $('.divSlider').flexslider({
    animation: "slide",
    controlNav: false,
    slideshowSpeed: 4000,
  });
});
</script>
<!------------------ SLIDER ------------------>
<div id="divSliderWrap">
	<div class="divSlider">
		<ul class="slides">
			<li>
				<img src="images/slika1.jpg">
				<div class="divTextImg">
					<h2>Painless & safe Tattoing</h2>
					<p>Ipsum lorem dolor sit amet, consectetur adipisicing elit.</p>
					<p>Blanditiis non tenetur modi natus repellat.</p>
				</div>
			</li>
			<li>
				<img src="images/slika2.jpg">
				<div class="divTextImg">
					<h2>Professional Tattoists</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Natus repellat blanditiis non tenetur modi.</p>
				</div>
			</li>
		</ul>
	</div>
	<div style="clear: both;"></div>
</div>

<!------------------ SECTION 1 - ABOUT STUDIO ------------------>
<div id="divAboutStudioWrap">
	<div id="divAboutStudio">
		<div id="divTextStudio">
			<p> Welcome to name Tattoo Studio</p>
			<h1>About <span>Studio</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque quaerat modi accusamus, deserunt quos iusto beatae facilis expedita quisquam molestiae harum distinctio, vero mollitia, corporis repellat.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus repellat blanditiis non tenetur modi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus repellat blanditiis non tenetur modi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque quaerat modi accusamus, deserunt quos iusto beatae facilis expedita quisquam molestiae harum distinctio, vero mollitia, corporis repellat.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque quaerat modi accusamus, deserunt quos iusto beatae facilis expedita quisquam molestiae harum distinctio, vero mollitia, corporis repellat.</p>
		</div>
		<div id="divImgStudio">
			<img src="images/slika3.png">
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
<!------------------ SECTION 2 - MAKE APPOINTMENT ------------------>
<div id="divAppointmentWrap">
	<div id="divAppointment">
		<div id="divImgAppointment" class="gridCol3">
			<img src="images/slika4.png">
		</div>
		<div id="divHeaderAppointment" class="gridCol3">
			<h1>Make an Appointment</h1>
		</div>
		<div id="divBtnAppointment" class="gridCol3 last">
			<a href="contact.php">Book Appointment Now</a>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
<!------------------ SECTION 3 - WHY CHOOSE US ------------------>
<div id="divChooseUsWrap">
	<div id="divChooseUs">
		<div id="divChooseUsTxt">
			<h2>Why choose us</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
			nibh euismod tincidunt ut laoreet dolore magna.</p>
		</div>
		<div style="clear: both;"></div>
		<div id="divChooseUsBox">
			<div class="divChooseUsCol4">
				<div class="feature_img"><i class="icofont-businessman"></i></div>
				<h3>Expert artists</h3>
				<p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
			</div>
				<div class="divChooseUsCol4">
				<div class="feature_img"><i class="icofont-gears"></i></div>
				<h3>Painless work</h3>
				<p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
			</div>
				<div class="divChooseUsCol4">
				<div class="feature_img"><i class="icofont-money-bag"></i></div>
				<h3>Affordable cost</h3>
				<p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
			</div>
				<div class="divChooseUsCol4 last">
				<div class="feature_img"><i class="icofont-heart-beat-alt"></i></div>
				<h3>Cleanliness</h3>
				<p>Lorem ipsum dolors item amet coti adipisicing elt, sed do eimd at.</p>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
</div>
<!------------------ SECTION 4 - WHAT WE DO ------------------>
<div id="divWhatWeDoWrap">
	<div id="divWhatWeDo">
		<div id="divWhatWeDoHeader">
			<h2>What we do</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
			nibh euismod tincidunt ut laoreet dolore magna.</p>
		</div>
		<div style="clear: both;"></div>
		<div id="divWhatWeDoBox">
			<div id="divWhatWeDoLeft">
				<div class="text">
				<h3>Tattooing</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="text">
				<h3>Piercing</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<h3>Tattoo cover up</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div style="clear: both;"></div>
			<div id="divWhatWeDoImg">
				<img src="images/slika5.png">
			</div>
			<div style="clear: both;"></div>
			<div id="divWhatWeDoRight">
				<div class="text">
				<h3>Tattoo design</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="text">
				<h3>Permanent Makeup</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<h3>Laser Removal</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div style="clear: both;"></div>
		</div>
			<div id="divWhatWeDoBottom" class="divBtn">
				<a href="services.php">All services</a>
			</div>
	</div>
</div>
<!------------------ SECTION 5 - TATTOO ARTISTS ------------------>
<div id="divArtistsWrap">
	<div id="divArtists">
		<div id="divArtistsHeader">
			<h2>Tattoo Artists</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
			nibh euismod tincidunt ut laoreet dolore magna.</p>
		</div>
		<div id="divArtistsBox">
			<div class="gridCol3">
				<div class="divBackground">
					<div class="divArtistsMain">
						<div class="divArtistsImg"><img src="images/slika6.jpg"></div>
						<h3>Charlie Marsh</h3>
						<ul class="divSocialIcon">
							<li><a href="#"><i class="icofont-facebook"></i></a></li>
							<li><a href="#"><i class="icofont-twitter"></i></a></li>
							<li><a href="#"><i class="icofont-linkedin"></i></a></li>
							<li><a href="#"><i class="icofont-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="gridCol3">
				<div class="divBackground">
					<div class="divArtistsMain">
						<div class="divArtistsImg"><img src="images/slika7.jpg"></div>
						<h3>Kimberly</h3>
						<ul class="divSocialIcon">
							<li><a href="#"><i class="icofont-facebook"></i></a></li>
							<li><a href="#"><i class="icofont-twitter"></i></a></li>
							<li><a href="#"><i class="icofont-linkedin"></i></a></li>
							<li><a href="#"><i class="icofont-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="gridCol3 last">
				<div class="divBackground">
					<div class="divArtistsMain">
						<div class="divArtistsImg"><img src="images/slika8.jpg"></div>
						<h3>Payton Stewart</h3>
						<ul class="divSocialIcon">
							<li><a href="#"><i class="icofont-facebook"></i></a></li>
							<li><a href="#"><i class="icofont-twitter"></i></a></li>
							<li><a href="#"><i class="icofont-linkedin"></i></a></li>
							<li><a href="#"><i class="icofont-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div id="divWhatWeDoBottom" class="divBtn">
				<a href="artists.php">All artists</a>
			</div>
	</div>
</div>
<!------------------ SECTION 6 - TESTIMONIALS ------------------>
<div id="divTestimonialsWrap">
	<div id="divTestimonials">
		<div id="divTestimonialsHeader">
			<h2>Testimonials</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
			nibh euismod tincidunt ut laoreet dolore magna.</p>
		</div>
			<div id="divTestimonialsBox">
				<div class="gridCol3">
					<div class="divBackground">
						<div class="divTestimonialsMain">
							<div class="divTestimonialsImgH3">
							<img src="images/slika9.jpg">
							<h3>Lionel Todd</h3>
							</div>
							<div class="divTestimonialsText">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
							</div>
							<div class="divTestimonialsIcon">
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="gridCol3">
					<div class="divBackground">
						<div class="divTestimonialsMain">
							<div class="divTestimonialsImgH3">
							<img src="images/slika10.jpg">
							<h3>Richard Mason</h3>
							</div>
							<div class="divTestimonialsText">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
							</div>
							<div class="divTestimonialsIcon">
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="gridCol3 last">
					<div class="divBackground">
						<div class="divTestimonialsMain">
							<div class="divTestimonialsImgH3">
							<img src="images/slika11.jpg">
							<h3>Nina West</h3>
							</div>
							<div class="divTestimonialsText">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
							</div>
							<div class="divTestimonialsIcon">
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
								<i class="icofont-star"></i>
							</div>
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>