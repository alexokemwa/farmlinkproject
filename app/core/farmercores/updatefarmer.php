<?php

if(isset($_GET['update_id'])){
    $id = $_GET['update_id'];
    require "../database.php";
    // Include the file that establishes the database connection

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $sqli = "SELECT * FROM farmers where id=$id";
    $all_product = mysqli_query($conn, $sqli);

    $row = null; // Initialize $row
    if (mysqli_num_rows($all_product) > 0) {
        $row = mysqli_fetch_assoc($all_product);
    } else {
        echo "No record found";
    }
}
if (isset($_POST["update"])) {
    if(isset($_GET['id_new'])){
        $id = $_GET['id_new'];
    }
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
        require "../database.php";


        $sql = "UPDATE farmers SET username='$username', email='$email',phone = '$phone',location = '$location',
        farmer_type = '$farmer_type',goods = '$goods', password='$passwordHash' WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
        } else {
            die("Something went wrong");
        }
        // }if (isset($_SESSION["user"])) {
        //             header("Location: ?page_name=login");
        //  }else{
        //   header("Location: admin/users.php");
        //  }
    }
}

