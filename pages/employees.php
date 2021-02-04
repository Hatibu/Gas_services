<?php

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/employee_register_fun.php");

?>
		<!-- start row -->
		<div class="col-md-1">
	
		</div>
		<div class="col-md-10">
			<!-- start panel -->
			<div class="panel panel-default">

			<!-- panel-heading -->
			<div class="panel-heading" id="panel">
				<p class="centered">Employees Registration</p>
			</div>
			<!-- ending panel-heading -->

			<!-- start form -->
			<form method="post" enctype="multipart/form-data" onsubmit="return employee_fun();" >
				<!-- start panel body -->
				<div class="panel-body">
				<div class="col-md-12">
					<!-- start first row -->
					<div class="col-md-12">
						<h4>Employee Details</h4>
                        <div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="firstname" name="fname" onblur="first();">
								<p id="first_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" id="middlename" name="mname" onblur="middle();">
								<p id="middle_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lname" onblur="last();">
								<p id="last_error" style="color: red;"></p>
							</div>
						</div>
					</div>
					<!-- ending first row -->

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" required>
									<option value="">choose gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
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
						</div>
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
				</div>
			<!-- ending first row -->
                <div class="col-md-12">    
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone" id="phonenumber" onblur="phone_number();">
								<p id="phone_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" id="email" onblur="email_valida();">
								<p id="email_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Position</label>
								<input type="text" class="form-control" name="posit" id="Position" onblur="position();">
								<p id="position_error" style="color: red;"></p>
							</div>
						</div>
					</div>
				</div>	
			<!-- ending first row -->
                     

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

