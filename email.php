<?php

// php email settings

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$myEmail = $_POST['emailFrom'];
	$clientEmail = $_POST['emailTo'];
	$emailTitle = $_POST['title'];
	$emailMessage = $_POST['message'];

	if (!$name || !$myEmail || !$clientEmail || !$emailTitle || !$emailMessage) {

		$errorMsg = '<div class="alert alert-danger"><h1>Was an error! Please fill all forms</h1><br /><button class="btn btn-danger btn-lg" onclick="history.back()">Back</button><div>';
		echo($errorMsg);
		exit();
	}

	// create the message

	// add recipient email
	$to = $clientEmail;

	// set the subject
	$subject = "$name send you a message via contact form";


	// construct the message 
	$msg  = "Name: $name\r\n";
	$msg .= "Email: $myEmail\r\n";
	$msg .= "Subject: $emailTitle\r\n";
	$msg .= "Message:\r\n$emailMessage";
	$msg = wordwrap($msg, 72);

	// set the headers
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: " . $name . " <" . $myEmail . ">\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n\r\n";


	mail($to, $subject, $msg, $headers);

	$success = '<div class="alert alert-success"><h1>Thanks for contacting</h1><br /><button class="btn btn-success btn-lg" onclick="history.back()">Back</button>';
	echo $success;
	exit;
}

?>


<div class="container">

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1 class="title">CONTACT FORM</h1>

			<form method="post" action="" class="form-horizontal" name="emailSender">
				 

				<!-- YOUR NAME -->
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">NAME:</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class="form-control" id="name" placeholder="YOUR NAME:">
				    </div>
				  </div>


				 <!-- FROM FORM -->
				  <div class="form-group">
				    <label for="emailFrom" class="col-sm-2 control-label">EMAIL:</label>
				    <div class="col-sm-10">
				      <input type="email" name="emailFrom" class="form-control" id="emailFrom" placeholder="YOUR EMAIL:">
				    </div>
				  </div>


				<!-- TO FORM -->
				  <div class="form-group">
				    <label for="emailTo" class="col-sm-2 control-label">TO:</label>
				    <div class="col-sm-10">
				      <input type="email" name="emailTo" class="form-control" id="emailTo" placeholder="TO:">
				    </div>
				  </div>
				 

				 <!-- TITLE FORM -->
				 <div class="form-group">
				    <label for="title" class="col-sm-2 control-label">TITLE:</label>
				    <div class="col-sm-10">
				      <input type="textarea" name="title" class="form-control" id="title" placeholder="TITLE:">
				    </div>
				  </div>



				 <!-- MESSAGE FORM -->
				 <div class="form-group">
				    <label for="message" class="col-sm-2 control-label">MESSAGE:</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="message" id="message" placeholder="MESSAGE:" rows="5"></textarea>
				    </div>
				  </div>



				 <!-- SEND BUTTON -->
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <input type="submit" name="submit" class="btn btn-success btn-lg" value="SEND">
				    </div>
				  </div>
			</form>

	</div>
</div>

</div>