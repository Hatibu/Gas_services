<script type="text/javascript">
	start_countdown();
	function start_countdown(){
		var counter = 10;
		mytime = setInterval( function(){
			if(counter>=0){
				document.getElementById('timecount').innerHTML="Your Order will Expire In"+ counter +"Sec";
			}
			if(counter==0){
				$.post('ajax_function/time_counter_fun.php',{time:1},
				function(data){
				$("#timecount").html(data);
				});
			}
			counter--;
		},1000);
	}
</script>


<script>
date_default_timezone_set('africa/nairobi');
$startTime = $date_time;

//echo "Starting Time:".$startTime;

$convertedTime = date('Y-m-d H:i:s',strtotime('+1 minutes',strtotime($startTime)));
//echo "convertedTime:".$convertedTime;

// Set the date we're counting down to
var convertedTime = "<?php echo $convertedTime ?>";
var countDownDate = new Date(convertedTime).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
   $.post('ajax_function/time_counter_fun.php',{time:1},
		function(data){
		$("#demo").html(data);
	});
  }

}, 1000);

</script>



<!-- starting-->
<div class="col-md-12">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Add Account</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<form>
					
				</form>
				<!-- ending form-->
			</div>
			<!-- ending panel-body-->

	</div>
	<!-- ending of panel-->
</div>
<!-- ending-->

$start = strtotime($_POST['start']);
	$startdate = date("Y-m-d", $start);
	$end = strtotime($_POST['end']);
	$enddate = date("Y-m-d", $end);


	