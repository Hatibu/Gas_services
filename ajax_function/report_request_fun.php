<?php
if (isset($_POST["request"])) {

	$time = $_POST["time"];
	//echo $time;
	if($time == "Day"){
?>
	
	<div class="col-md-3">
		<label>Select A Date</label>
		<input type="date" id="date_time" class="form-control" required="">
	</div>
<?php
	}
	elseif($time == "Week"){
?>
	<div class="col-md-3">
		<label>From Date</label>
		<input type="date" id="From" class="form-control">
		<p id="from_error" style="color: red;"></p>
	</div>	
	<div class="col-md-3">
		<label>To Date</label>
		<input type="date" id="To" class="form-control">
	</div>
<?php
	}
	elseif ($time == "Month") {		
?>

	<div class="col-md-3">
		<label>Select A Month With Year</label>
		<input type="month" id="month" class="form-control">
	</div>

<?php
	}		
}




?>