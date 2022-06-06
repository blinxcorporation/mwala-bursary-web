<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   include './includes/header.php';
   ?>
    <title>Dashboard | Student</title>
  </head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Bursary Tracking(status)</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Updates</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Careers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Internships</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Attachments</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  
  </div>
</nav>
<!--end of navbar-->

<div class="row mt-4">
<div class="col-md-2"></div>
<div class="col-md-4 m-1">
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-4 m-1">
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-2"></div>

   
      

</div>
</div>




<?php 
include './includes/footer.php';
?>
<?php 
include './includes/scripts.php';
?>
</body>
</html>