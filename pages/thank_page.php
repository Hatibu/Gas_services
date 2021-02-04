<?php

if($_SESSION["level"]!= "Dealer"){
	header('location:index.php?p=error');
}

$dealer_id = $_SESSION["username"];
require ("database/connection.php");

//update the status of the order ...................

$sql ="UPDATE order_tbl SET status ='1' WHERE dealer_id='".$dealer_id."'";
$result = mysqli_query($connection,$sql);
if(!$result){
	echo "update not";
}

// loading the phone number of dealer in dealer tbale.....................
	$sql = " SELECT * FROM order_tbl INNER JOIN dealers_tbl ON order_tbl.dealer_id = dealers_tbl.dealer_id WHERE order_tbl.dealer_id='".$dealer_id."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		while($row = mysqli_fetch_array($result)){
			$firstname= $row["first_name"];
			$lastname= $row["last_name"];
			$phone_number = $row["p_number"];
			$order_id = $row["order_ID"];
		}
		
	}

// send the notification to the accountant ............
	$from = "New Order";
	$to = "Accountant";
	$Description="New Order";
	$messege = "There Is New Order From " .$firstname." ".$lastname ."And the Order ID Is"." ".$order_id;
	$sql3 = "INSERT INTO notification_tbl(Message,To_user,User_from_type,Description_user) VALUES ('".$messege."','".$to."','".$from."','".$Description."')";
	$result3 = mysqli_query($connection,$sql3);
	if(!$result3){
		echo "send the notification";
	}


?>
<!-- starting add acount-->
<div class="col-md-1"></div>
<div class="col-md-10">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered"> Thanks</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form>
					<p>Thank For Doing Business With Us <b><?php echo $firstname ." ". $lastname?></b> <br>You Are Number You Use For Transaction is <b><?php echo $phone_number?></b>
					</p>
					<a href="index.php?p=dashboard" class="btn btn-primary">Back</a>
				</form>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-1"></div>
<!-- ending add acount-->
