<?php

if($_SESSION["level"]!= "SuperDealer"){
	header('location:index.php?p=error');
}

?>
<!-- starting-->
<div class="col-md-12">
	<!-- starting off panel-->
	<div class="panel panel-default">
		<!-- starting panel-heading-->
		<div class="panel-heading">
			<p class="centered">Generate Store Report</p>
		</div>
		<!-- ending panel-heading-->

			<!-- starting panel-body-->
			<div class="panel-body">
				<!-- starting form-->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							<label> Choose Option</label>
							<select id="time" class="form-control" onchange="report();" required="">
								<option value="">Choose</option>
								<option value="Day">Day</option>
								<option value="Week">Week Or Than One Day</option>
								<option value="Month">Month</option>
							</select>
						</div>

						<div id="first_request">
							<!-- get the field -->		 
						</div>
						<div class="col-md-3">
						<br>	
						<a class="btn btn-primary" onclick="store_report();">Generate Store Report</a>
						</div>
					</div>
				</div>	
			<!-- ending form-->
		</div>
		<!-- ending panel-body-->
	</div>
</div>
<!-- starting-->		
<div class="col-md-12">
<div id="get_report">
	<!--get the report-->
</div>	
</div>