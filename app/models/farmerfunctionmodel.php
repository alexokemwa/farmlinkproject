<?php

function loginFarmer($email, $password) {
    require "../app/core/database.php";

    $sql = "SELECT * FROM farmers WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = $user["id"]; 
            return true; // Login successful
        } else {
            return "Password does not match";
        }
    } else {
        return "Email does not exist";
    }
}



function registerFarmer($username, $email, $phone, $location, $farmer_type, $goods, $password, $passwordRepeat) {
    require "../app/core/database.php";

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

    $sql = "SELECT * FROM farmers WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "Email already exists!");
    }

    if (count($errors) > 0) {
        return $errors;
    } else {
        $sql = "INSERT INTO farmers (username, email, phone, location, farmer_type, goods, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $phone, $location, $farmer_type, $goods, $passwordHash);
        mysqli_stmt_execute($stmt);
        return true;
    }
}



