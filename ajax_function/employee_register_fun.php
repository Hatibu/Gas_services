<?php

require ("database/connection.php");

if (isset($_POST["submit"])){

	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$nati = $_POST["nati"];
	$pnumber = $_POST["phone"];
	$email = $_POST["email"];
	$posit = $_POST["posit"];

	$sql= " SELECT * FROM employees_tbl WHERE first_name='".$fname."' AND last_name='".$lname."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if($num > 0){
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>  Employee Is Alreadly Exist ......!</b>
			</div>

		";
	}else{

			$sql = " INSERT INTO employees_tbl (first_name,middle_name,last_name,gender,age,nationality,p_number,email,position) VALUES ('".$fname."','".$mname."','".$lname."','".$gender."','".$age."','".$nati."','".$pnumber."','".$email."','".$posit."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Register A Employee ......!</b>
				</div>

				";
			}else{

				echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Success To Register A Employee ......!</b>
				</div>
				";

			}

	}

}






















?>