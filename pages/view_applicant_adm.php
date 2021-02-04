
<?php
if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("database/connection.php");

// view the dealer from the admin dashboard ..........

if (isset($_GET["id"])) {
	# code...
	$id=$_GET["id"];

}


	$sql = " SELECT * FROM new_applicant_tbl WHERE status ='1'";
?>		
	<div class='row'>
		<div class='col-md-12'>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'>
				<label>Search</label>
				<input type="text" id="new_id" placeholder="Enter Number ID" class="form-control" onkeyup="search_admn();">
			</div>
		</div>
	</div>
	<br>

	<div id="get_info">
		<!--update the searh order-->
	</div>

	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>View New Applicants Details</p>
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

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			
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
	}

	echo"
				</table>
			</div>
		</div>
	</div>	
	";

?>

