<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online Gas Service </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendors/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/vendors/font-awesome/css/font-awesome.css" rel="stylesheet" />   
  </head>

<body style="font-family: 'Open Sans', sans-serif; font-size:15px; background-color: #424a5d;">
	<!-- starting of container -->

        <br><br>
		<div class="login-box">
			<div class="login-logo">
			<p class="text-white text-uppercase"><b> Gas Service</b> <span class="icon-sphere"></span> </p>
		</div>
        <div class="login-box-body">
            <div>
                <?php
                    require ("ajax_function/loginfunction.php");
                ?>
            </div>
            <h5 class="login-box-msg pt-10 text-black text-regular content-group">Sign in to your account <small class="display-block">Enter your credentials below</small></h5>
            <form method="POST">
            <div class="form-group has-feedback ">
                <input type="text" name="username" required="" class="form-control" value="" placeholder="Enter your ID">
                <span class="fa fa-user form-control-feedback" style="margin:10px 0px 20px 0px;"></span>
            </div>
            <div class="form-group has-feedback ">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="fa fa-lock form-control-feedback" style="margin:10px 0px 20px 0px;"></span>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn primary btn-block" name="submit">Sign In &nbsp; <i class="icon-arrow-right13"></i>
                </button>
            </div>
            <div class="text-bold text-muted ">
                <p class="text-center">
                    
                </p>
            </div>
            </form>

        </div>


        <p class="text-center copyright"><br>
            Copyright © 2018 <b> <a class="text-white" href="#"> Gas Booking Service </a> </b>
        </p>

    </div>

    <!-- ./wrapper -->
	<!-- Ending of container -->
	
</body>
</html>