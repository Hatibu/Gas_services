<?php

if (isset($_POST["submit"])) {

	$fname = $_POST["first_name"];
	$mname = $_POST["m_name"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$nati = $_POST["nati"];
	$location = $_POST["location"];
	$pnumber = $_POST["phone"];
	$email = $_POST["email"];

	$sql ="SELECT * FROM dealers_tbl WHERE first_name='".$fname."' AND last_name='".$lname."'";
	$query = mysqli_query($connection,$sql);
	$nums = mysqli_num_rows($query);
	if ($nums>0) {
		
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>  A Dealer Is Already Exist ......!</b>
			</div>

		";

	}else{
	
	$sql = " INSERT INTO dealers_tbl (first_name,middle_name,last_name,gender,age,nationality,location,p_number,email) VALUES ('".$fname."','".$mname."','".$lname."','".$gender."','".$age."','".$nati."','".$location."','".$pnumber."','".$email."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Add A Dealer ......!</b>
				</div>

				";
			}else{

				echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Success To Add A Dealer ......!</b>
				</div>
				";

			}


}


}

?>