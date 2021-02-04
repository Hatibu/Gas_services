<?php

if (isset($_POST["submit"])){

	$Quntity1 = $_POST["Quantity1"];
	$Quntity2 = $_POST["Quantity2"];
	$get_id = $_POST["get_id"];

	$sql="UPDATE store_tbl SET Quantity1='".$Quntity1."',Quantity2='".$Quntity2."' WHERE store_id='".$get_id."'";
	$result = mysqli_query($connection,$sql);
	if (!$result) {
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Failure To Update The Gas Cylinder......!</b
			</div>
		";
	}else{

		echo"
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Success To Update The Gas Cylinder......!</b>
			</div>
		";
	}
	
}





?>