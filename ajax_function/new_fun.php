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
		$b_experience = $_POST["business_expe"];
		$capital = $_POST["capital"];
		$email = $_POST["email"];
		$image = $_FILES["image"]["name"];


		$To ="SuperDealer";
		$From ="New Applicant";
		$descrption ="New Applicant";
		

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
				
			
		}else{

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Uploading Lisence ......!</b>
				</div>

				";
			}

	$sql= " SELECT * FROM new_applicant_tbl WHERE first_name='".$fname."' AND last_name='".$lname."'";
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

		$sql = " INSERT INTO new_applicant_tbl  (first_name,middle_name,last_name,gender,age,nationality,location,p_number,business_expe,capital,email,image) VALUES ('".$fname."','".$mname."','".$lname."','".$gender."','".$age."','".$nati."','".$location."','".$pnumber."','".$b_experience."','".$capital."','".$email."','".$image."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure to send your information ......!</b>
				</div>

				";
			}else{

				echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Success send your information, We are working on your request please wait we shall inform you......!</b>
				</div>
				";


				$sql= " SELECT * FROM new_applicant_tbl WHERE first_name='".$fname."' AND last_name='".$lname."'";
					$result = mysqli_query($connection,$sql);
					$num = mysqli_num_rows($result);

				while($row =mysqli_fetch_array($result)){
					$id = $row["id"];
				}

				$message ="There Is New Applicant The ID Number Is "." ".$id;

				$sql3 = "INSERT INTO notification_tbl(Message,To_user,User_from_type,Description_user) VALUES ('".$message."','".$To."','".$From."','".$descrption."')";
				$result3 = mysqli_query($connection,$sql3);
					if(!$result3){
						echo "send the notification";
					}


			}			

	}	

	
}







?>

			

			