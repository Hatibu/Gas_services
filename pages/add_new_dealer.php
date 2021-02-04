<?php 

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/add_applicant_dealer_fun.php");

	if(isset($_GET["id"])){
		$Id = $_GET["id"];
		//echo $Id;
		$sql = " SELECT * FROM new_applicant_tbl WHERE id ='".$Id."'";
		$result = mysqli_query($connection,$sql);
		$num = mysqli_num_rows($result);
?>
	<div class='col-md-12'>
	  <div id="get_message">
	    <!-- get message or alerts-->
	   </div>
	</div>
<?php
		if ($num>0){
	?>

	<div class='col-md-2'></div>
		<div class='col-md-8'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<p>New Applicant Details</p>
				</div>
				<div class='panel-body'>
					<div class='table-responsive'>
						<table class='table table-hover'>
							<form method="post">
	<?php		
			while($row=mysqli_fetch_array($result)) {
				
			echo "
			<input type='hidden' class='form-control' value='".$row["id"]."' name='id_new' readonly/>
			<input type='hidden' class='form-control' value='".$row["gender"]."' name='gender' readonly/>
			<input type='hidden' class='form-control' value='".$row["nationality"]."' name='nati' readonly/>
			<input type='hidden' class='form-control' value='".$row["age"]."' name='age' readonly/>
			<tr>
				<th width=''>First Name</th>
				<td name='first_name'>
					<input type='text' class='form-control' value='".$row["first_name"]."' name='first_name' readonly/>
				</td>
			</tr>

			<tr>	
				<th width=''>Middle Name</th>
				<td name='last_name'>
					<input type='text' class='form-control' value='".$row["middle_name"]."' name='m_name'  readonly/>
				</td>
			</tr>

			<tr>	
				<th width=''>Last Name</th>
				<td name='last_name'>
					<input type='text' class='form-control' value='".$row["last_name"]."' name='lname'  readonly/>
				</td>
			</tr>
				
			<tr>
				<th width=''>Location</th>
				<td name='location'>
					<input type='text' class='form-control' value='".$row["location"]."' name='location' readonly />
				</td>
			</tr>
				
			<tr>
				<th width=''>Experience</th>
				<td>
					<input type='text' class='form-control' value='".$row["business_expe"]."(years)' id='Experience' readonly />
				</td>
			</tr>

			<tr>
				<th width=''>Capital</th>
				<td>
					<input type='text' class='form-control' value='".$row["capital"]."' name='capital' readonly />
				</td>
			</tr>

			<tr>
				<th width=''>Phone Number</th>
				<td>
					<input type='text' class='form-control' value='".$row["p_number"]."' name='phone' readonly />
				</td>
			</tr>

			<tr>
				<th width=''>Email</th>
				<td>
					<input type='text' class='form-control' value='".$row["email"]."' name='email' readonly />
				</td>
			</tr>

			";
			}
	?>
			<tr>
				<th></th>
				<td>
					<input type="submit" value="Add Dealer" class='btn btn-primary' name="submit" >
				</td>
			</tr>

		</form>
				</table>
			</div>
		</div>
	</div>	
	<div class='col-md-2'></div>
	
	<?php			
			
		}else{
			echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> New Applicant Details Is Not Found......!</b>
			</div>
		";
		}
}
	
?>