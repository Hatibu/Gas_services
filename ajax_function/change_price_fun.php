<?php

require ("../database/connection.php");

if (isset($_POST["update1"])) {

	$type01 = $_POST["type1"];
	$price = $_POST["new_price"];
	
	$sql = " UPDATE price_tbl SET Price='".$price."' WHERE Type='".$type01."'";
	$result = mysqli_query($connection,$sql);
	if ($result) {
		echo "
	    <div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b> Success To Update Type1......</b>
		</div>
	    ";
	}else{
		echo "
	    <div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  Failure To Update Type1......!</b>
		</div>
	    ";
	}

}

if (isset($_POST["update2"])) {

	$type02 = $_POST["type2"];
	$price = $_POST["new_price"];
	
	$sql = " UPDATE price_tbl SET Price='".$price."' WHERE Type='".$type02."'";
	$result = mysqli_query($connection,$sql);
	if ($result) {
		echo "
	    <div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b> Success To Update Type2......</b>
		</div>
	    ";
	}else{
		echo "
	    <div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<b>  Failure To Update Type2......!</b>
		</div>
	    ";
	}

}





















?>