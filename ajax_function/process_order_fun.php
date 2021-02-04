<?php

require ("../database/connection.php");

if (isset($_POST["order_id"])){

	$dealer_id= $_POST["dealer_id"];
	$order_id= $_POST["order_id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$location=$_POST["location"];
	$Quntity1=$_POST["Quntity1"];
	$Quntity2=$_POST["Quntity2"];

	$from ="New Process Order";
	$to = "StoreKeeper";
	$message="There Is Are New Process Order The Order Number(order_ID) Is ".$order_id;
	$Description="New Process Order";
	
	$sql="SELECT * FROM process_tbl WHERE order_ID ='".$order_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num >0) { 
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> The Order Details Is Already Processed......!</b>
			</div>
		";
	}else{

		$sql1 =  "INSERT INTO process_tbl (`first_name`, `last_name`, `location`, `Quantity(Kg6)`, `Quantity(Kg15)`, `order_ID`,`dealer_id`) VALUES ('".$fname."','".$lname."','".$location."','".$Quntity1."','".$Quntity2."','".$order_id."','".$dealer_id."')";

		$result1 = mysqli_query($connection,$sql1);
		if ($result1){

			echo"
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Success To Process The Order Details......!</b>
			</div>
			";

			$sql2="INSERT INTO notification_tbl(Message,To_user,User_from_type,Description_user) VALUES ('".$message."','".$to."','".$from."','".$Description."')";
			$result2 = mysqli_query($connection,$sql2);
			if(!$result2){
				echo "No send the notification";
			}


		}
		else{
			echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Failure To Process The Order Details......!</b>
			</div>
		";
		}
	}
}

?>