<div class="col-md-12">
<?php
if($_SESSION["level"]!= "Administrator"){
	header('location:index.php?p=error');
}
require ("ajax_function/add_employeefun.php");

if (isset($_GET['id'])){

$ID_employee = $_GET['id'];
//echo $dealer_id;

	
	$sql = " SELECT * FROM employees_tbl WHERE ID_employee='".$ID_employee."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		while ($row=mysqli_fetch_array($result)) {
			$last_name = $row["last_name"];
			$ID_employee = $row["ID_employee"];
			$position = $row["position"];
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
								<input type="text" class="form-control" value="<?php echo $ID_employee; ?>" name="Username" readonly required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" value="<?php echo $last_name; ?>" name="Password" readonly required>
							</div>
						</div>
					</div>

					<div class="row">	
						<div class="col-md-12">
							<div class="form-group">
								<label>Level</label>
								<input type="text" class="form-control" value="<?php echo $position; ?>" name="position" readonly required> 
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