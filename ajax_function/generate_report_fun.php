<?php
require ("../database/connection.php");

 if (isset($_POST["date"])){
	date_default_timezone_set('africa/nairobi');
	$date = date('Y-m-d');
	//echo $date;
	$value = $_POST["date"];
	//echo $value;
	if ($value != $date){
?>

<!-- starting-->
<div class="col-md2">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
			<div class="panel-heading">
				<p class="centered">Payment Report Of <?php echo $value; ?></p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id= dealers_tbl.dealer_id WHERE status = '1' AND order_date='".$value."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				$total = 0;	
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>First Name</th>
						<th width=''>Last Name</th>
						<th width=''>Location</th>
						<th width=''>Phone Number</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Total</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
				$total = $total + $row["Total"];	
		?>
				<tr>
					<td><?php echo $row["first_name"];?></td>
					<td><?php echo $row["last_name"];?></td>
					<td><?php echo $row["location"];?></td>
					<td><?php echo $row["p_number"];?></td>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Quntity1"];?></td>
					<td><?php echo $row["Amount1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quntity2"];?></td>
					<td><?php echo $row["Amount2"];?></td>
					<td><?php echo $row["Total"];?></td>
				</tr>
				
		<?php				
			}
		?>
			<tr>
				<td colspan="9"></td>
				<td><b>Total Amount</b></td>
				<td><b><?php echo $total; ?></b></td>
			</tr>
		<?php	

		}else{
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> No Data For These Day $value ......</b>
				</div>
			";
		}

			}else{
				echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b> Report For Today Is Not Published......</b>
					</div>
				";
			}

?>		
					
				</table>
			</div>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<!-- ending-->

<?php
					
}

?>

<!-- ending of the generatimg the day report-->

<?php

 if (isset($_POST["month"])) {
 	
 	$value = $_POST["month"];
 	//echo $value;

?>

<!-- starting-->
<div class="col-md2">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
			<div class="panel-heading">
				<p class="centered">Payment Report Of <?php echo $value; ?></p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id= dealers_tbl.dealer_id WHERE status = '1' AND order_month='".$value."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				$total = 0;	
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>First Name</th>
						<th width=''>Last Name</th>
						<th width=''>Location</th>
						<th width=''>Phone Number</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Total</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
				$total = $total + $row["Total"];	
		?>
				<tr>
					<td><?php echo $row["first_name"];?></td>
					<td><?php echo $row["last_name"];?></td>
					<td><?php echo $row["location"];?></td>
					<td><?php echo $row["p_number"];?></td>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Quntity1"];?></td>
					<td><?php echo $row["Amount1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quntity2"];?></td>
					<td><?php echo $row["Amount2"];?></td>
					<td><?php echo $row["Total"];?></td>
				</tr>
				
		<?php				
			}
		?>
			<tr>
				<td colspan="9"></td>
				<td><b>Total Amount</b></td>
				<td><b><?php echo $total; ?></b></td>
			</tr>
		<?php	

		}else{
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> No Data For These Month $value ......</b>
				</div>
			";
		}

			

?>		
					
				</table>
			</div>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<!-- ending-->

<?php

 }

?>


<!-- ending of the generatimg the month report-->

<?php
 
 if (isset($_POST["from_date"], $_POST["to_date"])) {
 	
 	date_default_timezone_set('africa/nairobi');
	$date = date('Y-m-d');
 	$value01 = $_POST["from_date"];
 	$value02 = $_POST["to_date"];
 	//echo $value01;
 	//echo $value02;
 	if ($value02 != $date) {

 		
?>

<!-- starting-->
<div class="col-md2">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
			<div class="panel-heading">
				<p class="centered">Payment Report Of <?php echo $value01;?> To <?php echo $value02;?> </p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id= dealers_tbl.dealer_id WHERE status = '1' AND order_date BETWEEN '".$value01."' AND '".$value02."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				$total = 0;	
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>First Name</th>
						<th width=''>Last Name</th>
						<th width=''>Location</th>
						<th width=''>Phone Number</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Type</th>
						<th width=''>Quantity</th>
						<th width=''>Amount</th>
						<th width=''>Total</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
				$total = $total + $row["Total"];	
		?>
				<tr>
					<td><?php echo $row["first_name"];?></td>
					<td><?php echo $row["last_name"];?></td>
					<td><?php echo $row["location"];?></td>
					<td><?php echo $row["p_number"];?></td>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Quntity1"];?></td>
					<td><?php echo $row["Amount1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quntity2"];?></td>
					<td><?php echo $row["Amount2"];?></td>
					<td><?php echo $row["Total"];?></td>
				</tr>
				
		<?php				
			}
		?>
			<tr>
				<td colspan="9"></td>
				<td><b>Total Amount</b></td>
				<td><b><?php echo $total; ?></b></td>
			</tr>
		<?php	

		}else{
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> No Data For These Range $value01 And $value02 ......</b>
				</div>
			";
		}

	}else{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Report For Today Is Not Published Please Select Other Range......</b>
			</div>
		";
	}	

?>		
					
				</table>
			</div>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<!-- ending-->

<?php

 }

?>