<?php

if($_SESSION["level"]!= "Accountant"){
	header('location:index.php?p=error');
}
// loading the first price of type one...............

	$sql = "SELECT * FROM price_tbl WHERE ID = '1'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$Price01= $row["Price"];
			$type1 = $row["Type"];

		}
		
	}

	// loading the second price of type one...............

	$sql = "SELECT * FROM price_tbl WHERE ID = '2'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$Price02= $row["Price"];
			$type2 = $row["Type"];
		}
		
	}
	
?>

<div class='col-md-12'>
	<div id="get_message">
	    <!-- get message or alerts-->
	</div>
</div>

<!-- starting add acount-->
<div class="row">
<div class="col-md-6">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Change Price</p>
		</div>
		
		<!-- ending panel-heading-->

		<!-- starting panel-body-->
		<div class="panel-body">
			<!-- starting form-->
			<form method="post">
				<!-- headers -->
			<div class="row">
				<div class="col-md-12">

					<div id="get_message1">
						<!--get message-->
					</div>

					<div class="col-md-12">
						<h4 align="center"><b>Type 1 (<?php echo $type1;?>)</b></h4>
						<input type="hidden" value="<?php echo $type1?>" id="type1">
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" name="Qnt2" value="1" disabled>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Price</label>
								<input type="text" class="form-control" value="<?php echo $Price01?>" disabled/>
							</div>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<div class="form-group">
							<center>
								<input type="button" class="btn btn-primary" value= "Change Price" data-toggle="collapse" data-target="#add_type1">
							</center>
						</div>
					</div>
					<div class="col-md-5"></div>
				</div>	

				<div class="col-md-12">
					<div id="add_type1" class="collapse">
						<form method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Enter Price</label>
									<input type="text" class="form-control" id="price" value="<?php echo $Price01 ?>"/>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-2">
								<div class="form-group">
									<center>
										<input type="button" class="btn btn-primary" value="Update" onclick="add_type1();">
									</center>
								</div>
							</div>
							<div class="col-md-5"></div>
						</div>	
						</form>
					</div>
				</div>

			</div>
					
		</form>
		<!-- ending form-->
		</div>
		<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>


	<div class="col-md-6">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Change Price</p>
		</div>
		
		<!-- ending panel-heading-->

		<!-- starting panel-body-->
		<div class="panel-body">
			<!-- starting form-->
			<form method="post">
				<!-- headers -->
				<div class="row">
				<div class="col-md-12">
					<div id="get_message2">
						<!--get message-->
					</div>

					<div class="col-md-12">
						<h4 align="center"><b>Type 2 (<?php echo $type2;?>)</b></h4>
						<input type="hidden" value="<?php echo $type2?>" id="type2">
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" name="Qnt2" value="1" disabled>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Price</label>
								<input type="text" class="form-control" name="price2" value="<?php echo $Price02 ?>" disabled/>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<div class="form-group">
							<center>
								<input type="button" class="btn btn-primary" value= "Change Price" data-toggle="collapse" data-target="#add_type2">
							</center>
						</div>
					</div>
					<div class="col-md-5"></div>
				</div>

				<div class="col-md-12">
					<div id="add_type2" class="collapse">
						<form method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Enter Price</label>
									<input type="text" class="form-control" id="price02" value="<?php echo $Price02?>"/>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-2">
								<div class="form-group">
									<center>
										<input type="button" class="btn btn-primary" value="Update" onclick="add_type2();">
									</center>
								</div>
							</div>
							<div class="col-md-5"></div>
						</div>	
						</form>
					</div>
				</div>

				</div>	
		</form>
		<!-- ending form-->
		</div>
		<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-"></div>
<!-- ending add acount-->

