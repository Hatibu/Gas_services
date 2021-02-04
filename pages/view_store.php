
<?php

if($_SESSION["level"]!= "StoreKeeper"){
	header('location:index.php?p=error');
}
// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM store_tbl";

	echo "
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Gas Cylinders Details</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width=''>Type(6Kg)</th>
							<th width=''>Type(15Kg)</th>
							<th width=''>Quantity(6Kg)</th>
							<th width=''>Quantity(15Kg)</th>
							<th width=''>Date</th>
							<th width=''>Action</th>
						</tr>

	";

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			<tr>
				<td>".$row["Type1"]."</td>
				<td>".$row["Type2"]."</td>
				<td>".$row["Quantity1"]."</td>
				<td>".$row["Quantity2"]."</td>
				<td>".$row["Date_store"]."</td>
			";	
?>				<td>
				<a href="index.php?p=update_store&id=<?php echo $row["store_id"];?>" class="btn btn-primary btn-sm">Edit</a>
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