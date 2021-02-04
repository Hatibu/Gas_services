<?php 

if($_SESSION["level"]!= "StoreKeeper"){
	header('location:index.php?p=error');
}

	if(isset($_GET["id"])){
		$Id = $_GET["id"];
		//echo $Id;
		$sql = " SELECT * FROM process_tbl INNER JOIN order_tbl ON process_tbl.order_ID = order_tbl.order_ID WHERE order_tbl.status='1' AND process_id='".$Id."'";
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
					<p>Report Of The Order Details</p>
				</div>
				<input type='hidden' class='form-control' value='<?php echo $Id;?>' id='process_id' />
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

			";
			}
	?>
			<tr>	
				<th width=''>When</th>
				<td name='Quntity2'>
					<input type='date' class='form-control' id='when'/>
				</td>
			</tr>	
			<tr>
				<th></th>
				<td>
					<input type="submit" value="Report" class='btn btn-primary' onclick="report_order();">
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
			
		";
		}
}
	
?>