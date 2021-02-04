<?php
require ("ajax_function/change_password.php");
?>
<!-- starting add acount-->
<div class="col-md-2"></div>
<div class="col-md-8">
	<!-- starting off panel-->
	<div class="panel panel-default">
		
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Change Password</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="post" onsubmit="return validating();">
					<!-- first row -->
			<div class="col-md-12">
				<div id="get_message">
					
				</div>
			</div>	
			<input type="hidden" value="<?php echo $_SESSION['username'];?>" name="dealer_id">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Old Password</label>
								<input type="password" class="form-control" name="old" id="old" required/>
							</div>
							<p id="old_message" class="text-danger" ></p>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>New Password</label>
								<input type="password" class="form-control" name="new" onblur="passwordvalidation();" id="new_password" required />
								<p id="new_error" class="text-danger" ></p>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Retype Password</label>
								<input type="password" class="form-control" name="retype" id="Retype_Password" onblur="form_password();" required/>
							</div>
							<p id="retype_message" class="text-danger" ></p>
						</div>
					</div>	
					
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="submit" value="Change" />
							</div>
						</div>
						<div class="col-md-5"></div>
					</div>
					
				</form>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-2"></div>
<!-- ending add acount-->
