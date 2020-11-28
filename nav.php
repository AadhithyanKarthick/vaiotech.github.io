<?php
include 'db_conn.php';
?>

<style type="text/css">
    .navbar-nav{
        margin-left: 40vw;
    }
    
  </style>
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background-color: #154284;">
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logofull.png" width="120" height="60" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav" >
      <li class="nav-item active">
        <a class="nav-link" href="product.php"><b>Our Products</b><span class="sr-only">(current)</span></a>
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