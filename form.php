
<?php
	define('TITLE', 'CONTACT FORM');
	include 'email.php';


?>

<div class="container">

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1 class="title"><?= TITLE ?></h1>

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
				      <input type="submit" name="submit" class="btn btn-success btn-lg" value="TRIMITE">
				    </div>
				  </div>
			</form>

	</div>
</div>

</div>