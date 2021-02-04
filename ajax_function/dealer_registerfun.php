<?php

require ("database/connection.php");

if (isset($_POST["submit"])){	

	$target = "assets/license/".basename($_FILES["image"]["name"]);

		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$lname = $_POST["lname"];
		$gender = $_POST["gender"];
		$age = $_POST["age"];
		$nati = $_POST["nati"];
		$location = $_POST["location"];
		$pnumber = $_POST["pnumber"];
		$email = $_POST["email"];
		$image = $_FILES["image"]["name"];

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
				
			
		}else{

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Uploading Lisence ......!</b>
				</div>

				";
			}

	$sql= " SELECT * FROM dealers_tbl WHERE first_name='".$fname."' AND last_name='".$lname."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if($num > 0){
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>  Particular Details Is Alreadly Exist ......!</b>
			</div>

		";
	}else{

		$sql = " INSERT INTO dealers_tbl (first_name,middle_name,last_name,gender,age,nationality,location,p_number,email,image) VALUES ('".$fname."','".$mname."','".$lname."','".$gender."','".$age."','".$nati."','".$location."','".$pnumber."','".$email."','".$image."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Register A Dealer ......!</b>
				</div>

				";
			}else{

				echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Success To Register A Dealer ......!</b>
				</div>
				";

			}

	}	

	
}







?>

			

			