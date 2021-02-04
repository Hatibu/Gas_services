<?php
require ("../database/connection.php");


if (isset($_POST["OutBox"])){

	$user= $_POST["user"];
	$user_id= $_POST["user_id"];

	if ($user=="Dealer"){

			$sql = "SELECT * FROM notification_tbl WHERE User_from_type='".$user_id."' ORDER BY Create_time DESC";
			$result = mysqli_query($connection,$sql);
			$num = mysqli_num_rows($result);
			if($num>0){
				while($row = mysqli_fetch_array($result)){

		?>
			<div class='col-md-6'>
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<p>To: <?php echo $row["To_user"];?></p>
					</div>
					<div class='panel-body'>
						<?php echo $row["Message"]; ?>	
					</div>
					<div class='panel-heading'>
						<?php echo $row["Create_time"];?>
						<a href="#" remove_id="<?php echo $row["ID"];?>" class="btn btn-danger btn-sm pull-right" style=" margin: -5px -10px 0px 0px;" id="delete">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</div>
				</div>
			</div>				


		<?php	
				}

			}else{
				echo "
			        <div class='alert alert-warning'>
			            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			            <b>You Dont Have Any OutBox...!</b>
			        </div>
			    ";
			}
			

	}else{	
			$sql = "SELECT * FROM notification_tbl WHERE User_from_type='".$user."' ORDER BY Create_time DESC";
			$result = mysqli_query($connection,$sql);
			$num = mysqli_num_rows($result);
			if($num>0){
				while($row = mysqli_fetch_array($result)){

		?>
			<div class='col-md-6'>
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<p>To: <?php echo $row["To_user"];?></p>
					</div>
					<div class='panel-body'>
						<?php echo $row["Message"]; ?>	
					</div>
					<div class='panel-heading'>
						<?php echo $row["Create_time"];?>
						<a href="#" remove_id="<?php echo $row["ID"];?>" class="btn btn-danger btn-sm pull-right" style=" margin: -5px -10px 0px 0px;" id="delete">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</div>
				</div>
			</div>				


		<?php	
				}

			}else{
				echo "
			        <div class='alert alert-warning'>
			            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			            <b>You Dont Have Any OutBox...!</b>
			        </div>
			    ";
			}
		}	

}



if (isset($_POST["InBox"])){

	$user= $_POST["user"];
	$user_id= $_POST["user_id"];

	if ($user=="Dealer") {

			$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user_id."' AND Status ='1' ORDER BY Create_time DESC";
				$result = mysqli_query($connection,$sql);
				$num = mysqli_num_rows($result);
				if($num>0){
					while($row = mysqli_fetch_array($result)){

			?>
				<div class='col-md-6'>
					<div class='panel panel-default'>
						<div class='panel-heading'>
							<p>From <?php echo $row["User_from_type"];?></p>

							<a href="#" view_id="<?php echo $row["ID"];?>" class="btn btn-primary btn-sm pull-right" style=" margin: -30px -10px 0px 0px;" id="view_inbo" user_level="<?php echo $user;?>" from="<?php echo $row["User_from_type"];?>" username="<?php echo $user_id?>">
								<span class="glyphicon glyphicon-">Reply</span>
							</a>

						</div>
						<div class='panel-body'>
							<?php echo $row["Message"]; ?>	
						</div>
						<div class='panel-heading'>
							<?php echo $row["Create_time"];?>
							<a href="#" remove_id="<?php echo $row["ID"];?>" class="btn btn-danger btn-sm pull-right" style=" margin: -5px -10px 0px 0px;" id="delete_inbo">
							<span class="glyphicon glyphicon-trash"></span>
							</a>
						</div>
					</div>
				</div>				


			<?php	
					}

				}else{
					echo "
				        <div class='alert alert-warning'>
				            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				            <b>You Dont Have Any InBox...!</b>
				        </div>
				    ";
				}
	}else{

			$sql = "SELECT * FROM notification_tbl WHERE To_user ='".$user."' AND Status ='1' ORDER BY Create_time DESC";
			$result = mysqli_query($connection,$sql);
			$num = mysqli_num_rows($result);
			if($num>0){
				while($row = mysqli_fetch_array($result)){

		?>
			<div class='col-md-6'>
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<?php 
							if($row["User_from_type"]!=$row["Description_user"]){
						?>
						<p>From <?php echo $row["Description_user"];?></p>
						<?php
							}else{
						?>
							<p>From <?php echo $row["User_from_type"];?></p>
						<?php
							}
						?>
							<?php 
								if($row["User_from_type"]!="New Process Order" && $row["User_from_type"]!= "New Order" && $row["User_from_type"]!= "New Info"){
							?>
							<a href="#" view_id="<?php echo $row["ID"];?>" class="btn btn-primary btn-sm pull-right" style=" margin: -30px -10px 0px 0px;" id="view_inbo" user_level="<?php echo $user;?>" from="<?php echo $row["User_from_type"];?>" username="<?php echo $user_id?>">
								<span class="glyphicon glyphicon-">Reply</span>
							</a>
							<?php
								}
							?>
					</div>
					<div class='panel-body'>
						<?php echo $row["Message"]; ?>	
					</div>
					<div class='panel-heading'>
						<?php echo $row["Create_time"];?>
						<a href="#" remove_id="<?php echo $row["ID"];?>" class="btn btn-danger btn-sm pull-right" style=" margin: -5px -10px 0px 0px;" id="delete_inbo">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</div>
				</div>
			</div>				


		<?php	
				}

			}else{
				echo "
			        <div class='alert alert-warning'>
			            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			            <b>You Dont Have Any InBox...!</b>
			        </div>
			    ";
			}
	}

}

?>