<?php
 if(isset($_POST["submit"])){

$user_token = $_POST["user_token"];
$dealer_id = $_POST["dealer_id"];


// checking token if is true valid..........................
	$sql = "SELECT * FROM token_tbl WHERE dealer_id='".$dealer_id."' AND verify_code = '".$user_token."'";
	$result=mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if($num >0){

		$sql= "UPDATE token_tbl SET active ='1' WHERE dealer_id='".$dealer_id."' AND verify_code='".$user_token."'";
			$result=mysqli_query($connection,$sql);
			if($result){

				header('location:index.php?p=payment');	
			}

	}
	else{

		echo "
	    <div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  The Verification Code Your Enter It Is Not Correct ......!</b>
		</div>
	    ";

	}




}



?>