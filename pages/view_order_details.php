
<?php

if($_SESSION["level"]!= "Accountant"){
	header('location:index.php?p=error');
}

require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id = dealers_tbl.dealer_id WHERE order_tbl.status='1'";
?>		
	<div class='row'>
		<div class='col-md-12'>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'>
				<label>Search</label>
				<input type="text" id="search" placeholder="Enter Order ID" class="form-control" onkeyup="search_fun();">
			</div>
		</div>
	</div>
	<br>

	<div id="get_order">
		<!--update the searh order-->
	</div>

	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Order Details</p>
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

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			
			<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["Quntity1"]."</td>
				<td>".$row["Quntity2"]."</td>
				<td>".$row["Total"]."</td>
				<td>".$row["status"]."(payed)</td>
			";	
?>			<td><a href="index.php?p=process_order&id=<?php echo $row["order_ID"];?>" 
				class="btn btn-primary btn-sm">View</a>
			</tr>
			

<?php			
		}
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

?>