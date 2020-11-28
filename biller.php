<!DOCTYPE html>
<html>
<head>
	<title>VA Tech - SaaS Applications for Businesses</title>
<?php
require("asset.php");
?>
<style type="text/css">
#middle{
	position: relative;
}
#middle:before{
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: black;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out;
  margin-top: 12px;
}
#middle:hover:before {
  visibility: visible;
  transform: scaleX(1);
}

.collapsing {
    transition: none;
}/*
#middle a[aria-expanded="true"]{
	  position: absolute;
	  content: "";
	  width: 100%;
	  height: 1px;
	  bottom: 0;
	  left: 0;
	  background-color: black;
	  margin-top: 12px;
	  z-index: 9;
}*/
.jumbotron{
	height: 60vh;
}
.coll{
	margin-left: 100px;
	margin-right: 100px;
	margin-top: 9vh;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
  z-index: 2;
}

.carousel-indicators1 {
    left: 0;
    margin-left: 5px;
    width: 100%;
    top:0;
    margin-top: -90px;

}
/* Indicators list style */
.carousel-indicators1 li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    width: 100px;
}
/* Indicators images style */
.carousel-indicators1 img {
    /*border: 2px solid #FFFFFF;*/
    float: left;
    height: 54px;
    left: 0;
    width: 100px;
    
}
/* Indicators active image style */
.carousel-indicators1 .active img {
    /*border: 2px solid #428BCA;*/
    opacity: 0.7;
    
}

#biller{
	margin-top: 70vh;
	margin-bottom: 3vh;
}
i{
	font-size: 90px;
}
.w-100{
	display: none;
}
#conta{
	width: 60%;
}
#slider{
	margin-left: 100px;margin-right: 100px;margin-top: 15px;
}
.tn{
	width: 50px;
	height: 50px;
}

#tn-grid{
	max-width: 30%;
}
.top-space{
	margin-top: 30vh;
}
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
    transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;
}
.card:hover{
     transform: scale(1.05);
  	 box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
.card:hover > .card-body > button{
	transform: scale(1.05);
	background-color: white;
	color: black;
}
.globe{
	background-image: url(assets/img/globe1.png);
	background-repeat: no-repeat;
	background-position: left;
}
.board{
	background-color: orange;
	height: 200px;
	margin-left: 60px;
	margin-right: 60px;
	margin-top: 150px;
	margin-bottom: 180px;	
}
.customer{
	height: 450px;
	margin-top: 21vh;
}
.scase{
	margin-top: 21vh;
	height: 40vh;
}
.wrapper{
	margin-top: 75px;
}
@media only screen and (max-device-width: 640px) {
.carousel-indicators {
    left: 0;
    margin-left: 5px;
    width: 100%;
    top:0;
    margin-top: -90px;
    display: grid;
    position: relative;
}
.carousel-indicators li {
    border: medium none;
    border-radius: 0;
    /*float: left;*/
    /*height: 54px;*/
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    /*width: 100px;*/
}

.img-responsive1{
	width: 80vw;
	height: 40vh;
}
.jumbotron{
	height: 90vh;
}
#biller{
	margin-top: 30vh;
}
i{
	font-size: 60px;
}
.w-100{
	display: grid;
}
#conta{
	width: 100%;
}
.collapse{
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 9vh;
}
#slider{
	margin-left: 0px;margin-right: 0px;margin-top: 21vh;
}
.tn{
	width: 30px;
	height: 30px;
}
#tn-grid{
	max-width: 30%;
}
.board h3{
	font-weight: 100;

}
.customer{
	height: 145vh;
	margin-top: 21vh;
}
.scase{
	height: 60vh;
}
.globe{
	margin-bottom: 180px;
}
}
</style>
</head>
<body>
<?php 
include 'nav.php';
?>

<div class="wrapper">
<div class="jumbotron" style="background-color: orange;">
	<center>
		<h1><b>Online GST Compliant Invoicing for your Retail Business</b></h1>
		<p>Simple, Customizable and Easy to use Solution for Invoicing with GST Compliance.</p>
		<a href="signup_free.php"><button class="btn btn-lg btn-danger">Access for free</button></a>
	</center>
	<div class="container" style="margin-top: 9vh;">
	<center>
	<img src="assets/img/bill.png" class="img-responsive" width="80%" height="70%">
	</center>
	</div>
</div>

<div class="container" id="biller" style="">
<center>
<img src="assets/img/biller.png" class="img-responsive" width="90px" height="90px">
</center>
</div>

<div class="container">
	<center>
	<h2>Small Business to Large scale businesses can use Biller. Easy to use Design and Customization as per your requirement</h2>
	</center>
</div>


