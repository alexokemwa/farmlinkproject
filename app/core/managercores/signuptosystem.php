<?php
require views_path("farmerOtherviews/mainindex/indexconstantnavview");
require_once "../app/models/managersmodelfunc.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $uniquekey = $_POST["uniquekey"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $registrationResult = registerManager($username, $uniquekey, $email, $phone, $password);

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
?>
<!-- Signup form HTML code goes here -->
