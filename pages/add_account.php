<div class="col-md-12">
<?php

if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/add_account_fun.php");

if (isset($_GET['id'])){

$dealer_id = $_GET['id'];
//echo $dealer_id;

	$sql = " SELECT * FROM dealers_tbl WHERE dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		while ($row=mysqli_fetch_array($result)) {
			$last_name = $row["last_name"];
			$dealer_id = $row["dealer_id"];
		}
	}

}


?>
</div>
<!-- starting add acount-->
<div class="col-md-3"></div>
<div class="col-md-6">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Add Account</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="post">
					<!-- starting row-->
					<div class="col-md-12">
						<div id="get_message">
							
						</div>
					</div>
					 <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" value="<?php echo $dealer_id; ?>" name="Username" required readonly>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" value="<?php echo $last_name; ?>" name="Password" required readonly>
							</div>
						</div>
					</div>

					<div class="row">	
						<div class="col-md-12">
							<div class="form-group">
								<input type="hidden" class="form-control" value="Dealer" name="UserLevel" >
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Add Account" name="submit">
							</div>
						</div>
						<div class="col-md-5"></div>
					</div>
					<!-- ending rows-->
				</form>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-3"></div>
<!-- ending add acount-->