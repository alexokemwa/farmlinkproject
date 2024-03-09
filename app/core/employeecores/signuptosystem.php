
<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $farmer_type = $_POST["farmer_type"];
    $goods = $_POST["goods"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($phone) || empty($username) || empty($location) || empty($farmer_type)|| empty($email) || empty($password) || empty($passwordRepeat)) {
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
  require "../app/core/database.php";


  $sql = "SELECT * FROM farmers WHERE email = '$email'";
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
    
    $sql = "INSERT INTO farmers (username, email,phone,location,farmer_type,goods, password) VALUES ( ?, ?, ?,?,?,?,? )";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sssssss",$username, $email,$phone,$location,$farmer_type,$goods, $passwordHash);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
    }else
    {
        die("Something went wrong");
   }
   header("Location: ?page_name=login");
  }
}
