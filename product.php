<!DOCTYPE html>
<html>
<head>
	<title>VA Tech - SaaS Applications for Businesses</title>
<meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/logo1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <link href="assets/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
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
 .navbar-nav{
        margin-left: 40vw;
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


  
.footer{
  /*height: 200px;*/
  background-color: lightblue;
  margin-top: 21vh;
}
.p {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

.p span { 
    background:lightblue; 
    padding:0 10px; 
}
.mr-3{
  width: 45px;
  height: 45px;
}
.space{
  padding-bottom: 10px;
}

@media only screen and (max-device-width: 640px) {
.h3 {
  font-weight: 100;
  }
  .footer{
  /*height: 200px;*/
  background-color: lightblue;
  margin-top: 21vh;
}
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background-color: #154284;">
  <a class="navbar-brand" href="index.html">
    <img src="assets/img/logofull.png" width="120" height="60" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="product.html"><b>Our Products</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="project.php"><b>Projects</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><b>Blog</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>24x7 Support </b><i class="fa fa-globe fa-spin" aria-hidden="true"></i></a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
<div class="wrapper1">
<div id="particles-js"></div>
<div class="jumbotron" style="background-color: white;height: 9vh;">
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
<div class="footer">
  <div class="container">
    <p class="p"><span>Our Products to try for free</span></p><br>
    <div class="row">
      <div class="col">
        <div class="media">
          <img src="assets/img/check.png" class="mr-3" alt="Inventory system">
          <div class="media-body">
            <h5 class="mt-0">Invent</h5>
            Inventory Management System
          </div>
        </div>
      </div>

      <div class="col">
        <div class="media">
          <img src="assets/img/ecart.png" class="mr-3" alt="Estore system">
          <div class="media-body">
            <h5 class="mt-0">E-Builder</h5>
            Build your online E-commerce Store
          </div>
        </div>
      </div>

      <div class="col">
        <div class="media">
          <img src="assets/img/cms2.png" class="mr-3" alt="CMS system">
          <div class="media-body">
            <h5 class="mt-0">Blog</h5>
            Content Management System
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="space">
      <center>
      <span>&#169;</span>AV Tech. All rights reserved |
      Connect with us on <i class="fa fa-facebook-square"></i><span style="margin-left: 6px;"><i class="fa fa-instagram"></i></span><span style="margin-left: 6px;"><i class="fa fa-twitter"></i></span>
      </center>
    </div>
  </div>
</div>
</body>
 <!--   Core JS Files   -->
   <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
 <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 
   
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

    
     <script src="assets/js/jquery.table2excel.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <!-- <script src="assets/js/chartist.min.js"></script> -->
    <script src="assets/js/Chart.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="assets/js/moment.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
     
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css"></script>

     <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="assets/js/aos.js"></script>

      <script type="text/javascript" src="assets/js/particles.min.js"></script>

     
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
