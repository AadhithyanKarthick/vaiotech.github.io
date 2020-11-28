<!DOCTYPE html>
<html>
<head>
	<title>VA Tech - SaaS Applications for Businesses</title>
<?php
require("asset.php");
?>
<style type="text/css">
#jumbo{
	height: 110vh;
	background-color: #154284;
}

#card .card {
   margin-top: 30px;
   /*border-style: none;*/
   width: 18rem;
   height: 18rem;
}
.wrapper{
	margin-top: 75px;
}
.card-title{
	margin-top: 20px;
}

.btn-success:focus{
	background-color: red;
}
.fa{
	display: none;
}
.btn-success:focus > .fa{
	background-color: red;
	display: contents;
}
@media only screen and (max-device-width: 767px) {
	#card .card {
   margin-left: 15px;
   margin-top: 30px;
   width: 18rem;
   height: 18rem;
}
  #jumbo{
	position: relative;
	margin-top: 60vh;
	height: 100vh;
    }
    .wrapper{
	margin-left: 9px;
}
  
}

</style>

</head>
<body>
<?php 
include 'nav.php';
?>
<div class="wrapper">
<div class="jumbotron" style="background-color: white;height: 10vh;">
	<center>
		<h1><b>Innovative Project Ideas</b></h1>
	</center>
</div>

<div class="container">
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		<div class="col" id="card">
				<div class="card">
					<div class="card-body">
						<img src="assets/img/project_ico/hand.png" width="60px" height="60px">
						<h5 class="card-title">Hand Written Recognition</h5>
						<p class="card-text">Domain: Artificial Intelligence</p>
						<p class="card-text">Language: Python</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
					</div>
				</div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/iot.png" width="60px" height="60px">
						<h5 class="card-title">Biometric Circuit Breaker</h5>
						<p class="card-text">Domain: Internet of Things</p>
						<p class="card-text">Language: Embedded C</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
					</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/pmt1.png" width="60px" height="60px">
						<h5 class="card-title">Payment Conflict Avoidance</h5>
						<p class="card-text">Domain: Web Development</p>
						<p class="card-text">Language: Php</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/voice.png" width="60px" height="60px">
						<h5 class="card-title">Voice Based Home Automation</h5>
						<p class="card-text">Domain: Internet of Things</p>
						<p class="card-text">Language: Embedded C</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/road1.png" width="60px" height="60px">
						<h5 class="card-title">Curved Lane Detection</h5>
						<p class="card-text">Domain: Artificial Intelligence</p>
						<p class="card-text">Language: Python</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/park.png" width="60px" height="60px">
						<h5 class="card-title">Rental Parking System</h5>
						<p class="card-text">Domain: Web Technologies</p>
						<p class="card-text">Language: HTML5, Php</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>

		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/globe.png" width="60px" height="60px">
						<h5 class="card-title">Climate Change Analytics</h5>
						<p class="card-text">Domain: Data Analytics</p>
						<p class="card-text">Language: Python</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/sale.png" width="60px" height="60px">
						<h5 class="card-title">Sales Trend Analysis</h5>
						<p class="card-text">Domain: Data Analytics</p>
						<p class="card-text">Language: SQL</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
						<img src="assets/img/project_ico/stock.png" width="60px" height="60px">
						<h5 class="card-title">Stock Market Analysis</h5>
						<p class="card-text">Domain: Big Data</p>
						<p class="card-text">Language: Java</p>
						<center><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Interested</button></center>
						</div>
					 </div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 90px;">
	<center><h3>Still Don't know where to start, Feel free to Contact us</h3></center><br><br>
	<div class="row">
		<div class="col">
			<div class="media">
  			<img src="assets/img/support.png" width="60px" height="60px">
  			<div class="media-body">
    			<a href="mailto:support@vaiotech.com"><h5>support@vaiotech.com</h5></a>
    			<a href="mailto:vatechstart@outlook.com"><h5>vatechstart@outlook.com</h5></a>
  			</div>
			</div>
		</div>

		<div class="col">
			<div class="media">
  			<img src="assets/img/call.png" width="60px" height="60px">
  			<div class="media-body">
    			<a href="tel:6380373590"><h6>+91-6380373590</h6></a>
				<a href="tel:6374959503"><h6>+91-6374959503</h6></a>
  			</div>
			</div>	
		</div>
	</div>	
</div>

</div>


<?php
require 'footer.php';
?>
</body>
<?php 
require 'js.php';
?>
<script type="text/javascript">
 AOS.init();
	
</script>
</html>
