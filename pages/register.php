
<body>
	<section id="content">
		<!-- start row -->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<!-- start panel -->
			<div class="panel panel-default">

			<!-- panel-heading -->
			<div class="panel-heading" id="panel">
				<p class="centered">Getting your Register</p>
			</div>
			<!-- ending panel-heading -->

			<!-- start form -->
			<form name="registerform" onsubmit="return formvalidation()">
				<!-- start panel body -->
				<div class="panel-body">
				<div class="col-md-12">
					<!-- start first row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="firstname" onblur="first_name();">
								<p id="first_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" id="middlename" onblur="middle_name();">
								<p id="middle_error" style="color: red;"></p>
							</div>
						</div>
					</div>
					<!-- ending first row -->

					<!-- start second row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname"
								onblur="last_name();">
								<p id="last_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" id="phonenumber" onblur="phone_number();">
								<p id="phone_error" style="color: red;"></p>
							</div>
						</div>
					</div>
					<!-- ending second row -->

					<!-- start third row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" id="username"
								onblur="user_name();">
								<p id="user_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" id="email" onblur="emailvalidation();">
								<p id="email_error" style="color: red;"></p>
							</div>
						</div>	
					</div>
					<!-- ending third row -->

					<!-- start four row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" id="password" onblur="passwordvalidation();">
								<p id="password_error" style="color: red;"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" id="Confm_Password">
								<p id="confirm_error" style="color: red;"></p>
							</div>
						</div>
					</div>
					<!-- ending four row -->

					<!-- start button row -->
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<div class="form-group" >
								<input type="submit" class="btn btn-default" value="submit">
							</div>
						</div>
						<div class="col-md-5"></div>
					</div>
					<!-- ending button row -->


				</div>
				</div>
				<!-- ending panelbody -->
			</form>
			<!-- ending form -->	
			</div>
			<!-- ending panel -->
		</div>
		<div class="col-md-2">
		<!-- ending row -->
	</section>
</body>
</html>