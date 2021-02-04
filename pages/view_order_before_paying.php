<?php
if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}	
	
	$dealer_id = $_SESSION["username"];
require ("ajax_function/delete_token.php");	

// loading the dealers details ...............
	$sql = "SELECT * FROM dealers_tbl WHERE dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$firstname= $row["first_name"];
			$lastname= $row["last_name"];
			$lotion = $row["location"];
		}
		
	}
	
// loading the dealers order details ...............
	$sql = "SELECT * FROM order_tbl WHERE status = '0' AND dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$amount1= $row["Amount1"];
			$amount2= $row["Amount2"];
			$type1 = $row["Type1"];
			$type2 = $row["Type2"];
			$quantity1 = $row["Quntity1"];
			$quantity2 = $row["Quntity2"];
			$total = $row["Total"];
		}
?>







<div class='col-md-12'>
	<div id="get_message">
	    <!-- get message or alerts-->
	</div>
</div>
<input type="hidden" value="<?php echo $_SESSION["username"];?>" id="dealer_id">
<!-- starting add acount-->
<div class="col-md-"></div>
<div class="col-md-12">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">The Order Your Place</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<fo>
				<!-- personal Information form-->	
					
						<div class="col-md-12">
							<h4><b>Personal Details</b></h4>
							<hr>
						</div>
					<div class="col-md-12">	
					<div class="row">
						<div class="col-md-6">
							<h4><b>Your Full Name:</b>
							<p><i>
							<?php echo $firstname; ?>
							<?php echo $lastname; ?>
							</i>
							</p>
							</h4>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">	
							<h4><b>Your Location:</b>
							<p><i>
							<?php echo $lotion; ?>
							</i></p>
							</h4>
						</div>
					</div>
				</div>
				<!--ending personal Information form-->	
				<div class="col-md-12">
					<h4><b>Order Details</b></h4>
					<hr>
				</div>
					<!-- headers -->
					<div class="row">
						<div class="col-md-6">
							<h4 align="center"><b>Type 1 (<?php echo $type1;?>)</b></h4>
							<input type="hidden" value="<?php echo $type1?>" id="type1">
						</div>

						<div class="col-md-6">
							<h4 align="center"><b>Type 2 (<?php echo $type2;?>)</b></h4>
							<input type="hidden" value="<?php echo $type2?>" id="type2">
						</div>
					
					</div>

		<!-- first row -->
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" id="Qnt1" value="<?php echo $quantity1;?>" disabled/>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" id="amount1"
								value="<?php echo $amount1;?>" disabled >
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
								<input type="text" class="form-control" id="Qnt2" value="<?php echo $quantity2;?>" disabled>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" id="amount2" value="<?php echo $amount2;?>" disabled >
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
							<input type="text" class="form-control" id="Total_amount" value="<?php echo $total;?>" disabled >
						</div>
					</div>
				</div>
			<!-- ending third row -->
				<div class="row">

					<div class="col-md-2">
						<div class="form-group">
							<center>
								<a href="index.php?p=update_order" class="btn btn-primary">Update Your Order</a>
							</center>
						</div>
					</div>

					<div class="col-md-8"></div>
					<div class="col-md-2">
						<div class="form-group">
							<center>
								<a href="index.php?p=verify" class="btn btn-primary">Confirm Your Order</a>
							</center>
						</div>
					</div>
				</div>
		</div>	
		<!-- ending third row -->	
		</fo>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-"></div>
<!-- ending add acount-->

<?php

	}else{

		echo "
	    <div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b> Your Did Not Place Order ........!</b>
		</div>
	    ";
	}

	



?>