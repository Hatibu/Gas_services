<?php

require ("../database/connection.php");


if(isset($_POST["notfi_id"])){

	$message = $_POST["message"];
	$To = $_POST["To"];
	$From_user = $_POST["From"];
	$user_id = $_POST["username"];

	if($From_user == "Dealer"){

		$sql1 ="SELECT * FROM dealers_tbl WHERE dealer_id ='".$user_id."'";
		$result1 = mysqli_query($connection,$sql1);
		while ($row = mysqli_fetch_array($result1)) {
			$first_name=$row["first_name"];
		}


		$sql= " INSERT INTO `notification_tbl` (`Message`, `To_user`, `User_from_type`,`Description_user`) VALUES ('".$message."', '".$To."', '".$user_id."','".$first_name."')";
		$result = mysqli_query($connection,$sql);

		if (!$result){
			echo "
		        <div class='alert alert-warning'>
		            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		            <b>There Is Problem With Notification...!</b>
		        </div>
		    ";
		}else{
			echo "
		        <div class='alert alert-success'>
		            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		            <b>Success To Send A Notification...!</b>
		        </div>
		    ";
		}
		
	}else{

		$sql= " INSERT INTO `notification_tbl` (`Message`, `To_user`, `User_from_type`,`Description_user`) VALUES ('".$message."', '".$To."', '".$From_user."','".$From_user."')";
		$result = mysqli_query($connection,$sql);
		if (!$result) {
			echo "
		        <div class='alert alert-warning'>
		            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		            <b>There Is Problem With Notification...!</b>
		        </div>
		    ";
		}else{
			echo "
		        <div class='alert alert-success'>
		            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		            <b>Success To Send A Notification...!</b>
		        </div>
		    ";
		}
	}

}





?>