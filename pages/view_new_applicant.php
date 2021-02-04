
<?php

if($_SESSION["level"]!= "SuperDealer"){
	header('location:index.php?p=error');
}
require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM new_applicant_tbl";

	
	?>
	<div class='row'>
		<div class='col-md-12'>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'>
				<label>Search</label>
				<input type="text" id="new_dealer" placeholder="Enter Number ID" class="form-control" onkeyup="search_new();">
			</div>
		</div>
	</div>
	<br>
	<div id="get_new">
		<!--update the searh order-->
	</div>

	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>New Applicant Details</p>
			</div>
	
	<?php		
		echo "	
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
				<td>".$row["location"]."</td>
				<td>".$row["business_expe"]."(years)</td>
				<td>".$row["capital"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
				<td>
			";	
?>				
				<a href="index.php?p=view_applicant&id=<?php echo $row["id"];?>" class="btn btn-primary">view</a>
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