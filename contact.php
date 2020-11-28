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
   margin-left: 54px;
   margin-top: 30px;
   border-style: none;
   width: 18rem;
   height: 18rem;
}
.write{
	margin-left: 120px;
}
.wrapper{
	margin-top: 75px;
}
.contact{
	margin-top: 300px;
}
.letter{
	padding-top: 90px; border: 3px solid black;
}
form{
	margin-left: 60px;
}
@media only screen and (max-device-width: 767px) {
	#card .card {
   margin-left: 15px;
   margin-top: 30px;
   border-style: none;
   width: 18rem;
   height: 18rem;
}
  #jumbo{
	position: relative;
	margin-top: 60vh;
	height: 100vh;
    }
    .write{
    	height: 60px;
    	width: 60px;
    	display: none;
    }
    .contact{
    	margin-top: 900px;
    }
    .letter{
    	padding-top: 0px;

    }
    form{
    	margin-left: 0px;
    	width: 100%;
    	margin: 9 9 9 9px;

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
<div class="jumbotron" style="background-color: #a8d1df;height: 60vh;">
	<center>
		<h1><b>Welcome to VA Tech! We are available 24x7</b></h1>
		<h3>Drop your Query, We will assist you</h3>
	</center>
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		<div class="col" id="card">
				<div class="card">
					<div class="card-body">
						<img src="assets/img/support.png" width="60px" height="60px">
						<h5 class="card-title">Customer Helpline</h5>
						<p class="card-text">Still confused where to start with us? Contact our Support team for queries about our products. We will provide you demo.</p>
						<a href="mailto:support@vaiotech.com"><h5>support@vaiotech.com</h5></a>
					</div>
				</div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
							<img src="assets/img/mail.png" width="60px" height="60px">
							<h5 class="card-title">Upgrade Team</h5>
							<p class="card-text">Facing issues or need a upgrade in functionality of your current product and services. Drop a mail to our Upgrade team.</p>
							<a href="mailto:vatechstart@outlook.com"><h5>vatechstart@outlook.com</h5></a>
						</div>
					  </div>
		</div>
		<div class="col" id="card">
					<div class="card">
						<div class="card-body">
							<img src="assets/img/call.png" width="60px" height="60px">
							<h5 class="card-title">Sales Inquiries</h5>
							<p class="card-text">Wanna speak with us. Need to Cancel or want a new Software Solution for your Business. Contact below</p>
							<a href="tel:6380373590"><h6>+91-6380373590</h6></a>
							<a href="tel:6374959503"><h6>+91-6374959503</h6></a>
						</div>
					 </div>
		</div>
	</div>
</div>

<div class="container contact" style="">
	<center><h1>Get in Touch / Write your review</h1></center>
	<div class="row letter" style="">
		<div class="col-7">
			<form style="">
				<div class="form-group">
					<label>Your Email Address</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Your Message</label>
					<textarea class="form-control" name="message"></textarea>
				</div>
				<button type="submit" class="btn btn-warning btn-lg" style="float: right;">Send</button>
			</form>
		</div>
		<div class="col-5">
			<img src="assets/img/letter.png" class="write" style="">
		</div>
	</div>
</div>


<div class="container" style="margin-top: 100px;">
	<center><h3>Our Corporate Offices</h3></center>
	<div class="row mb-3" style="padding-top: 30px;">
		<div class="col-3">
			<h6>Dindigul</h6>
			<p>RS Road</p>
			<p>Vadamadurai- 624802</p>
		</div>
		<div class="col-3">
			<h6>Theni</h6>
			<p>P.T. Rajan Road</p>
			<p>Samadharmapuram- 625531</p>
		</div>
		<div class="col-6">
			<center><h3>We are Growing...</h3></center>
		</div>
	</div>
</div>

</div>

<?php
require 'footer_c.php';
?>
</body>
<?php 
require 'js.php';
?>
<script type="text/javascript">
 AOS.init();
	
</script>
</html>
