<?php 
  $pageTitle = 'Contact Form';
  include 'inc/top-part.inc.php';
?>

<?php 
include "inc/nav.inc";
?>

<script type="text/javascript" src="js/validate.js"></script>

	<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());">

		<div class="box">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
		</div>
	

		<div class="box">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email">
		</div>
	

		<div class="box">
			<label for="phone">Phone:</label>
			<input type="tel" name="phone" id="phone">
		</div>

		<div class="box">
			<br>
			<label for="message">Message:</label>
			<br>
			<textarea name="message" id="message"></textarea>
		</div>

		<div>
			<br>
			<input type="submit" value="Send">
		</div>

		<div>
			<p>Or Go <a href=".">Back to the Index</a></p>	
		</div>

	</form>	
		

<?php
include 'inc/footer.inc';
?>