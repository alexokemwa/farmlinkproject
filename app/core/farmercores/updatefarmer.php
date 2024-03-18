<?php
require "../app/core/database.php";

if (isset($_SESSION["user"])) {
    if (isset($_POST["submit"])) {
    $user_id = $_SESSION["user"];
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
    if (strlen($password) < 8) {
        array_push($errors,"Password must be at least 8 characters long");
    }
    if ($password !== $passwordRepeat) {
        array_push($errors,"Password does not match");
    }
    if (count($errors) > 0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        


        $sql = "UPDATE farmers SET username='$username', email='$email',phone = '$phone',location = '$location',
        farmer_type = '$farmer_type',goods = '$goods', password='$passwordHash' WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo"<h3>update succussfully</h3>";
        } else {
            die("Something went wrong");
        }
        
         
        
    }
}

}