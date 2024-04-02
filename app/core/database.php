<?php

// $hostName = "localhost";
// $dbUser = "root";
// $dbPassword = "";
// $dbName = "farmlink";
// $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// if (!$conn) {
//     die("Something failed");
// }


$hostName = "localhost:3306";
$dbUser = "ruralfarm_alex";
$dbPassword = "udmF55nsAsHiMDT";
$dbName = "ruralfarm_farmlink";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something failed");
}