<div class="col-lg-12 top-space">
<div id="mm">
<div class="container" id="conta" style="margin-top: 9vh;">
<div class="row">
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#stocks">
			<i class="pe-7s-note2"></i>
		</a>Stocks
	</div>
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#suppliers">
		<i class="pe-7s-bicycle"></i>
		</a>Suppliers
	</div>
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#invoices">
		<i class="pe-7s-leaf"></i>
		</a>Invoices
	</div>
	<div class="w-100"></div>
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#balances">
		<i class="pe-7s-news-paper"></i>
		</a>Balance
	</div>
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#returns">
		<i class="pe-7s-back-2"></i>
		</a>Returns
	</div>
	<div class="col" id="middle">
		<a data-toggle="collapse" href="#remind">
		<i class="pe-7s-bell"></i>
		</a>Reminders
	</div>
</div>
</div>


<div class="container-fluid">
<div class="collapse coll show" id="stocks" style="">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/bill.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Stock Tracking</h3>
			<p>Track your stocks</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>


<div class="collapse coll" id="suppliers">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/supp.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Supplier Tracking</h3>
			<p>Track your Suppliers</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>


<div class="collapse coll" id="invoices">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/inv.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Invoice Tracking</h3>
			<p>Track your Invoices</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>


<div class="collapse coll" id="balances">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/bal.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Balance Tracking</h3>
			<p>Track your Balances</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>


<div class="collapse coll" id="returns">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/return.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>


<div class="collapse coll" id="remind">
	<div class="row mb-2">
		<div class="col-lg-8">
			<img src="assets/img/out.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-lg-4">
			<h3>Reminder Tracking</h3>
			<p>Track your Reminders</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
</div>
</div>
</div>
</div>

<!-- Carousel -->
<!-- <div class="col-lg-12">
<div id="slider" class="carousel carousel-fade" data-ride="carousel">

	<-- Indicators -->
		<!-- <ol class="carousel-indicators">
		<div class="row">
		  <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="0" class="col active">
             <img src="assets/img/icons/rem.png" class="tn">
             
          </li>
          </div>
          <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="1">
              <img src="assets/img/icons/su.png" class="tn">
            
          </li>
      	  </div>
      	  <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="2">
              <img src="assets/img/icons/st.png"class="tn">
            
          </li>
          </div>
          <div class="w-100"></div>
          <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="3"> 
             <img src="assets/img/icons/ba.png" class="tn">
             
          </li>
          </div>
          <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="4">
             <img src="assets/img/icons/inv.png" class="tn">
             
          </li>
          </div>
          <div class="col" id="tn-grid">
          <li data-target="#slider" data-slide-to="5">
             <img src="assets/img/icons/re.png" class="tn">
             
          </li>
          </div>
          	</div>
        </ol> --> 
<!-- Indicators icons -->
<!--   <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/return.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/bal.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Balance Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/out.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/out.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/out.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mb-2">
		<div class="col-sm-8">
			<img src="assets/img/out.png" class="img-responsive1" width="600px" height="400px">
		</div>
		<div class="col-sm-4">
			<h3>Return Tracking</h3>
			<p>Track your Returns</p>
			<button class="btn btn-lg btn-outline-success">Learn more</button>
		</div>
	</div>
    </div>
  </div>
</div>
</div> -->
<!-- Carousel -->

<div class="jumbotron board">
	<center>
	<h3>Simplify your Business with Smart Billing and Create Beautiful Invoices. Manage Sales by Automated workflow without tracking manually.
	</h3>
	</center>
</div>

<div class="container">
<div class="row">
<div class="col-lg-4">
	<div class="card">
	  <div class="card-body">
	  	<center>
	  		<img src="assets/img/auto.png" width="60px" height="60px">
	  	</center>
	  	<div class="textarea" style="padding-top: 12px;line-height: 30px;">
	  		<b><center><h3>Automated Workflow</h3></center></b>
	    <p>Don't waste your precious time on tracking Sales and Expenses manually. Just click and watch the entire process of your Business by our Automated workflow. Make your process of billing and maintaining stocks works automatically and get real-time reports.</p>
	  	</div>
	  </div>
</div>
</div>
<div class="col-lg-4">
	<div class="card">
	  <div class="card-body">
	  	<center>
	  		<img src="assets/img/dcustom.png" width="60px" height="60px">
	  	</center>
	  	<div class="textarea" style="padding-top: 12px;line-height: 30px;">
	  		<b><center><h3>Design Customization</h3></center></b>
	    <p>Customized designs for all types of business. Create your own way of styling and color them
	    as well. Use our unique designs to style your invoice and attract your clients. A good design is everything and it will tells you the clients who you are and what you do.</p>
	  	</div>
	  </div>
</div>
</div>
<div class="col-lg-4">
	<div class="card">
	  <div class="card-body">
	  	<center>
	  		<img src="assets/img/easy.png" width="60px" height="60px">
	  	</center>
	  	<div class="textarea" style="padding-top: 12px;line-height: 30px;">
	  		<b><center><h3>Easy-to-use UI</h3></center></b>
	    <p>Still got stucked into a complex system for your Business!? No Worries, we provided Billing 
	    Solutions which is easy to use and can be used by everyone. Persons owing from Small Business to Large Business can use it easily. Simple to use, yet provide complex Business solutions</p>
	  	</div>
	  </div>
