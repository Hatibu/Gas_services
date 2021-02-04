<?php

require ("../database/connection.php");

if (isset($_POST["now"])) {
	
	$user= $_POST["user"];
	$user_id= $_POST["user_id"];
	//echo $user;
	if($user=="Dealer"){
		
		$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user_id."' AND Status ='0'";
		$result = mysqli_query($connection,$sql);
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while($row =mysqli_fetch_array($result)){

					echo "
					<li>
						<a href='index.php?p=view_notifi&id=".$row["ID"]."'>
		                    <span></span>
		                    <span>".$row["User_from_type"]."</span>
		                </a>
		                <li class='divider'></li>
					</li>
					";
				
			}
		}else{
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> No Notification Found ......!</b>
				</div>
			";
		}

	}else{

		$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user."' AND Status ='0'";
		$result = mysqli_query($connection,$sql);
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while($row =mysqli_fetch_array($result)){

				if ($row["User_from_type"]!= $row["Description_user"]){

					echo "
					<li>
						<a href='index.php?p=view_notifi&id=".$row["ID"]."'>
		                    <span></span>
		                    <span>".$row["Description_user"]."(dealer)</span>
		                </a>
		                <li class='divider'></li>
					</li>
					";

				}else{

					echo "
					<li>
						<a href='index.php?p=view_notifi&id=".$row["ID"]."'>
		                    <span></span>
		                    <span>".$row["User_from_type"]."</span>
		                </a>
		                <li class='divider'></li>
					</li>
					";
				}
			}
		}else{
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> No Notification Found ......!</b>
				</div>
			";
		}
	}

		
}




?>