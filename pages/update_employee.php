<?php

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/update_employee_fun.php");

if(isset($_GET["id"])){

	$ID_employee=$_GET["id"];

	$sql = "SELECT * FROM employees_tbl WHERE ID_employee = '".$ID_employee."' ";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	while($row = mysqli_fetch_array($result)){
	$ID_employee = $row["ID_employee"];	
    $fname = $row["first_name"];
	$mname = $row["middle_name"];
	$lname = $row["last_name"];
	$gender = $row["gender"];
	$age = $row["age"];
	$nati = $row["nationality"];
	$pnumber = $row["p_number"];
	$email = $row["email"];
	$posit = $row["position"];
	}
}
?>
		<!-- start row -->
		<div class="col-md-1">
	
		</div>
		<div class="col-md-10">
			<!-- start panel -->
			<div class="panel panel-default">

			<!-- panel-heading -->
			<div class="panel-heading" id="panel">
				<p class="centered">Update Employees</p>
			</div>
			<!-- ending panel-heading -->

			<!-- start form -->
			<form method="post" enctype="multipart/form-data" >
				<!-- start panel body -->
				<div class="panel-body">
				<div class="col-md-12">
					<!-- start first row -->
					<div class="col-md-12">
						<h4>Employee Details</h4>
                        <div class="row">
						<div class="col-md-4">
							<input type="hidden" name="ID_employee" value="<?php echo $ID_employee ?>">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="firstname" name="fname" value="<?php echo $fname; ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" id="middlename" name="mname" value="<?php echo $mname ?>"  required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lname" value="<?php echo 
								$lname
								 ?>"  required>
							</div>
						</div>
					</div>
					<!-- ending first row -->

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" required>
								<option value="<?php echo $gender?>"><?php echo $gender?></option>
								<option value="M">Male</option>
								<option value="F">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Age</label>
								<input type="text" class="form-control" id="middlename" name="age" value="<?php echo$age?>"  required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Nationality</label>
								<input type="text" class="form-control" id="lastname" name="nati" value="<?php echo $nati ?>"  required>
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
								<input type="text" class="form-control" name="phone" value="<?php echo $pnumber ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="<?php echo $email ?>"  required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Position</label>
								<input type="text" class="form-control" name="posit" value="<?php echo $posit ?>"  required>
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
								<input type="submit" name="submit" class="btn btn-primary" value="Update">
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

