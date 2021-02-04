<?php

if($_SESSION["level"]!= "StoreKeeper"){
	header('location:index.php?p=error');
}
require ("ajax_function/update_store_fun.php");

// loading the type one...............
	$sql = "SELECT Type FROM price_tbl WHERE ID = '1'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
						
	if ($num > 0) {
		while($row = mysqli_fetch_array($result)){
			$type1 = $row["Type"];
		}
							
	}

	// loading the type one...............
	$sql = "SELECT Type FROM price_tbl WHERE ID = '2'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
						
	if ($num > 0) {
		while($row = mysqli_fetch_array($result)){
			$type2 = $row["Type"];
		}
							
	}

if (isset($_GET["id"])) {

		$get_id = $_GET["id"];

		$sql="SELECT * FROM store_tbl WHERE store_id='".$get_id."'";
		$result = mysqli_query($connection,$sql);
		$num = mysqli_num_rows($result);
						
		if ($num > 0) {
			while($row = mysqli_fetch_array($result)){
				$Quantity1 = $row["Quantity1"];
				$Quantity2 = $row["Quantity2"];
			}
								
		}
}



?>

<div class="col-md-12">
	<div id="get_message">
		
	</div>
</div>				
<!-- starting-->
<div class="col-md-12">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Update Gas Cylinders</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="post" onsubmit="return add_gas();">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label>Type Of Gas Cylinder</label>
									<input type="text" value="<?php echo $type1?>" class="form-control"  name="type1" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Type Of Gas Cylinder</label>
									<input type="text" value="<?php echo $type2?>" class="form-control"  name="type2" readonly>
								</div>
							</div>
						</div>
					</div>
				<!-- ending One Row-->

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group">
								<label>Enter The Quantity</label>
								<input type="text" class="form-control" value="<?php echo $Quantity1?>" name="Quantity1" id="Qnt1" onblur=" Quant();" >
								<p id="Quantity1_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Enter The Quantity</label>
								<input type="text" class="form-control" value="<?php echo $Quantity2?>"  name="Quantity2" id="Qnt2" onblur=" Quantity();">
								<p id="Quantity2_error" style="color: red;"></p>
								<input type="hidden" class="form-control" value="<?php echo $get_id?>" name="get_id">
							</div>
						</div>
					</div>
				</div>
				<!-- ending two Row-->

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="submit" name="submit" value="Update" class="btn btn-primary" >
							</div>
						</div>
						<div class="col-md-5"></div>
					</div>
				</div>
				<!-- ending three Row-->

				</f>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<!-- ending-->