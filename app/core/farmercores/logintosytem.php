<?php
require_once "../app/models/farmerfunctionmodel.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $loginResult = loginFarmer($email, $password);

    if ($loginResult === true) {
        header("Location: homepage.php");
        die();
    } else {
        echo "<div class='alert alert-danger'>$loginResult</div>";
    }
}

