<?php $pageTitle="<title>Contact Felicia Noelle</title>"?>
<?php include("../head.php") ;?>
<div class="container">
	<div class="contact">	
		<form action="/webformmailer.php" method="post">
			<h2>I would love to hear from you!</h2>
			<h4>Fill out the form below and we can get started on capturing your special moments!</h4>
			<label class="top-input required">First Name:</label>
			<input type="text"  id="first_name" name="first_name" placeholder="John" required>
			<label class="top-input required">Last Name:</label>
			<input type="text"  id="last_name" name="last_name" placeholder="Doe" required>
			<label class="top-input required">E-mail:</label>
			<input type="email"  id="email_addr" name="email" placeholder="johndoe@me.com" required><br><br>
			<label class="required">Occassion:</label><br><br>
			
			<input type="radio" name="job" value="Newborn"><label>Newborn</label><br>
			
			<input type="radio" name="job" value="Senior Pictures"><label>Senior Pictures</label><br>
			
			<input type="radio" name="job" value="Weddings"><label>Weddings</label><br>
			
			<input type="radio" name="job" value="Couples"><label>Couples</label><br><br>
			<label>Questions or Details:</label>
			<textarea name="details" placeholder="Tell me more about what you would like!" cols="10" rows="50"></textarea>
			<input type="submit" id="submit" name="submit" value="submit">
			<input type="hidden" name="form_order" value="alpha"><input type="hidden" name="form_delivery" value="daily_digest"><input type="hidden" name="form_format" value="text">
			<h4 class="required">Required</h4>
		</form>
	</div>
	<div class="how">
		<h2>How does it work?</h2>
		<p>When you fill out this form, I will recieve an email with all of the fields you supplied in the form.<br> At <b>no time</b> will your personal information be shared are sold.<br> Once I recieve the email with all your information I will respond to you within 3-5 days.<br> From there we can start planning your event and you can ask me any questions you might have about this process!</p>
	</div>
	<div class="clear-fix"></div>
</div>
<?php include ("../footer.php"); ?>
</body>
</html>