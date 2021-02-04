<?php
require ("../database/connection.php");

if(isset($_POST["count"])){

	$user= $_POST["user"];
	$user_id =$_POST["user_id"];
	
	if($user == "Dealer"){
		$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user_id."' AND Status ='0'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		if ($count>0){
			echo $count;
		}else{
			echo"";
		}

	}else{

		$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user."' AND Status ='0'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		if ($count>0){
			echo $count;
		}else{
			echo"";
		}
	}
}

?>