<?php

if(isset($_POST["submit"])){

	$ID_employee =$_POST["ID_employee"];
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$nati = $_POST["nati"];
	$pnumber = $_POST["phone"];
	$email = $_POST["email"];
	$posit = $_POST["posit"];


	$sql = " UPDATE employees_tbl SET first_name = '".$fname."',middle_name = '".$mname."',last_name = '".$lname."',gender = '".$gender."',age = '".$age."',nationality = '".$nati."',p_number = '".$pnumber."',email = '".$email."' WHERE ID_employee='".$ID_employee."' ";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Updates Employees Details......!</b>
					</div>
				";

			}else{

				echo"
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Success To Updates Employees Details......!</b>
					</div>

					";

			}
}


















?>