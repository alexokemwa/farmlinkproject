
<?php
require "../app/core/database.php";

function isIdnoExist($managerkeys, $conn) {
    // Use prepared statement to prevent SQL injection
    $query = "SELECT managerkeys FROM managerkeys WHERE managerkeys = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $managerkeys);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        return mysqli_stmt_num_rows($stmt) > 0;
    } else {
        // Prepared statement creation failed
        return false;
    }
}
  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $uniquekey = $_POST["uniquekey"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($phone) || empty($username) || empty($uniquekey) || empty($email) || empty($password) || empty($passwordRepeat)) {
    array_push($errors,"All fields are required");
  
  }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Email is not valid");
   
  }
   if (strlen($password)<8) {
    array_push($errors,"Password must be at least 8 charactes long");
  
  }
   if ($password!==$passwordRepeat) {
    array_push($errors,"Password does not match");
  
  }
  if (!isIdnoExist( $uniquekey, $conn)) {
    array_push($errors, "Your signup id is incorrect");
}
  require "../app/core/database.php";


  $sql = "SELECT * FROM managers WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  if ($rowCount>0) {
   array_push($errors,"Email already exists!");
  }
  if (count($errors)>0) {
    foreach ($errors as  $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
   }
   else
   {
    
    $sql = "INSERT INTO managers (username,uniquekey, email,phone, password) VALUES ( ?,?, ?, ?,?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sssss",$username,$uniquekey, $email,$phone, $passwordHash);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
    }else
    {
        die("Something went wrong");
   }
   header("Location: ?page_name=login");
  }
}
