<?php
require ("../database/connection.php");

	$dealer_id = $_POST["dealer_id"];
	$fname = $_POST["fname"];
	$m_name = $_POST["mname"];
	$lname =$_POST["lname"];
	$age = $_POST["age"];
	$nati = $_POST["nati"];
	$locat = $_POST["locat"];
	$phon = $_POST["phon"];
	$email = $_POST["email"];

	$sql = " UPDATE dealers_tbl SET first_name ='".$fname."', middle_name = '".$m_name."',last_name = '".$lname."',age ='".$age."',nationality ='".$nati ."',location ='".$locat."', p_number ='".$phon."', email ='".$email."' WHERE dealer_id ='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);

	if (!$result) {
		echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Update A Data ......!</b>
					</div>
			";
	}else{

		echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Success To update A Data ......!</b>
					</div>
			";
	}


?>	
	