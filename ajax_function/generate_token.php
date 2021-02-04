<?php

// loading the phone number of dealer in dealer table.....................

	$sql = "SELECT * FROM dealers_tbl WHERE dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$firstname= $row["first_name"];
			$lastname= $row["last_name"];
			$phone_number = $row["p_number"];
		}
		
	}

// compare if phone number from the Mpesa is equal to the Number from system......
	   $query = "SELECT * FROM dealers_mpesa_tbl WHERE cus_phone='".$phone_number."'";
	   $result2 = mysqli_query($connect,$query);
	   $num2 = mysqli_num_rows($result2);
	   if($num2 > 0){
		   while ($row = mysqli_fetch_array($result2)){
			   $phone_number = $row["cus_phone"];
			}
		// send to mobile phone the verify_code.............!
				$sql = "SELECT * FROM token_tbl WHERE dealer_id='".$dealer_id."' AND active= '0'";
				$result=mysqli_query($connection,$sql);
				$nums = mysqli_num_rows($result);

				if($nums >0){
					while($row =mysqli_fetch_array($result)){

					$token = $row["verify_code"];
					//echo $token;
						}

				// Authorisation details.
	$username = "jterlius@gmail.com";
	$hash = "91696f8b3697f83d5c58907182da55499fdd0dd789a86c94c4a9cfd0c4e10bf2";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "777111"; // This is who the message appears to be from.
	$numbers = "255692554907"; // A single number or a comma-seperated list of numbers
	$message = "verification code:"."".$token;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    echo $result;		
					

				}							
	   }else{
		echo "
	    <div class='alert alert-danger'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  Number Is Not Correct Please Change Your Phone Number On Edit Info Page On Dashboard And Try Again ......!</b>
		</div>
	    ";
	   }



?>
