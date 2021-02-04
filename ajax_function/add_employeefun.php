<?php

require ("database/connection.php");

if (isset($_POST["submit"])) {
	
	$username = $_POST["Username"];
	$Password = md5($_POST["Password"]);
	$position = $_POST["position"];

	$sql = "SELECT * FROM account_tbl WHERE username='".$username."' AND level ='".$position."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		
		echo "
	        <div class='alert alert-warning'>
	            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	            <b> Account Is Already Exist............! </b>
	        </div>

	       ";

	}else{

		$sql ="INSERT INTO account_tbl (username,password,level) VALUES ('".$username."','".$Password."','".$position."')";
		$result = mysqli_query($connection,$sql);
		if ($result) {
			
			echo "
	            <div class='alert alert-success'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <b> Success To Add Account............! </b>
	            </div>

	         ";

		}else{

			echo "
	            <div class='alert alert-warning'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <b> Failure To Add Account............! </b>
	            </div>

	         ";

		}


	}

}


?>