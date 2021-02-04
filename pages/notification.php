<?php
require ("ajax_function/notification_send_fun.php");

?>
<div id="reply_message">	
<!-- starting -->
<div class="col-md-2"></div>
<div class="col-md-8">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Send Message</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form method="POST">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>To</label>
								<select class="form-control" required name="To">
									<option value="">choose User</option>
									<?php
										if($_SESSION["level"] == "Dealer"){
									?>
									<option value="Administrator">Administrator</option>
									<option value="Accountant">Accountant</option>
									<?php
										}
									?>
									<?php
										if($_SESSION["level"] == "Accountant"){
									?>
									<option value="Administrator">Administrator</option>
									<option value="SuperDealer">Manager</option>
									<option value="StoreKeeper">StoreKeeper</option>
									<?php
										}
									?>
									<?php
										if($_SESSION["level"] == "StoreKeeper"){
									?>
									<option value="Administrator">Administrator</option>
									<option value="SuperDealer">Manager</option>
									<option value="Accountant">Accountant</option>
									<?php
										}
									?>
									<?php
										if($_SESSION["level"] == "SuperDealer"){
									?>
									<option value="Administrator">Administrator</option>
									<option value="StoreKeeper">StoreKeeper</option>
									<option value="Accountant">Accountant</option>
									<?php
										}
									?>
									<?php
										if($_SESSION["level"] == "Administrator"){
									?>
									<option value="SuperDealer">Manager</option>
									<option value="StoreKeeper">StoreKeeper</option>
									<option value="Accountant">Accountant</option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" rows="5" cols="40" placeholder="write your Message" required name="message"></textarea>
								<input type="hidden" name="From" value="<?php echo $_SESSION['level'];?>">
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['username'];?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<input type="submit" class=" btn btn-primary" name="post" value="POST">
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
					<!-- loading message-->
				</div>
				<div id="OutBox_notification">
					<!--loading sms-->
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
						<!-- loading message-->
					</div>
					<!-- ending form-->
				</div>
				<!-- ending panel-body-->

		</div>
		<!-- ending of panel-->
	</div>
</div>
</body>