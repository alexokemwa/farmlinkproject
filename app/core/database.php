<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "farmlink";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something failed");
}

