<?php

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("database/connection.php");

// view the dealer from the admin dashboard ..........


	$sql = " SELECT * FROM dealers_tbl";
?>
	<div class='row'>
		<div class='col-md-12'>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'></div>
			<div class='col-md-3'>
				<label>Search</label>
				<input type="text" id="dealer" placeholder="Enter Name of dealer" class="form-control" onkeyup="search_dealer();">
			</div>
		</div>
	</div>
	<br>

	<div id="get_dealer">
		<!--update the searh order-->
	</div>

	
	<div class='col-md-12'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<p>Dealers Details</p>
			</div>
<?php			
		echo "
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

	";

	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	
	if ($num > 0) {

		while ($row =mysqli_fetch_array($result)) {

			echo "
			<tr>
				
				<td>".$row["first_name"]."</td>
				<td>".$row["last_name"]."</td>
				<td>".$row["location"]."</td>
				<td>".$row["p_number"]."</td>
				<td>".$row["email"]."</td>
				<td>
			";	
?>				
				<a href="index.php?p=view_update&id=<?php echo $row["dealer_id"];?>" class="btn btn-primary">Edit</a>
				<a href="index.php?p=add_account&id=<?php echo $row["dealer_id"];?>" class="btn btn-warning">Account</a>
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




// delete the dealer form the admin........................

if (isset($_POST["remove"])) {

	$dealer_id = $_POST["dealeId"];

	$sql = " DELETE FROM dealers_tbl WHERE dealer_id = '".$dealer_id."'";
	
		$result = mysqli_query($connection,$sql);
		
		if ($result) {
			
			echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Success To Delete A Dealer ......!</b>
					</div>
			";
			
		}else{

			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Delete A Dealer ......!</b>
					</div>
			";
		}

}


?>



<?php
require ("includes/footer.php");
 ?>