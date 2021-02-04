
<?php

if($_SESSION["level"]!= "StoreKeeper"){
	header('location:index.php?p=error');
}
require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM process_tbl INNER JOIN order_tbl ON process_tbl.order_ID = order_tbl.order_ID WHERE order_tbl.status='1'";
?>		
	<div class='row'>
		<div class='col-md-12'>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'>
				<label>Search</label>
				<input type="text" id="process_id" placeholder="Enter Order ID" class="form-control" onkeyup="search();">
			</div>
		</div>
	</div>
	<br>

	<div id="Processing_order">
		<!--update the searh order-->
	</div>

	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Processing Order</p>
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

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			
			<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["Quntity1"]."</td>
				<td>".$row["Quntity2"]."</td>
			";	
?>			<td>
				<a href="index.php?p=process_detail&id=<?php echo $row["process_id"];?>" 
				class="btn btn-primary btn-sm">Report</a>
			</td>	
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