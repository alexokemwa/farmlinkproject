<?php
// session_start();
require "../app/core/database.php";

$sql = "SELECT * FROM orderstates";
$all_users = mysqli_query($conn,$sql);
if(mysqli_num_rows($all_users) > 0){
while($row = mysqli_fetch_assoc($all_users)){
    $state_id = $row['id'];
    $state = $row['states'];
    $payment = $row['payment'];
    
}
}
if (isset($_POST["submit"])) {
    // Validate and process form data
    require "../app/core/database.php";

    $farmer_id = $_SESSION["user"]; 
    $order_type = $_POST["order_type"];
    $pickup_location = $_POST["pickup_location"];
    $delivery_location = $_POST["delivery_location"];
    $goods_type = $_POST["goods_type"];
    $goods_weight = $_POST["goods_weight"];
    $payment_status = "active";
    $total_price = $_POST["total_price"];

    $errors = [];

    if (empty($farmer_id) || empty($order_type) || empty($pickup_location) || empty($delivery_location)
        || empty($goods_type) || empty($goods_weight) || empty($payment_status) || empty($total_price)) {
        $errors[] = "All fields are required";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO orders (farmer_id, pickup_location, delivery_location, goods_type, goods_weight, total_price, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssss", $farmer_id, $pickup_location, $delivery_location, $goods_type, $goods_weight, $total_price, $payment_status);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            echo "<div class='alert alert-success'>Order registered successfully.</div>";
            exit; // Stop further execution after redirect
        } else {
            die("Something went wrong");
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    // Redirect user back to home page
    header("Location: ?page_name=home");
    exit; // Stop further execution
}
?>
