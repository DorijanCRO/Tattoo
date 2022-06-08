<?php include ('header.php'); ?>
<style><?php include ('css/style.css'); ?></style>
<!------------------ SECTION 1 - INFO ------------------>
<div id="divAboutUsWrap">
	<div id="divAboutUs">
		<div id="divAboutUsPageCol1">
			<h3>Contact</h3>
		</div>
		<div id="divAboutUsPageCol2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><i class="icofont-rounded-right"></i></li>
				<span><li>Contact</li></span>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
<!------------------ SECTION 2 - CONTACT FORMA ------------------>
<div id="divContactWrap">
	<div id="divContact">
		<div id="divContactHeader">
			<h3>Get in Touch</h3>
		</div>
		<form method="post" action="connect.php">
		<div class="divSingleInput">
			<input type="text" name="name" id="name" placeholder="Full Name" required>
		</div>
		<div class="divSingleInput">
			<input type="text" name="email" id="email" placeholder="E- mail" required>
		</div>
		<div class="divSingleInput">
			<input type="text" name="subject" id="subject" placeholder="Subject"required>
		</div>
		<div class="divSingleInput">
			<input type="tel" name="phone" id="phone" placeholder="Phone"required>
		</div>
		<div class="divSingleInput">
			<textarea class="formControl" name="message" placeholder="Message"required></textarea>
		</div>
		<div style="clear: both;"></div>
		<div class="divSendButton">
			<button type="submit">Send</button>
		</div>
		</form>
	</div>
</div>
<?php include ('footer.php'); ?>