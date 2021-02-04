<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}
require ("ajax_function/order_fun.php");
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

<div class='col-md-12'><?php

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
<div class="col-md-"></div>
<div class="col-md-12">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Place Your Order</p>
		</div>
		
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="post" onsubmit="return check_order();">
					<!-- headers -->
					<div class="row">
						<input type="hidden" value="<?php echo $_SESSION["username"];?>" name="dealer_id">
						<div class="col-md-6">
							<h4 align="center"><b>Type 1 (<?php echo $type1;?>)</b></h4>
							<input type="hidden" value="<?php echo $type1?>" name="type1">
						</div>

						<div class="col-md-6">
							<h4 align="center"><b>Type 2 (<?php echo $type2;?>)</b></h4>
							<input type="hidden" value="<?php echo $type2?>" name="type2">
						</div>
					
					</div>

		<!-- first row -->
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" id="Qnt1" value="" onkeyup="adding_type1();" name="Qnt1" onblur="input_order();" />
								<p id="Quantity1_error" style="color: red;"></p>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Price</label>
								<input type="text" class="form-control" id="price1" value="<?php echo $Price01 ?>" readonly="" name="price1" />
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" id="amount1"
								value="0" readonly="" name="amount1" >
							</div>
						</div>
					</div>	
			</div>		
				<!-- ending first row -->
			
				<!-- starting second row -->
			<div class="col-md-6">	
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" id="Qnt2" value="" onkeyup="adding_type2();" name="Qnt2" onblur="input_order1();">
								<p id="Quantity2_error" style="color: red;"></p>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Price</label>
								<input type="text" class="form-control" id="price2" value="<?php echo $Price02 ?>" readonly="" name="price2" />
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" id="amount2" value="0" readonly="" name="amount2">
							</div>
						</div>
					</div>	
			</div>		
			<!-- ending second row -->
		</div>

			<!-- starting third row -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Total Amount</label>
							<input type="text" class="form-control" id="Total_amount" name="Total_amount" value="0" readonly="" >
						</div>
					</div>
				</div>
			<!-- ending third row -->
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<div class="form-group">
							<center>
								<input type="submit" class="btn btn-primary" value= "Place Order" name="submit" onclick="check_order();">
							</center>
						</div>
					</div>
					<div class="col-md-5"></div>
				</div>
			
		<!-- ending third row -->	
		</form>
	</div>
	<!-- ending panel-body-->
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-"></div>
<!-- ending add acount-->


