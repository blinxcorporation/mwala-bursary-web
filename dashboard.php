<?php
include './server.php';
$user = $_SESSION['kenyanid'];
?>
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
  <?php 
     include "./includes/navbar.php";
     ?>
  <!--end of navbar-->
  
  <div class="row mt-4">
  <div class="col-md-2"></div>
  <div class="col-md-4 m-1">
  <div class="card">
    <h5 class="card-header">New Bursary Application</h5>
    <div class="card-body">
      <p class="card-text">Click the <strong>New Application</strong> button below to begin your new application.</p>
      <a href="#" class="btn btn-success">New Application</a>
    </div>
  </div>
  </div>
  <div class="col-md-4 m-1">
  <div class="card">
    <h5 class="card-header">Previous Application(s)</h5>
    <div class="card-body">
      <p class="card-text">Click the <strong>View Previous Applications</strong> button below to view previous applications that you made.</p>
      <a href="#" class="btn btn-info">View Previous Applications</a>
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>
  
     
        
  
  </div>
  </div>
  
  
  
  
  <?php
if($user == true){
  echo '<script>alert("user Found")</script>';
}else{
  echo '<script>alert("No user Found")</script>';
}

?>
  <?php 
  include "./includes/footer.php";
  ?>
  
  <?php 
  include "./includes/scripts.php";
  ?>
</body>
</html>