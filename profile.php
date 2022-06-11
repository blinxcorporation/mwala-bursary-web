<?php
include './server.php';
$user = $_SESSION['kenyanid'];//used to know which user is loggeg in
$fname = $_SESSION['fname'] ;
$lname = $_SESSION['lname'] ;
$mname = $_SESSION['mname'] ;
$email = $_SESSION['mail'] ;
$phone = $_SESSION['phone'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   include './includes/header.php';
   ?>
    <title>Profile | Student</title>
  </head>
<body>
<div class="container-fluid">
  <?php 
     include "./includes/navbar.php";
     ?> 
  <!--end of navbar-->
  <div class="row mt-4">
      <div class="col-md-3"></div>
      <div class="col-md-6 mt-3 p-4 bg-light border border-primary">
          <h3 class="text-center">Personal Details</h3>
      <form method='POST' action='server.php'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">National ID/Passport</label>
      <input type="text" class="form-control" id="inputEmail4" required placeholder="National ID/Passport" value="<?php echo $user; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Firstname</label>
      <input type="text" class="form-control" id="inputPassword4" required  placeholder="Firstname" value="<?php echo $fname; ?>">
    </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Middlename</label>
    <input type="text" class="form-control" id="inputEmail4" required  placeholder="Middlename" value="<?php echo $mname; ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Lastname</label>
    <input type="text" class="form-control" id="inputPassword4"required  placeholder="Lastname" value="<?php echo $lname; ?>">
  </div>
</div>
  
  
  
  
  
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email Address</label>
      <input type="email" class="form-control" id="inputCity" required  placeholder='Email Address' value="<?php echo $email; ?>">
    </div>
    <div class="form-group col-md-6">
   <label for="inputCity">Phone number</label>
   <input type="number" class="form-control" id="inputCity" required  placeholder="254......." value="<?php echo $phone; ?>">
 </div>  
   
  </div>
 <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
     <button type="submit" name="profile_update_btn" class="btn btn-success">Update Details</button>
     </div>
     <div class="col-md-4"></div>
 </div>
</form>
      </div>
      <div class="col-md-3"></div>
  </div> 

  
  







  <?php 
  include "./includes/footer.php";
  ?>
  
  <?php 
  include "./includes/scripts.php";
  ?>
</body>
</html>