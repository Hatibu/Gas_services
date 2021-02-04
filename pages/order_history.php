<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}

$dealer_id = $_SESSION["username"];
require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM order_tbl WHERE status='1' AND dealer_id='".$dealer_id."' ";

	echo "
	
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Order History</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width='15%'>Type1(6Kg)</th>
							<th width='15%'>Type1(15Kg)</th>
							<th width='15%'>Quantity(6Kg)</th>
							<th width='15%'>Quantity(15Kg)</th>
							<th width='15%'>Amount(6Kg)</th>
							<th width='15%'>Amount(15Kg)</th>
							<th width='15%'>Total</th>
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
				<td>".$row["Amount1"]."</td>
				<td>".$row["Amount2"]."</td>
				<td>".$row["Quntity1"]."</td>
				<td>".$row["Quntity2"]."</td>
				<td>".$row["Total"]."</td>
			</tr>

			";
		}
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";














































?>