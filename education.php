<?php
include './server.php';
$user = $_SESSION['kenyanid'];//used to know which user is loggeg in

$education_query = "SELECT * FROM `education_details` WHERE  `national_id` ='$user' ";
$education_results = mysqli_query($db, $education_query);

if (mysqli_num_rows($education_results) == 1) {
  $row = mysqli_fetch_assoc($education_results);
  //row data
$nationalId = $row['national_id'];
$institution= $row['institution'];
$course = $row['course_name'];
$duration = $row['course_duration'];
$regno= $row['student_id'];


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
                                placeholder="Student ID" value="<?php echo $regno; ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Institution Name</label>
                            <input type="text" name="fname" class="form-control" id="inputPassword4" required
                                placeholder="Institution" value="<?php echo $institution; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Course Name</label>
                            <input type="text" name="mname" class="form-control" id="inputEmail4" placeholder="Course"
                                value="<?php echo $course; ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Course Duration</label>
                            <input type="number" name="lname" class="form-control" id="inputPassword4" required
                                placeholder="Course Duration" value="<?php echo $duration; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Mode of Study</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Online</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Year of Study</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Semester</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Y1S1</option>
                                <option>Y1S2</option>
                                <option>Y2S1</option>
                                <option>Y2S2</option>
                                <option>Y3S1</option>
                                <option>Y3S2</option>
                                <option>Y4S1</option>
                                <option>Y4S2</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" name="education_update_btn" class="btn btn-success btn-block">Update
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