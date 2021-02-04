<?php

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/update_dealerfun.php");
require ("database/connection.php");

// loading dealers details ..................

if (isset($_GET["id"])){

$dealer_id = $_GET["id"];

//echo $dealer_id;

$sql = "SELECT * FROM dealers_tbl WHERE dealer_id = '".$dealer_id."'";

$result = mysqli_query($connection,$sql);

$num = mysqli_num_rows($result);

if($num >0 ){

	while ($row = mysqli_fetch_array($result)) {
	
?>
		<!-- start row -->
		<div class="col-md-1">
	
		</div>
		<div class="col-md-10">
			<!-- start panel -->
			<div class="panel panel-default">

			<!-- panel-heading -->
			<div class="panel-heading">
				<p class="centered">Update Dealer Registration Details</p>
			</div>
			<!-- ending panel-heading -->

			<!-- start form -->
			<form method="post" enctype="multipart/form-data">
				<!-- start panel body -->
				<div class="panel-body">
				<div class="col-md-12">
					<!-- loading it license -->
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4"></div>
							<div class="col-md-1"></div>
							<div class="col-md-3">
							<?php
								echo "
                                  	<image src='assets/license/".$row["image"]."' width='150px'height='100px' />
                                  ";
							?>
							</div>
						</div>
						<!-- loading it license -->

					<!-- start first row -->
					<div class="col-md-12">
						<h4>Personal Details</h4>
                       <div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" value="<?php echo $row["first_name"]?>" id="firstname" name="fname" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" value="<?php echo $row["middle_name"]?>" id="middlename" name="mname" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" value="<?php echo $row["last_name"]?>" id="lastname" name="lname" required>	
							</div>
						</div>
					</div>
					<!-- ending first row -->

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<input type="text" class="form-control" value="<?php echo $row["gender"]?>" id="middlename" name="gender" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Age</label>
								<input type="text" class="form-control" value="<?php echo $row["age"]?>" id="middlename" name="age" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Nationality</label>
								<input type="text" class="form-control" value="<?php echo $row["nationality"]?>" id="lastname" name="nati"
								 required>
								
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
								<input type="text" class="form-control" value="<?php echo $row["location"]?>" id="lastname" name="location" required>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" value="<?php echo $row["p_number"]?>" id="phonenumber" name="pnumber" required>
								
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>E-mail</label>
								<input type="text" class="form-control" value="<?php echo $row["email"]?>" id="phonenumber" name="email" required>
								
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Business License</label>
								<input type="file" class="form-control" name="image" required>
							</div>
							<input type="hidden" class="form-control" value="<?php echo $row["dealer_id"]?>"  name="dealerId">
						</div>
					</div>
				</div>
					<!-- ending second row -->
                     

					<!-- start button row -->
					<div class="row">
						<div class="col-md-5"></div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group" >
									<input type="submit" name="submit" class="btn btn-primary" value="Update">
								</div>
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

<?php

		}
	}
}	

?>
