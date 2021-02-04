<?php
	
if (isset($_GET["id"])){
	
		$ID = $_GET["id"];
		$user = $_SESSION["level"];
		$user_id = $_SESSION["username"];
		$message ="";
		//echo $user;

		if($user == "Dealer"){

			$sql = "UPDATE notification_tbl SET Status ='1' WHERE ID ='".$ID."' AND To_user='".$user_id."'";
				$result = mysqli_query($connection,$sql);
				if ($result) {
					
					$sql1 = "SELECT * FROM notification_tbl WHERE ID ='".$ID."' AND To_user='".$user_id."'";
					$result = mysqli_query($connection,$sql1);
					while($row=mysqli_fetch_array($result)) {
						$message = $row["Message"];
					}

				}else{
					echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b> There Is A Problem With The Notification......!</b>
						</div>
					";
				}

		}else{
				$sql = "UPDATE notification_tbl SET Status ='1' WHERE ID ='".$ID."' AND To_user='".$user."'";
				$result = mysqli_query($connection,$sql);
				if ($result) {
					
					$sql1 = "SELECT * FROM notification_tbl WHERE ID ='".$ID."' AND To_user='".$user."'";
					$result = mysqli_query($connection,$sql1);
					while($row=mysqli_fetch_array($result)) {
						$message = $row["Message"];
					}

				}else{
					echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b> There Is A Problem With The Notification......!</b>
						</div>
					";
				}
		}	
}	


?>
	
<!-- starting -->
<div id="reply_message">
<div class="col-md-2"></div>
<div class="col-md-8">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">View Message</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="POST">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" rows="5" cols="40"><?php echo $message;?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<a href="index.php?p=notifi" class=" btn btn-primary"> COMPOSE</a>
							</div>
						</div>
					</div>
				</form>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<div class="col-md-2"></div>
<!-- ending -->
</div>

<!-- starting -->
<div class="row">
<div class="col-md-6">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">OutBox Messages</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<div id="message_info">
					<!-- loading alert-->
				</div>
				<div id="OutBox_notification">
					
				</div>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
	<div class="col-md-6">
		<!-- starting off panel-->
		<div class="panel panel-default">
			<!-- starting panel-heading-->
			<div class="panel-heading">
				<p class="centered">InBox Messages</p>
			</div>
			<!-- ending panel-heading-->

				<!-- starting panel-body-->
				<div class="panel-body">
					<!-- starting form-->
					<div id="message">
						<!-- loading alert-->
					</div>
					<div id="InBox_notification">
						
					</div>
					<!-- ending form-->
				</div>
				<!-- ending panel-body-->

		</div>
		<!-- ending of panel-->
	</div>
</div>
</body>