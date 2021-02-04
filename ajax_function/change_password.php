<?php
require ("database/connection.php");


if (isset($_POST["submit"])) {
	
	$username=$_POST["dealer_id"];
	$old_pass=md5($_POST["old"]);
	$new_pass=md5($_POST["new"]);
	$retype_pass=md5($_POST["retype"]);


	$sql ="SELECT * FROM account_tbl WHERE username='".$username."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	while ($row = mysqli_fetch_array($result)) {
			$password_db = $row["password"];
		}

	if ($password_db == $old_pass){

		if ($retype_pass == $new_pass) {
		
			
			$sql="UPDATE account_tbl SET password='".$new_pass."' WHERE username='".$username."'";
			$result = mysqli_query($connection,$sql);
			if($result){
				echo "
	            <div class='alert alert-success'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <b>Your Successfully To Change Your Password...!</b>
	            </div>

	         ";
			}else{

				echo "
	            <div class='alert alert-warning'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <b>Your Failure To Change Your Password...!</b>
	            </div>
	        	 ";

			}

		}else{

			echo "
	            <div class='alert alert-warning'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <b>New Password And Retype Password Are Not Match</b>
	            </div>
	         ";

		}	

	}else{

		echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password You Entered Is Not Correct</b>
            </div>

         ";

	}		
	

}









			












?>