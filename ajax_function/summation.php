<?php

if(isset($_POST["summation1"])){

	$price = $_POST["price"];
	$amount2 = $_POST["amount2"];
	$amount1=$_POST["amount1"];
	$quntity=$_POST["quntity"];
	$total = $price*$quntity;
	$total_amount = $amount2+$total;

	echo $total_amount;

}

if(isset($_POST["summation2"])){


	$price = $_POST["price"];
	$amount2 = $_POST["amount2"];
	$amount1=$_POST["amount1"];
	$quntity=$_POST["quntity"];
	$total = $price*$quntity;
	$total_amount = $amount1+$total;

	echo $total_amount;
}








?>