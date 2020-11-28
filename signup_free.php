<?php
include 'db_conn.php';

if (isset($_POST['build'])) {
  $org_name=$_POST['org_name'];
  $street=$_POST['street'];
  $area=$_POST['area'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  $country=$_POST['country'];
  $currency=$_POST['currency'];
  $gst=$_POST['gst'];
  $logo=$_POST['logo'];
  $location=$street.','.$area.','.$city.','.$state.','.$zip.','.$country;
  $client_id=rand(1000,9999).substr(str_replace(' ', '', $org_name), 0, 6);

  $cust_ins="INSERT into clients (client_id,client_name,location,currency,gst,logo) VALUES ('$client_id','$org_name','$location','$currency','$gst','$logo')";
  $cust_ins_exe=mysqli_query($conn,$cust_ins);
  if ($cust_ins_exe) {
    header("location:v1/biller/dashboard.php");
  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>VA Tech - SaaS Applications for Businesses</title>
<?php
require("asset.php");
?>
<style type="text/css">
.jump{
	background-color: royalblue;
	height: 30vh;

}
.logo{
	margin-left: -50px;
	margin-top: -60px;
}
.brand{
	margin-left: 6px;
	margin-top: -90px;
	
}
.sign{
	margin-top: -39px;
	color: white;
}
.particlehead {
  background-color: black;
}
canvas {
  display: block;
  vertical-align: bottom;
}

/* Particle container. */
#particle-container {
  position: absolute;
  width: 90%;
  height: 100%;
}
@media only screen and (max-device-width: 640px) {

}
</style>
</head>
<body>
<div class="jumbotron jump" style="">
<div id="particle-container"></div>
	    <img class="brand" src="assets/img/logo.png"  height="90" loading="lazy">
	<center>
		<div class="sign">
		<h3><b>Sign Up for free</b></h3>
		<p>Get Access to Unlimited features for free</p>
		<label>Tell us about your Business below. We will set the things up for you...</label>
		</div>
	</center>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<form method="POST">
	<div class="form-group">
		<label>Name of your Organization/Business/Shop *</label>
		<input type="text" name="org_name" class="form-control" required>
	</div>

	<div class="form-group">
		<label>Location of your Business *</label>
		<div class="row">
			<div class="col">
			<input type="text" name="street" class="form-control" placeholder="Street Name" required>	
			</div>
			<div class="col">
			<input type="text" name="area" class="form-control" placeholder="Locality Name" required>	
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col">
			<input type="text" name="city" class="form-control" placeholder="City" required>	
			</div>
			<div class="col">
			<input type="text" name="state" class="form-control" placeholder="State" required>	
			</div>
		</div><br>
		<div class="row">
			<div class="col">
			<input type="text" name="zip" class="form-control" placeholder="Zip/Postal Code" required>	
			</div>
			<div class="col">
			<input type="text" name="country" class="form-control" placeholder="Country" required>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Currency *</label>
		<select class="form-control" name="currency" required>
			<option>INR</option>
		</select>
	</div>

	<div class="form-group">
		<label>GSTIN (Enter Only if registered with GST)</label>
		<input type="text" name="gst" class="form-control" placeholder="">
	</div>
	<center>
		<button type="submit" class="btn btn-success" name="build">Build now</button>
	</center>
		</div>


<div class="col">
		<div class="form-group">
			<label>Your Business Logo</label>
			<input type="file" name="logo" class="form-control" style="width: 20vw;">
			<p><small>Image size : 60px x 60px</small></p>
		</div>
		<label style="color: blue;">Your Invoice Template</label>
		<img src="assets/img/inv.png" class="img-responsive" height="500px" width="500px">
</div>
</form>
	</div>	
</div>

</body>
<?php 
require 'js.php';
?>
<script type="text/javascript">
 AOS.init();


/* ---- particles.js config ---- */

particlesJS("particle-container", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "random"
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
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
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
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
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
});</script>
</html>
