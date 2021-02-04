<?php

//Updating the dealer details .....................
require ("database/connection.php");

if (isset($_POST["submit"])) {
	
	$target = "assets/license/".basename($_FILES["image"]["name"]);

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

			$dealer_id = $_POST["dealerId"];	
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

			$sql = " UPDATE dealers_tbl SET first_name = '".$fname."',middle_name = '".$mname."',last_name = '".$lname."',gender = '".$gender."',age = '".$age."',nationality = '".$nati."',location = '".$location."',p_number = '".$pnumber."',email = '".$email."',image = '".$image."' WHERE dealer_id='".$dealer_id."'";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Updates Employee Details......!</b>
					</div>
				";

			}else{

				echo"
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Success To Updates Employee Details......!</b>
					</div>

					";

			}


		}else{

				echo"
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Uploading Dealer's Licenses......!</b>
					</div>
				";
				
		}

}




























?>