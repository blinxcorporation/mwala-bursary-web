<?php 
include 'server.php';
?>
<!doctype html>
<html lang="en">
  <head>
   <?php 
   include './includes/header.php';
   ?>

    <title>Student | Login</title>
  </head>

  <body>
<div class="container-fluid">
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 mt-4">
   <div class="row">
   
     <div class="col-md-12 text-center">
       <h2>Mwala Constituency <br><span class="text-primary">Student Portal</span> </h2>
     </div>
    
   </div>
  <form method='POST' action='./server.php' class="border border-primary rounded p-4 bg-light">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="student_username" id="inputEmail4" placeholder="Username" required>
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="student_password" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>


  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="">
      <label class="form-check-label" for="gridCheck">
        Remember me
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8 ">
    <a class="text-danger btn "href=''>Forgot Password ?</a>
    </div>
    <div class="form-group col-md-4">
    <button type="submit" name='student_login_btn' class="btn btn-primary btn-block">Sign In</button>
    </div>
  
  </div>
  
</form>


</div>
  <div class="col-md-4"></div>
</div>
</div>

   <?php
   include './includes/scripts.php';
   ?>
  </body>
</html>