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
    <title>Status | Student</title>
</head>

<body>
    <div class="container-fluid">









        <?php 
  include "./includes/footer.php";
  ?>

        <?php 
  include "./includes/scripts.php";
  ?>
    </div>
</body>

</html>