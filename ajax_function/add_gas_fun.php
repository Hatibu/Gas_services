<?php

if(isset($_POST["submit"])){

	$type1 = $_POST["type1"];
	$type2 = $_POST["type2"];
	$Quantity1 = $_POST["Quantity1"];
	$Quantity2 = $_POST["Quantity2"];
	$date_today = date("Y-m-d");
	$month_today = date("Y-m");
	//echo $type2;
	
	$sql ="SELECT * FROM store_tbl WHERE Date_store='".$date_today."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Please Update The Store Details You Enter Today......!</b>
			</div>
			";
	}else{

		$sql="INSERT INTO store_tbl(Type1,Type2,Quantity1,Quantity2,Date_store,mouth_store) VALUES ('".$type1."','".$type2."','".$Quantity1."','".$Quantity2."','".$date_today."','".$month_today."')";
		$result = mysqli_query($connection,$sql);
		if (!$result) {
			echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> Failure To Adding The Gas Cylinder......!</b>
				</div>
			";
		}else{
			echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> Success To Adding The Gas Cylinder......!</b>
				</div>
			";
		}
	}

}














?>