<?php

if(isset($_POST["submit"])){

	$employee_id = $_POST["ID_employee"];
	$fname = $_POST["fname"];
	$m_name = $_POST["m_name"];
	$lname =$_POST["lname"];
	$nati = $_POST["nati"];
	$phon = $_POST["phone"];
	$email = $_POST["email"];

	$sql = " UPDATE employees_tbl SET first_name ='".$fname."', middle_name = '".$m_name."',last_name = '".$lname."',nationality ='".$nati ."',p_number ='".$phon."', email ='".$email."' WHERE ID_employee ='".$employee_id."'";
	$result = mysqli_query($connection,$sql);

	if (!$result) {
		echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Failure To Update Your Info ......!</b>
					</div>
			";
	}else{

		echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>  Success To update Your Info ......!</b>
					</div>
			";
	}

}







?>