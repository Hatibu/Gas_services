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
	
	$sql = "UPDATE order_tbl SET Type1 ='".$type01."',Type2='".$type02."',Amount1='".$amount1."',Amount2='".$amount2."',Quntity1='".$Qnty1."',Quntity2='".$Qnty2."',Total='".$total."' WHERE dealer_id='".$dealer_id."' AND status='0'";
	$result = mysqli_query($connection,$sql);

	if(!$result){

		echo "
		<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  Failure To Update Your Order ..........!!!</b>
		</div>

		";
	}else{

		echo "
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>  Success To Update Your Order ......!</b>
			</div>
			";
	}




}

?>