<?php

if($_SESSION["level"]!= "StoreKeeper"){
	header('location:index.php?p=error');
}
require ("ajax_function/update_storekeeper_fun.php");

	$store_keeper_id = $_SESSION["username"];
	
	$sql = " SELECT * FROM employees_tbl WHERE ID_employee ='".$store_keeper_id."'";

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
?>
<div class='col-md-12'>
	  <div id="get_message">
	    <!-- get message or alerts-->
	   </div>
</div>

<div class='col-md-2'></div>
	<div class='col-md-8'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Update Your Details</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<form method="post">
<?php	
	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){

			echo "
			<input type='hidden' class='form-control' value='".$row["ID_employee"]."' name='employee_id' />
			<tr>
				<th width=''>First Name</th>
				<td>
				<input type='text' class='form-control' value='".$row["first_name"]."' name='fname' />
				</td>
			</tr>
			<tr>	
				<th width=''>Middle Name</th>

				<td>
				<input type='text' class='form-control' value='".$row["middle_name"]."' name='m_name' />
				</td>
			</tr>
			<tr>	
				<th width=''>Last Name</th>
				<td>
				<input type='text' class='form-control' value='".$row["last_name"]."' name='lname' />
				</td>
			</tr>
				
			<tr>	
				<th width=''>Nationality</th>
				<td>
				<input type='text' class='form-control' value='".$row["nationality"]."' name='nati' />
				</td>
			</tr>	
			
			<tr>	
				<th width=''>Phone Number</th>
				<td>
				<input type='text' class='form-control' value='".$row["p_number"]."' name='phone' />
				</td>
			</tr>
			<tr>	
				<th width=''>Email</th>
				<td>
				<input type='text' class='form-control' value='".$row["email"]."' name='email' />
				</td>
			</tr>	

			";
		}
	}

?>

			<tr>
				<th></th>
				<td>
				<input type="submit" name="submit" class='btn btn-primary' value="Update" />
				</td>
			</tr>	

		</form>
				</table>
			</div>
		</div>
	</div>	
	<div class='col-md-2'></div>
	