<?php
// session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
    exit();
}

require "../app/core/database.php";

// Fetch logged-in user's data from the database
$user_id = $_SESSION["user"];
$sql = "SELECT * FROM farmers WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

// Check if user data is fetched successfully
if (!$result || mysqli_num_rows($result) == 0) {
    echo "User not found.";
    exit();
}

// Fetch user data
$row = mysqli_fetch_assoc($result);

// Include navbar
require views_path("farmerOtherviews/constantnavview");
