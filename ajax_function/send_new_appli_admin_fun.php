<?php
if (isset($_POST["submit"])){
	# code...
	$id = $_POST["id_new"];

	$To ="Administrator";
	$From ="Request Accepted";
	$descrption ="Request Accepted";
	$message ="There Is Request Accepted With ID"." ".$id;

	$sql = "SELECT * FROM new_applicant_tbl WHERE status ='1' AND id ='".$id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {

		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Already A Accept New Applicant Request......!</b>
			</div>
		";

	}else{	

	$sql = "UPDATE new_applicant_tbl SET status ='1' WHERE id ='".$id."'";
	$result = mysqli_query($connection,$sql);
	if (!$result) {
		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Failure To Accept New Applicant Request......!</b>
			</div>
		";
	}else{

		echo"
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Success To Accept New Applicant Request......!</b>
			</div>
		";

		$sql3 = "INSERT INTO notification_tbl(Message,To_user,User_from_type,Description_user) VALUES ('".$message."','".$To."','".$From."','".$descrption."')";
			$result3 = mysqli_query($connection,$sql3);
			if(!$result3){
				echo "send the notification";
			}
	}

}



}


?>