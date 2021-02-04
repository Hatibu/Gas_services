<?php
require ("../database/connection.php");

if(isset($_POST["not_id"])){
	
	$id = $_POST["not_id"];

	$sql = " DELETE FROM notification_tbl WHERE ID ='".$id."'";
	$result = mysqli_query($connection,$sql);
	if (!$result){
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Failure To Delete A Notification......!</b>
			</div>
		";
	}else{

		echo"
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Success To Delete A Notification......!</b>
			</div>
		";
	}
}




?>