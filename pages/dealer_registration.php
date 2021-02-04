<?php
if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/dealer_registerfun.php");

?>
		<!-- start row -->
		<div class="col-md-1">
	
		</div>
		<div class="col-md-10">
			<!-- start panel -->
			<div class="panel panel-default">

			<!-- panel-heading -->
			<div class="panel-heading" id="panel">
				<p class="centered">Dealer Registration</p>
			</div>
			<!-- ending panel-heading -->

			<!-- start form -->
			<form method="post" enctype="multipart/form-data" onsubmit="return dealer_fun();">
				<!-- start panel body -->
				<div class="panel-body">
				<div class="col-md-12">
					<!-- start first row -->
					<div class="col-md-12">
						<h4>Personal Details</h4>
                        <div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="firstname" name="fname" onblur="first_name();">
								<p id="first_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" id="middlename" name="mname" onblur="middle_name();">
								<p id="middle_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lname"
								onblur="last_name();">
								<p id="last_error" style="color: red;"></p>
							</div>
						</div>
					</div>
					<!-- ending first row -->

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" required="">
									<option value="">choose gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
								<p id="gender_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Age</label>
								<select class="form-control" name="age" required="">
								<?php
									for($a=18;$a<70;$a++){
									echo "<option value=\"$a\">$a</option>";
									}
								?>
								</select>
							</div>
						</div>s
						<div class="col-md-4">
							<div class="form-group">
								<label>Nationality</label>
								<select name="nati" required="" class="form-control">
									<option value="">Choose Nationality</option>
									<option value="Tanzania">Tanzania</option>
									<option value="kenya">kenya</option>
									<option value="Uganda">Uganda</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Burundi">Burundi</option>
									<option value="DRC congo">DRC congo</option>
								</select>
							</div>
						</div>
					</div>
					<!-- ending first row -->

					</div>
					
                    <div class="col-md-12">
                    	<h4> Business Details</h4>
					<!-- start second row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Location</label>
								<input type="text" class="form-control" id="Location" name="location"
								onblur="Location_name();">
								<p id="lotion_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" id="phonenumber" name="pnumber" onblur="phone_number();">
								<p id="phone_error" style="color: red;"></p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>E-mail</label>
								<input type="text" class="form-control" id="email" name="email" onblur="email_validation();">
								<p id="email_error" style="color: red;"></p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Business License</label>
								<input type="file" class="form-control" name="image" onblur="phone_number();">
								<p id="phone_error" style="color: red;"></p>
							</div>
						</div>
					</div>
				</div>
					<!-- ending second row -->
                     

					<!-- start button row -->
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<div class="form-group" >
								<input type="submit" name="submit" class="btn btn-primary" value="Register">
							</div>
						</div>
						<div class="col-md-5"></div>
					</div>
					<!-- ending button row -->


				</div>
				</div>
				<!-- ending panelbody -->
			</form>
			<!-- ending form -->	
			</div>
			<!-- ending panel -->
		</div>
		<div class="col-md-1"></div>
		<!-- ending row -->

