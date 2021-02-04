<?php

// delete the token with...................
	$sql1 = " DELETE FROM token_tbl WHERE active='0' AND dealer_id='".$dealer_id."'";
	$result1=mysqli_query($connection,$sql1);
	if(!$result1){
		echo "not";
	}
	
// for generate  token only for verify.................

	//Generate a random string.
	$token = openssl_random_pseudo_bytes(4);
	 
	//Convert the binary data into hexadecimal representation.
	$token = bin2hex($token);
	 
	//Print it out for example purposes.
	//echo $token;
	
	$sql = " INSERT INTO token_tbl (verify_code,dealer_id) VALUE ('".$token."','".$dealer_id."')";
	$result = mysqli_query($connection,$sql);
	if(!$result){
	    
	    echo "
	    <div class='alert alert-danger'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  There Is A Problem with The System For Verify Code......!</b>
		</div>
	    ";
	}






?>