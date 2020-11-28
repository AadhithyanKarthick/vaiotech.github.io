<!DOCTYPE html>
<html>
<head>
	<title>VA Tech - SaaS Applications for Businesses</title>
<?php
require("asset.php");
?>
<style type="text/css">
#customer{
  	margin-top: 66vh;
  }
#customer1{
  	margin-top: 66vh;
  }
#card .card {
   margin-left: 90px;
   margin-top: -99px;
   border-style: none;
   background: transparent;
   color: white;
 
}
.video{
margin-right: 90px;
margin-left: 60px;
}
.video1{
	margin-left: -120px;
}
.colorarea{
	margin-left: -76px;
	height: 600px;
	width: 75%;
}
.colorarea1{
	overflow: revert;
	float: right;
	width: -webkit-fill-available;
	margin-right: -75px;
	margin-left: 160px;
}
canvas {
	height: 30vh;
  width: -webkit-fill-available;
}

/* ---- particles.js container ---- */

#particles-js {
  position: absolute;
  width: 100%;
  height: 88%;
  background-color:black;
  background-image: url("");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
}

.wrapper1{
	margin-top: 75px;
}
@media only screen and (max-device-width: 640px) {

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color:black;
  background-image: url("");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
}

  .wrapper{
  	margin-top: 90vh;
  	align-content: center;
  }
  #customer1{
  	margin-top: 40vh;
  	align-content: center;
  }
#procard{
  	height: 120vh;
  }
  #customer{
  	margin-top: 40vh;
  	align-content: center;
  }
  .colorarea{
  	margin-left: 0px;
	height:0px;
	width: 100%;
	margin-top: 190px;
	position: absolute;
  }
  .colorarea1{
  	margin-left: 0px;
	height:0px;
	width: 100%;
	margin-top: 190px;
	position: absolute;
  }
  .video{
  	flex-basis: 100%;
  	 width: 100%;
	  height: auto;
	  margin-left: 0px;margin-right: 0px;margin-top: 90px;
  }
  .video1{
  	flex-basis: 100%;
  	 width: 100%;
	  height: auto;
	  margin-left: 0px;margin-right: 0px;margin-top: -180px;	
  }
  .wrapper1{
    margin-left: 6px;
  }
}

</style>
</head>
<body>
<?php 
include 'nav.php';
?>
<div class="wrapper1">
<div id="particles-js"></div>
<div class="jumbotron" style="background-color: white;height: 9vh;">
	
	<!-- <div id="card" style="">
	<div class="card">
		<div class="card-body">
			<h1>Make your Business Easy and Fast</h1><br>
		</div>
	</div>
	</div> -->

	<div class="row">
		<div class="col" id="card">
				<img src="assets/img/biller.png" class="img-responsive" width="90px" height="90px">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Invoice</h5>
						<p class="card-text">Flexible billing solution</p>
						<a href="biller.php" class="btn btn-outline-primary btn-sm" style="margin-top: 9px;">Learn More</a>
					</div>
				</div>
		</div>
		<div class="col" id="card">
					<img src="assets/img/check.png" class="img-responsive" width="90px" height="90px">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Invent</h5>
						    <p class="card-text">Inventory System for Business</p>
						    <a href="#" class="btn btn-outline-primary btn-sm" style="margin-top: 9px;">Learn More</a>
						</div>
					  </div>
		</div>
		<div class="col" id="card">
					<img src="assets/img/ecart.png" class="img-responsive" width="90px" height="90px">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">E-Store</h5>
						    <p class="card-text">Build your dream store</p>
						    <a href="#" class="btn btn-outline-primary btn-sm" style="margin-top: 9px;">Learn More</a>
						</div>
					 </div>
		</div>

		<div class="col" id="card">
					<img src="assets/img/cms2.png" class="img-responsive" width="90px" height="90px">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Blog</h5>
						    <p class="card-text">Build your own blogs</p>
						    <a href="#" class="btn btn-outline-primary btn-sm" style="margin-top: 9px;">Learn More</a>
						</div>
					 </div>
		</div>
	</div>
</div>

<div class="wrapper">
<div class="container" id="customer">
<div class="row mb-2">
	<div class="col-sm-8">
		<div class="colorarea" style="background-color: orange;">
			<video class="video" width="700" height="600" class="videoAnimation graph-video" data-statustype="off-track" poster="https://luna1.co/9b651d.png" data-src="assets/img/vid.mp4" muted="" playsinline="" autoplay="" loop="" src="assets/img/vid.mp4"></video>
		</div>	
	</div>

	<div class="col-sm-4">
		<label>Biller</label><br>
		<img src="assets/img/biller.png" class="img-responsive" width="90px" height="90px">
		<h3>Statistical Data of your Sales</h3>
		<h6>Get real time charts and focus on your sales based on fiscal years trend. Keep an eye on your Business sales and turnover</h6>
	</div>
</div>
</div>


<div class="container" id="customer1">
<div class="row mb-2">
	<div class="col-sm-4">
		<label>Invent</label><br>
		<img src="assets/img/check.png" class="img-responsive" width="90px" height="90px">
		<h3>Inventory Management System</h3>
		<h6>Manage your Business by our Invent. A Simplified solution for Managing your Business Inventory</h6>
	</div>
	<div class="col-sm-8">
		<div class="colorarea1" style="background-color: orange;">
			<video class="video1" width="700" height="600" class="videoAnimation graph-video" data-statustype="off-track" poster="https://luna1.co/9b651d.png" data-src="assets/img/vid.mp4" muted="" playsinline="" autoplay="" loop="" src="assets/img/vid.mp4"></video>
		</div>	
	</div>
</div>
</div>



<div class="container" id="customer">
<div class="row mb-2">
	<div class="col-sm-8">
		<div class="colorarea" style="background-color: orange;">
			<video class="video" width="700" height="600" class="videoAnimation graph-video" data-statustype="off-track" poster="https://luna1.co/9b651d.png" data-src="assets/img/vid.mp4" muted="" playsinline="" autoplay="" loop="" src="assets/img/vid.mp4"></video>
		</div>	
	</div>

	<div class="col-sm-4">
		<label>E-Builder</label><br>
		<img src="assets/img/ecart.png" class="img-responsive" width="90px" height="90px">
		<h3>E-Commerce Builder</h3>
		<h6>Build your dream E-commerce store for free. Rich features with highly Customizable Store design</h6>
	</div>
</div>
</div>


<div class="container" id="customer1">
<div class="row mb-2">
	<div class="col-sm-4">
		<label>Blog</label><br>
		<img src="assets/img/cms2.png" class="img-responsive" width="90px" height="90px">
		<h3>Content Management System</h3>
		<h6>Manage your Blog and create contents for your blog using our tool. A Simplified solution for Managing and Updating Content for your Websites and Blogs</h6>
	</div>
	<div class="col-sm-8">
		<div class="colorarea1" style="background-color: orange;">
			<video class="video1" width="700" height="600" class="videoAnimation graph-video" data-statustype="off-track" poster="https://luna1.co/9b651d.png" data-src="assets/img/vid.mp4" muted="" playsinline="" autoplay="" loop="" src="assets/img/vid.mp4"></video>
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


particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 270,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 300,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 300,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
	
</script>
</html>
