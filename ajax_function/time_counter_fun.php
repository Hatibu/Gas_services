<?php
require ("../database/connection.php");
session_start();
$dealer_id = $_SESSION["username"];

if(isset($_POST["time"])){
	
	$sql="DELETE FROM order_tbl WHERE status='0' AND dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	if ($result) {
		echo "
			Your Order As Been Expires
		";
	}
}


?>