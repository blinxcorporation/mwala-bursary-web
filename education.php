<?php
include './server.php';
$user = $_SESSION['kenyanid'];//used to know which user is loggeg in

$profile_query = "SELECT * FROM `student_details` WHERE  `kenyan_id` ='$user' ";
$profile_results = mysqli_query($db, $profile_query);

if (mysqli_num_rows($profile_results) == 1) {
  $row = mysqli_fetch_assoc($profile_results);
  //row data
$nationalId = $row['kenyan_id'];
$fname = $row['student_firstname'];
$mname = $row['student_middlename'];
$lname = $row['student_lastname'];
$phone= $row['student_phone'];
$email= $row['student_email'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
   include './includes/header.php';
   ?>
    <title>Education | Student</title>
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
                <h3 class="text-center">Education Details</h3>
                <form method='POST' action='server.php'>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Student ID</label>
                            <input type="text" name="national_identity" class="form-control" id="inputEmail4" required
                                placeholder="National ID/Passport" value="<?php echo $nationalId; ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Institution Name</label>
                            <input type="text" name="fname" class="form-control" id="inputPassword4" required
                                placeholder="Firstname" value="<?php echo $fname; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Course</label>
                            <input type="text" name="mname" class="form-control" id="inputEmail4"
                                placeholder="Middlename" value="<?php echo $mname; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Year of Study</label>
                            <input type="text" name="lname" class="form-control" id="inputPassword4" required
                                placeholder="Lastname" value="<?php echo $lname; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Email Address</label>
                            <input type="email" name="mail" class="form-control" id="inputCity" required placeholder=' Email
                                Address' value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="inputCity" required
                                placeholder="254......." value="<?php echo $phone; ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" name="profile_update_btn" class="btn btn-success btn-block">Update
                                Details</button>
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