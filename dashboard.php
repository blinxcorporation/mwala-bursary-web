<?php
include './server.php';
$user = $_SESSION['kenyanid'];//used to know which user is loggeg in

$fname = $_SESSION['fname'] ;
$lname = $_SESSION['lname'] ;
$phone = $_SESSION['phone'] ;
//Get Current Date
$today = date("d/m/Y");
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
        <div class="alert alert-info mt-4" role="alert" style='text-align:center'>
            Application is currently closed. You will get a notification once it is opened.
        </div>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-4 m-1">

                <div class="card">
                    <h5 class="card-header">New Bursary Application</h5>
                    <div class="card-body">
                        <p class="card-text">Click the <strong>New Application</strong> button below to begin your new
                            application.</p>
                        <!--Modal-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@mdo">New Application</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Application Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="alert alert-warning mb-0" role="alert" style='text-align:center'>
                                        Please Note: You can only submit <strong style='color:red;'>ONCE!</strong>.
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Financial
                                                    Year:</label>
                                                <input type="text" class="form-control" id="financial-year"
                                                    name='financial_year' readonly value='2022_2023'>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Serial No:</label>
                                                <input type="text" class="form-control" id="serial_no"
                                                    name='serial_number' readonly value='582'>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Date of
                                                    Application:</label>
                                                <input type="text" class="form-control" id="application_date"
                                                    name='date_of_application' readonly value='<?php echo $today; ?>'>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Submit
                                                    Application</button>
                                            </div>


                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-1">
                <div class="card">
                    <h5 class="card-header">Previous Application(s)</h5>
                    <div class="card-body">
                        <p class="card-text">Click the <strong>View Previous Applications</strong> button below to view
                            previous applications that you made.</p>
                        <a href="./applications.php" class="btn btn-info">View Previous Applications</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>




        </div>
    </div>







    ?>
    <?php 
  include "./includes/footer.php";
  ?>

    <?php 
  include "./includes/scripts.php";
  ?>
</body>

</html>