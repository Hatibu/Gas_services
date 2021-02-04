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
				<p class="centered">Store Report Of <?php echo $value; ?></p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM store_tbl WHERE Date_store='".$value."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
					
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>Type(6Kg)</th>
						<th width=''>Type(15Kg)</th>
						<th width=''>Quantity(6Kg)</th>
						<th width=''>Quantity(15Kg)</th>
						<th width=''>Date</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
					
		?>
				<tr>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quantity1"];?></td>
					<td><?php echo $row["Quantity2"];?></td>
					<td><?php echo $row["Date_store"];?></td>
				</tr>
				
		<?php				
			}
		?>
			
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
				<b> Report Of Today Is Not Published......</b>
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
				<p class="centered">Store Report Of <?php echo $value; ?></p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM store_tbl WHERE mouth_store='".$value."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>Type(6Kg)</th>
						<th width=''>Type(15Kg)</th>
						<th width=''>Quantity(6Kg)</th>
						<th width=''>Quantity(15Kg)</th>
						<th width=''>Date</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
					
		?>
				<tr>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quantity1"];?></td>
					<td><?php echo $row["Quantity2"];?></td>
					<td><?php echo $row["Date_store"];?></td>
				</tr>
				
		<?php				
			}
		?>
			
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
 if ($value02 < $date && $value01 < $date) {
 		
 	
	
?>

<!-- starting-->
<div class="col-md2">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
			<div class="panel-heading">
				<p class="centered">Store Report Of <?php echo $value01; ?> To <?php echo $value02;?> </p>
			</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
			
			<?php
				$sql ="SELECT * FROM store_tbl WHERE Date_store BETWEEN '".$value01."' AND '".$value02."'";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				
			?>			
			<div class='table-responsive'>
				<table class='table table-hover'>
					<tr>
						<th width=''>Type(6Kg)</th>
						<th width=''>Type(15Kg)</th>
						<th width=''>Quantity(6Kg)</th>
						<th width=''>Quantity(15Kg)</th>
						<th width=''>Date</th>
					</tr>

		<?php
				while ($row = mysqli_fetch_array($result)) {
					
		?>
				<tr>
					<td><?php echo $row["Type1"];?></td>
					<td><?php echo $row["Type2"];?></td>
					<td><?php echo $row["Quantity1"];?></td>
					<td><?php echo $row["Quantity2"];?></td>
					<td><?php echo $row["Date_store"];?></td>
				</tr>
				
		<?php				
			}
		?>
			
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
			<b> Report Of Next Today Or Today Is Not Published Please Select Other Range......</b>
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