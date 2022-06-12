<?php 
ob_start();
session_start();
// // Report all PHP errors
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

   // Create Connection to the Database
   $db = new mysqli('localhost', 'root', '','mwala_cdf_bursary');
   
   // Check connection
   if ($db->connect_error) {
     die("Connection failed: " . $db->connect_error);
   }
  //  echo "Connected successfully";

//Student Login Authentication
if(isset($_POST['student_login_btn'])){
  $username= $_POST['student_username'];
  $password= $_POST['student_password'];

  if(!empty($username) && !empty($password)){
    $encrypted_password = md5($password);
    $select_query= "SELECT * FROM `student_details` WHERE `kenyan_id` = '$username' AND `student_password` ='$encrypted_password'";
    $results = mysqli_query($db, $select_query);
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($results);
      //row data
    $nationalId = $row['kenyan_id'];
    $student_fname = $row['student_firstname'];
    $student_mname = $row['student_middlename'];
    $student_lname = $row['student_lastname'];
    $student_phone= $row['student_phone'];
    $student_email= $row['student_email'];
    $student_pass= $row['student_password'];

    $_SESSION['kenyanid'] =  $nationalId;
    $_SESSION['fname'] =  $student_fname;
    $_SESSION['mname'] =  $student_mname;
    $_SESSION['lname'] =  $student_lname;
    $_SESSION['mail'] =  $student_email;
    $_SESSION['phone'] =  $student_phone;

    if (isset($_POST['rememberme'])) {
      /* Set cookie to last 1 year */
      setcookie('username',$nationalId, time()+60*60*24*365, '/');
      setcookie('password',$student_pass, time()+60*60*24*365, '/');

  } else {
      /* Cookie expires when browser closes */
      setcookie('username',$nationalId, false, '/');
      setcookie('password',$student_pass, false, '/');
  }

  header('Location: dashboard.php');
  exit;
  
    }else{
      echo '<script>alert("No data that matches your credentials. Try Again!!!")</script>';
      header('Location: index.php');
      exit;
    }

  }else{
    echo '<script>alert("Please fill the form and try again");</script>';
    header('Location: index.php');
   exit;
  }

}
//Update student profile details
if(isset($_POST['profile_update_btn'])){
  $identity = $_POST['national_identity'];
  $firstname = $_POST['fname'];
  $middlename = $_POST['mname'];
  $lastname = $_POST['lname'];
  $email= $_POST['mail'];
  $tel= $_POST['phone'];
  
  if(empty($identity)){
    echo '<script>alert("Natinal ID or Passport is missing. Fill the form and try again.");</script>';
  }
  if(empty($firstname)){
    echo '<script>alert("Firstname is missing. Fill the form and try again.");</script>';
  }
  if(empty($lastname)){
    echo '<script>alert("Lastname is missing. Fill the form and try again.");</script>';
  }
  if(empty($email)){
    echo '<script>alert("Email Address is missing. Fill the form and try again.");</script>';
  }
  if(empty($tel)){
    echo '<script>alert("Phone number is missing. Fill the form and try again.");</script>';
  }
  // Update Data on database
  $update_profile_query= "UPDATE `student_details` SET `kenyan_id`='$identity',
  `student_firstname`='$firstname',`student_middlename`='$middlename',`student_lastname`='$lastname',
  `student_email`='$email',`student_phone`='$tel' WHERE `kenyan_id` ='$identity' ";
   $results=  mysqli_query($db,$update_profile_query);

   if($results){
    echo "<script>
    alert('Profile Updated Successfully');
    window.location.href='dashboard.php';
    </script>";
    die(); //Stops PHP from further execution
}
  
}
ob_end_flush();
?>