</div>
</div>
</div>	
</div>


<div class="jumbotron customer" style="background-color: orange;">
<div id="slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		
          <li data-target="#slider" data-slide-to="0" class="active">
             
          </li>
          
          <li data-target="#slider" data-slide-to="1">
            
          </li>
      	  
          <li data-target="#slider" data-slide-to="2">
              
          </li>
        </ol> 
<!-- Indicators icons -->
<div class="carousel-inner">
    <div class="carousel-item active">
    	<center>
        <img src="assets/img/faces/face-1.jpg" class="rounded-circle">
        <p><label>CEO - Alph Corps</label></p>
        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis varius ipsum. Curabitur in lacus odio. Donec malesuada dignissim tempus. Praesent nec massa bibendum, rutrum arcu at, suscipit magna. Pellentesque vestibulum ligula accumsan varius tincidunt. Phasellus a dui vulputate, vehicula risus nec, mattis turpis. Vestibulum nec neque vitae metus semper ultrices eget ac odio. Etiam eleifend suscipit leo, sit amet accumsan nisi convallis et. N</h5>
        </center>
    </div>
    <div class="carousel-item">
      	<center>
        <img src="assets/img/faces/face-6.jpg" class="rounded-circle">
        <p><label>Founder - Karda Mart</label></p>
        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis varius ipsum. Curabitur in lacus odio. Donec malesuada dignissim tempus. Praesent nec massa bibendum, rutrum arcu at, suscipit magna. Pellentesque vestibulum ligula accumsan varius tincidunt. Phasellus a dui vulputate, vehicula risus nec, mattis turpis. Vestibulum nec neque vitae metus semper ultrices eget ac odio. Etiam eleifend suscipit leo, sit amet accumsan nisi convallis et. N</h5>
        </center>
    </div>
    <div class="carousel-item">
      <center>
        <img src="assets/img/faces/face-7.jpg"  class="rounded-circle">
        <p><label>CEO - Beta Corps</label></p>
        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis varius ipsum. Curabitur in lacus odio. Donec malesuada dignissim tempus. Praesent nec massa bibendum, rutrum arcu at, suscipit magna. Pellentesque vestibulum ligula accumsan varius tincidunt. Phasellus a dui vulputate, vehicula risus nec, mattis turpis. Vestibulum nec neque vitae metus semper ultrices eget ac odio. Etiam eleifend suscipit leo, sit amet accumsan nisi convallis et. N</h5>
        </center>
    </div>
    
    </div>
  </div>
</div>

<div class="container" style="margin-top: 21vh;">
	<center><h1 style="margin-bottom: 9vh;">Cheap Pricing - Rich Features</h1></center>
<div class="row">
	<div class="col-sm-6">
		<center>
		<div class="card text-white mb-3" style="max-width: 18rem;background-color: #891a18;">
			<div class="card-body">
				<img src="assets/img/free.png" width="90px" height="90px">
			    <h5 class="card-title">Free Plan</h5>
			    <p class="card-text">Good for Small Business with 5 to 6 Customers</p>
			    <button class="btn btn-lg btn-primary">Free Sign up</button>
			</div>
		</div>
		</center>
	</div>
	<div class="col-sm-6">
		<center>
		<div class="card text-white mb-3" style="max-width: 18rem;background-color: #0c0f59;">
			<div class="card-body">
				<img src="assets/img/ecart.png" width="90px" height="90px">
			    <h5 class="card-title">Pick your Plan</h5>
			    <p class="card-text">Good for Large Business with more Customers</p>
			    <button class="btn btn-lg btn-danger">Buy now</button>
			</div>
		</div>
		</center>
	</div>
</div>
	
</div>

<div class="jumbotron scase" style="background-color: azure;">
	<center>
		<h2>Generate High class invoices within a second using our Software</h2><br>
		<button class="btn btn-outline-success btn-lg">Access Biller Now</button>
	</center>
</div>
<div class="jumbotron globe" style="height: 40vh;margin-top: -31px;background-color: white;">
	<center>
	<img src="assets/img/logo1.png" width="100px" height="100px">
	<h2>Made to make every Business Easy. Be Globally local.</h2>
	</center>
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
var $myGroup = $('#mm');
    $myGroup.on('show.bs.collapse','.collapse', function() {
        $myGroup.find('.collapse').collapse('hide');
    });
//  setTimeout(function(){
//   $myGroup.find('.collapse').collapse('hide');

// },3000);
$('.carousel').carousel({
   interval: 2000
});
$('#slider').on('slide.bs.carousel','', function () {
  
});
</script>
</html>
