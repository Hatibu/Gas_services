<?php
require ("../database/connection.php");

if (isset($_POST["order_id"])){

	$order_id = $_POST["order_id"];
	$dealer_id = $_POST["dealer_id"];
	$process_id = $_POST["process_id"];
	$when = $_POST["when"];
	$today = date('Y-m-d');
	//echo $order_id;

	if ($when < $today) {

		echo"
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Please Enter Today Date Or Next Date......!</b>
			</div>
		";
	}else{

		$sql2= " SELECT * FROM process_tbl WHERE `process_tbl`.`process_id` = ".$process_id." AND `process_tbl`.`status` ='1' ";
		$result2 = mysqli_query($connection,$sql2);
		$num = mysqli_num_rows($result2);
		if ($num > 0) {
			echo"
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> The Order Details Is Alreadly Processed ......!</b>
				</div>
			";
		}else{

			$sql="UPDATE process_tbl SET `status` = '1',`process_tbl`.`date_process`='".$when."' WHERE `process_tbl`.`process_id` = ".$process_id."";

			$result = mysqli_query($connection,$sql);
			if ($result){
				echo"
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> Success To Process The Order Details......!</b>
				</div>
				";

				if ($when == $today){

					// send the notification to the accountant ............
					$from = "New Info";
					$to = $dealer_id;
					$messege = "You Will Receive Your Order Today From Online Gas Service";
					$sql3 = "INSERT INTO notification_tbl(Message,To_user,User_from_type) VALUES ('".$messege."','".$to."','".$from."')";
					$result3 = mysqli_query($connection,$sql3);
					if(!$result3){
						echo "send the notification";
					}

					
				}elseif($when > $today){

					// send the notification to the accountant ............
					$from = "New Info";
					$to = $dealer_id;
					$messege = " Sorry You Will Receive Your Order Tomorrow From Online Gas Service";
					$sql2 = "INSERT INTO notification_tbl(Message,To_user,User_from_type) VALUES ('".$messege."','".$to."','".$from."')";
					$result2 = mysqli_query($connection,$sql2);
					if(!$result2){
						echo "send the notification";
					}
				}

			}else{
				echo"
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b> Failure To Process The Order Details......!</b>
					</div>
				";
			}
		}
	}


}




?>