<?php
require_once "../app/models/farmerfunctionmodel.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $farmer_type = $_POST["farmer_type"];
    $goods = $_POST["goods"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

   

    $registrationResult = registerFarmer($username, $email, $phone, $location, $farmer_type, $goods, $password, $passwordRepeat);

    if ($registrationResult === true) {
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
        header("Location: ?page_name=login");
        die();
    } else {
        foreach ($registrationResult as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}

