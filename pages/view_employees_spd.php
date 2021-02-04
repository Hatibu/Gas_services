
<?php

if($_SESSION["level"]!= "SuperDealer"){
	header('location:index.php?p=error');
}
require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM employees_tbl";

	echo "
	
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Employees Details</p>
			</div>
			<div class='panel-body'>
				<div class='table-responsive'>
					<table class='table table-hover'>
						<tr>
							<th width='15%'>First Name</th>
							<th width='15%'>Middle</th>
							<th width='15%'>Last Name</th>
							<th width='15%'>Phone Number</th>
							<th width='15%'>Email</th>
							<th width='15%'>Position</th>
						</tr>

	";

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			<tr>
				<td>".$row["first_name"]."</td>
				<td>".$row["middle_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
				<td>".$row["position"]."</td>
			";	
?>	
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





