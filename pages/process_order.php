<?php 

if($_SESSION["level"]!= "Accountant"){
	header('location:index.php?p=error');
}

	if(isset($_GET["id"])){
		$Id = $_GET["id"];
		//echo $Id;
		$sql = " SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id = dealers_tbl.dealer_id WHERE order_tbl.status='1' AND order_tbl.order_ID='".$Id."'";
		$result = mysqli_query($connection,$sql);
		$num = mysqli_num_rows($result);
?>
	<div class='col-md-12'>
	  <div id="get_message">
	    <!-- get message or alerts-->
	   </div>
	</div>
<?php
		if ($num>0){
	?>

	<div class='col-md-2'></div>
		<div class='col-md-8'>
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<p>Process The Order Details</p>
				</div>
				<div class='panel-body'>
					<div class='table-responsive'>
						<table class='table table-hover'>
							<fo>
	<?php		
			while($row=mysqli_fetch_array($result)) {
				
			echo "
			<input type='hidden' class='form-control' value='".$row["order_ID"]."' id='order_id' />
			<input type='hidden' class='form-control' value='".$row["dealer_id"]."' id='dealer_id' />
			<tr>
				<th width=''>First Name</th>
				<td name='first_name'>
					<input type='text' class='form-control' value='".$row["first_name"]."' id='first_name' disabled/>
				</td>
			</tr>

			<tr>	
				<th width=''>Last Name</th>
				<td name='last_name'>
					<input type='text' class='form-control' value='".$row["last_name"]."' id='lname'  disabled/>
				</td>
			</tr>
				
			<tr>
				<th width=''>Location</th>
				<td name='location'>
					<input type='text' class='form-control' value='".$row["location"]."' id='location' disabled />
				</td>
			</tr>
				
			<tr>	
				<th width=''>Quantity(6kg)</th>
				<td name='Quntity1'>
					<input type='text' class='form-control' value='".$row["Quntity1"]."' id='Quntity1' disabled />
				</td>
			</tr>

			<tr>	
				<th width=''>Quantity(15kg)</th>
				<td name='Quntity2'>
					<input type='text' class='form-control' value='".$row["Quntity2"]."' id='Quntity2' disabled />
				</td>
			</tr>	

			<tr>	
				<th width=''>Amount(6kg)</th>
				<td name='Amount1'>
					<input type='text' class='form-control' value='".$row["Amount1"]."' id='Amount1' disabled />
				</td>
			</tr>	

			<tr>	
				<th width=''>Amount(15kg)</th>
				<td name='Amount2'>
					<input type='text' class='form-control' value='".$row["Amount2"]."' id='Amount2' disabled />
				</td>
			</tr>

			<tr>	
				<th width=''>Total</th>
				<td>
					<input type='text' class='form-control' value='".$row["Total"]."' id='Total' disabled />
				</td>
			</tr>

			<tr>	
				<th width=''>Status</th>
				<td>
					<input type='text' class='form-control' value='".$row["status"]."(payed)' id='status' disabled />
				</td>
			</tr>

			";
			}
	?>
			<tr>
				<th></th>
				<td>
					<input type="submit" value="Process The Order" class='btn btn-primary' onclick="process();">
				</td>
			</tr>	

		</f>
				</table>
			</div>
		</div>
	</div>	
	<div class='col-md-2'></div>
	
	<?php			
			
		}else{
			echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Order Details Is Not Found......!</b>
			</div>
		";
		}
}
	
?>