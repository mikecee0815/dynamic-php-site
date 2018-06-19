<?php 
	$firstName_err ="";
	$lastName_err ="";
	$email_err ="";

	if (isset($_POST['submit'])) {
		
		if (empty($_POST['firstName'])) {
				$firstName_err =  "* Name is required.";
		} else {
			$firstName = sanitizeInput($_POST['firstName']);
			if (!preg_match('/^[a-zA-Z .]*$/', $firstName)) {
			$firstName_err = "* only letters please.";
		}
		}
		if (empty($_POST['lastName'])) {
				$lastName_err = "* last Name is required";
		} else {
			$lastName = sanitizeInput($_POST['lastName']);
			if (!preg_match('/^[a-zA-Z .]*$/', $lastName)) {
			$lastName_err = "* only letters please.";
		}
		}
		if (empty($_POST['email'])) {
				$email_err  = "* Email is required";
		} else {
			$email = sanitizeInput($_POST['email']);
			if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{2,}@[a-zA-Z]{2,}.[a-zA-Z]{2,}[a-z]$/', $email)) {
			$email_err = "* Invalid email format";
		}
		}
	} 
		function sanitizeInput ($input) {
				$input = trim($input);
				$input = stripslashes($input);
				$input = htmlspecialchars($input);
				return $input;
		}
 ?>
<section class="mail-list-form">
	<div class="form-wrap">
		<h1 class= "card-heading"><?php echo $pageName ." Form"; ?></h1>
		 <form  method="post"> 
			<input class="form-item" type="text" name ="firstName" placeholder="First Name"><span class="form_err"><?php echo $firstName_err; ?></span> <br>
			<input class="form-item" type="text" name ="lastName" placeholder="Last Name"><span class="form_err"><?php echo $lastName_err; ?></span><br>
			<input class="form-item" type="text" name ="email" placeholder="Your Email"><span class="form_err"><?php echo $email_err; ?></span><br>
			<input class="form-item button" type="submit" name="submit">
		</form>
	</div>	
</section>
