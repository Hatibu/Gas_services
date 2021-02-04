<?php
require ("../database/connection.php");

if (isset($_POST["search"])) {
	
	$search = $_POST["search"];
	//echo $search;
	$sql = " SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id = dealers_tbl.dealer_id WHERE order_tbl.status='1' AND order_tbl.order_ID='".$search."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	?>
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Search Order</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width=''>First Name</th>
							<th width=''>Last Name</th>
							<th width=''>Phone Number</th>
							<th width=''>Location</th>
							<th width=''>Quantity(6kg)</th>
							<th width=''>Quantity(15kg)</th>
							<th width=''>Total</th>
							<th width=''>Status</th>
							<th width=''>Action</th>
						</tr>
	<?php
	
	if ($num > 0) {
		while ($row =mysqli_fetch_array($result)){
			echo "
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["Quntity1"]."</td>
				<td>".$row["Quntity2"]."</td>
				<td>".$row["Total"]."</td>
				<td>".$row["status"]."(payed)</td>
				<td><a href='index.php?p=process_order&id=".$row["order_ID"]."' class='btn btn-primary btn-sm'>View</a></td>	
			";
		}

	}else{
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Order Is Not Found......!</b>
			</div>
		";
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

}



?>



<?php

if (isset($_POST["process_id"])) {
	
	$process_id = $_POST["process_id"];
	//echo $search;
	$sql = " SELECT * FROM process_tbl WHERE order_ID='".$process_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	?>
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Search Process Order</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width=''>First Name</th>
							<th width=''>Last Name</th>
							<th width=''>Location</th>
							<th width=''>Quantity(6kg)</th>
							<th width=''>Quantity(15kg)</th>
							<th width=''>Action</th>
						</tr>
	<?php
	
	if ($num > 0) {
		while ($row =mysqli_fetch_array($result)){
			echo "
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["Quantity(Kg6)"]."</td>
				<td>".$row["Quantity(Kg15)"]."</td>	
			";
	?>
		<td>
			<a href="index.php?p=process_detail&id=<?php echo $row["process_id"];?>" 
				class="btn btn-primary btn-sm">Report</a>
		</td>	
			</tr>
	<?php		
		}

	}else{
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Order Is Not Found......!</b>
			</div>
		";
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

}



?>



<?php

if (isset($_POST["new_dealer"])) {
	
	$new_dealer = $_POST["new_dealer"];
	//echo $search;
	$sql = " SELECT * FROM new_applicant_tbl WHERE id='".$new_dealer."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	?>
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Search New Applicant </p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width=''>First Name</th>
							<th width=''>Middle Name</th>
							<th width=''>Last Name</th>
							<th width=''>location</th>
							<th width=''>Experience</th>
							<th width=''>Capital</th>
							<th width=''>Phone Number</th>
							<th width=''>Email</th>
							<th width=''>Action</th>
						</tr>
	<?php
	
	if ($num > 0) {
		while ($row =mysqli_fetch_array($result)){
			echo "
				<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["middle_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["business_expe"]."(years)</td>
				<td>".$row["capital"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
			";
	?>
		<td>
			<a href="index.php?p=view_applicant&id=<?php echo $row["id"];?>" class="btn btn-primary">view</a>
		</td>
			</tr>
	<?php		
		}

	}else{
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Data Is Not Found......!</b>
			</div>
		";
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

}



?>



<?php

if (isset($_POST["new_id"])) {
	
	$new_id = $_POST["new_id"];
	//echo $search;
	$sql = " SELECT * FROM new_applicant_tbl WHERE id='".$new_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	?>
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Search New Applicant </p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width=''>First Name</th>
							<th width=''>Middle Name</th>
							<th width=''>Last Name</th>
							<th width=''>location</th>
							<th width=''>Experience</th>
							<th width=''>Capital</th>
							<th width=''>Phone Number</th>
							<th width=''>Email</th>
							<th width=''>Action</th>
						</tr>
	<?php
	
	if ($num > 0) {
		while ($row =mysqli_fetch_array($result)){
			echo "
				<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["middle_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["business_expe"]."(years)</td>
				<td>".$row["capital"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
			";
	?>
		<td>
			<a href="index.php?p=add_new_deal&id=<?php echo $row["id"];?>" class="btn btn-primary">Add Dealer</a>
		</td>
			</tr>
	<?php		
		}

	}else{
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Data Is Not Found......!</b>
			</div>
		";
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

}



?>



<?php

if (isset($_POST["dealer"])) {
	
	$dealer = $_POST["dealer"];
	//echo $search;
	$sql = " SELECT * FROM dealers_tbl WHERE first_name='".$dealer."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	?>
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Search Dealer</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width='15%'>First Name</th>
							<th width='15%'>Last Name</th>
							<th width='15%'>Location</th>
							<th width='15%'>Phone Number</th>
							<th width='15%'>Email</th>
							<th width='15%'>Action</th>
						</tr>
	<?php
	
	if ($num > 0) {
		while ($row =mysqli_fetch_array($result)){
			echo "
				<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
			";
	?>
		<td>
			<a href="index.php?p=view_update&id=<?php echo $row["dealer_id"];?>" class="btn btn-primary">Edit</a>
			<a href="index.php?p=add_account&id=<?php echo $row["dealer_id"];?>" class="btn btn-warning">Account</a>
		</td>
			</tr>
	<?php		
		}

	}else{
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Data Is Not Found......!</b>
			</div>
		";
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

}



?>