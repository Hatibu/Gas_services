<?php

if (isset($_POST["not_id"])) {
	
	$Id = $_POST["not_id"];
	$from= $_POST["user_level"];
	$to=$_POST["From"];
	$username=$_POST["username"];

?>
<div class="col-md-12" id="get_message"></div>
<!-- starting -->
<div class="col-md-2"></div>
<div class="col-md-8">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Reply Message</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<fo>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>To</label>
								<input type="text" class="form-control" id="To" readonly="" value="<?php echo $to;?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" rows="5" cols="40" placeholder="write Message you want to reply" id="message" required></textarea>
								<input type="hidden" id="notfi_id" value="<?php echo $Id;?>">
								<input type="hidden" id="From" value="<?php echo $from;?>">
								<input type="hidden" id="username" value="<?php echo $username;?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<input type="submit" class=" btn btn-primary" value="REPLY" onclick="reply_fu();">
							</div>
						</div>
					</div>
				</f>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-2"></div>
<!-- ending -->



<?php
}

?>