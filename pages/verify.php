<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}

$dealer_id = $_SESSION["username"];
	
require ("database/connection.php");
require ("database/connection2.php");
require ("ajax_function/token_fun.php");
require ("ajax_function/generate_token.php");

?>

<!-- starting add acount-->

<div class='col-md-12'>
	<div id="get_message">
	    <!-- get message or alerts-->
	</div>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Verify Your Phone Number</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
		<div class="panel-body">
				<!-- starting form-->
			<form method="post">	
				<input type="hidden" value="<?php echo $_SESSION["username"];?>" name="dealer_id">
				<div>
					<p>
					An SMS has now been sent to <?php echo $phone_number;?> with the verification</p>
					<p> code. Please check your phone and enter code in field below </p>
				</div>
			
				<div id = "status" style="color:red;">
					<div class="col-md-12">

					</div>
				</div>
			

			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label>Enter The Code</label>
						<input type="text" class="form-control" name="user_token" value="" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value= "Next" name="submit">
					</div>
				</div>	
				<div class="col-md-6">
					<div class="form-group">
						<a href="index.php?p=view" class="btn btn-primary">Cancel</a>
					</div>
				</div>	
			</div>	
		</form>	
				<!-- ending form-->
		</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-3"></div>
<!-- ending add acount-->

