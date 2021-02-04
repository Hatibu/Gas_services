<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}

$dealer_id= $_SESSION["username"];
require ("database/connection.php");
require ("database/connection2.php");
require ("ajax_function/verify_payment_fun.php");

// loading the phone number from the dealer table........
$sql = "SELECT * FROM dealers_tbl WHERE dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$phone = $row["p_number"];
		}
		
	}

// loading the total for amount form order table........
$sql = " SELECT * FROM order_tbl WHERE dealer_id='".$dealer_id."' AND status='0'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num >0) {
		while($row=mysqli_fetch_array($result)){

			$total = $row["Total"];
		}
	}

?>

<!-- starting add acount-->
<div class='col-md-12'>
	<div id="get_message">
	    <!-- get message or alerts-->
	</div>
</div>
<form method="post">
<input type="hidden" value="<?php echo $_SESSION["username"];?>" name="dealer_id">
<input type="hidden" value="<?php echo $phone;?>" name="phone">
<input type="hidden" value="<?php echo $total;?>" name="total">
<div class="col-md-1"></div>
<div class="col-md-10">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Payment</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			<div class='table-responsive'>
					<table class='table table-hover'>
			<tr>
				<th width=''>Merchant</th>
				<td>
					<p> Online Gas Service</p>
				</td>
			</tr>
			<tr>	
				<th width=''>Amount From Merchant</th>

				<td>
					<p id="merchant"><?php echo $total;?></p>
				</td>
			</tr>
			<tr>	
				<th width=''>Amount to be dedacted from your M-PESA account</th>
				<td>
					<p id="customer_account"><?php echo $total;?></p>
				</td>
			</tr>
				
			<tr>
				<th width=''>M-PESA Account</th>
				<td>
					<p><?php echo $phone;?></p>
				</td>
			</tr>
			<tr>	
				<td>
					<label>Enter your M-PESA PIN to confirm</label>
					<input type='password' class='form-control' id='password' name='password' />
				</td>
				<td></td>
			</tr>		
			<tr>
				<td>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg" value= "Confirm" name="submit">
					</div>
				</td>
				<td></td>
			</tr>
		</table>
			</div>	
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-1"></div>
<!-- ending add acount-->
</form>