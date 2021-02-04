<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}
	$dealer_id = $_SESSION["username"];
	
	$sql = " SELECT * FROM dealers_tbl WHERE dealer_id = '".$dealer_id."'";

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

<?php	
	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){

	?>

			<input type='hidden' class='form-control' value="<?php echo $row["dealer_id"]?>" id='dealer_id' />
			<tr>
				<th width=''>First Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["first_name"]?>" id='fname' />
				<p id="fname_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Middle Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["middle_name"]?>" id='m_name' />
				<p id="m_name_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Last Name</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["last_name"] ?>" id='lname' />
				<p id="lname_error"></p>
				</td>
			</tr>
				
			<tr>
				<th width=''>Age</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["age"] ?>" id='age'/>
				<p id="age_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Nationality</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["nationality"]?>" id='nati' />
				<p id="natinal_error"></p>
				</td>
			</tr>	
			<tr>	
				<th width=''>Location</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["location"]?>" id='lot' />
				<p id="lot_error"></p>
				</td>
			</tr>	
			<tr>	
				<th width=''>Phone Number</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["p_number"]?>" id='phone' />
				<p id="phone_error"></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Email</th>
				<td>
				<input type='text' class='form-control' value="<?php echo $row["email"]?>" id='email' />
				<p id="email_error"></p>
				</td>
			</tr>	
			<input type='hidden' value='".$row["dealer_id"]."' id='dealerId'>

<?php
		}
	}

?>

			<tr>
				<th></th>
				<td>
				<input type="submit" class='btn btn-primary' value="Update" onclick="edit_info();"/>
				</td>
			</tr>	

				</table>
			</div>
		</div>
	</div>	
	<div class='col-md-2'></div>
	