
<?php

if(isset($_POST["submit"])){

	$dealer_id = $_POST["dealer_id"];
	$type01 = $_POST["type1"];
	$type02 = $_POST["type2"];
	$Qnty1 = $_POST["Qnt1"];
	$Qnty2 = $_POST["Qnt2"];
	$amount1 = $_POST["amount1"];
	$amount2 = $_POST["amount2"];
	$total = $_POST["Total_amount"];

	date_default_timezone_set('africa/nairobi');
	$date = date('Y-m-d');
	$month = date('Y-m');
	
	$sql = " SELECT * FROM order_tbl WHERE dealer_id='".$dealer_id."' AND status='0'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if ($num >0) {

		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>  Your Already Place A Order Please Pay And Your Be Able To Place Other......!</b>
			</div>
			";
	}
	else{

		$sql = "INSERT INTO order_tbl(Type1,Type2,Amount1,Amount2,Quntity1,Quntity2,Total,dealer_id,order_date,order_month)VALUES ('".$type01."','".$type02."','".$amount1."','".$amount2."','".$Qnty1."','".$Qnty2."','".$total."','".$dealer_id."','".$date."','".$month."') ";

		$result=mysqli_query($connection,$sql);
		if (!$result) {

			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Failure To Insert Your Order ......!</b>
				</div>
				";
		}else{

			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>  Success To Insert Your Order ......!</b>
				</div>
			";

			$sql="SELECT date_time FROM order_tbl WHERE dealer_id='".$dealer_id."'";
			$result = mysqli_query($connection,$sql);
			$num = mysqli_num_rows($result);
			if ($num >0) {
				while ($row=mysqli_fetch_array($result)) {
					$date_time=$row["date_time"];

				}
					
			}
		}

	}


}

?>
