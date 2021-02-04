<?php

if($_SESSION["level"]!= "Accountant"){
	header('location:index.php?p=error');
}

	require ("ajax_function/update_accountant_info_fun.php");

	$user = $_SESSION["username"];
	
	$sql = " SELECT * FROM employees_tbl WHERE ID_employee = '".$user."'";

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

	?>

			<input type='hidden' class='form-control' value="<?php echo $row["ID_employee"]?>" name='ID_employee' />
			<tr>
				<th width=''>First Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["first_name"]?>" id='fname' name="fname" />
				<p id="fname_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Middle Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["middle_name"]?>" id='m_name' name="m_name" />
				<p id="m_name_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Last Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["last_name"] ?>" id='lname' name="lname" />
				<p id="lname_error"></p>
				</td>
			</tr>
				
			<tr>	
				<th width=''>Nationality</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["nationality"]?>" id='nati' name="nati" />
				<p id="natinal_error"></p>
				</td>
			</tr>	
			
			<tr>	
				<th width=''>Phone Number</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["p_number"]?>" id='phone' name="phone" />
				<p id="phone_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Email</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["email"]?>" id='email' name="email" />
				<p id="email_error"></p>
				</td>
			</tr>	
<?php
		}
	}

?>

			<tr>
				<th></th>
				<td>
				<input type="submit" class='btn btn-primary' value="Update" name="submit" />
				</td>
			</tr>	
		</form>
				</table>
			</div>
			
		</div>
	</div>	
	<div class='col-md-2'></div>
	