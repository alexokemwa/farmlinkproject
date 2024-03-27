<?php
  if (isset($_POST["submit"])) {
    $full_name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $errors = array();

  if (empty($full_name) || empty($email) || empty($message) ) {
    array_push($errors,"All fields are required");
  
  }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Email is not valid");
   
  }
   
require "../app/core/database.php";
 
  if (count($errors)>0) {
    foreach ($errors as  $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
   }
   else
   {
    $sql = "INSERT INTO contactus (full_name, email, message) VALUES ( ?, ?, ? )";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sss",$full_name, $email, $message);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>Your query has been submitted successfully <a href='contact_us_success.php'>confirm</a>.</div>";
    }else
    {
        die("Something went wrong");
   }
  }
}

?>