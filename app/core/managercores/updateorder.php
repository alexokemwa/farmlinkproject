<?php

require "../database.php";

$new_payment = 'ontransit';

if (isset($_GET['updateorder_id'])) {
    $id = $_GET['updateorder_id'];
    $sql_orders = "UPDATE orders SET payment_status = '$new_payment' WHERE order_id = $id";
    $sql_cart = "UPDATE orderscart SET payment_status = '$new_payment' WHERE order_id = $id";
    
    $result_farmer = mysqli_query($conn, $sql_orders);
    $result_mover = mysqli_query($conn, $sql_cart);

    if ($result_farmer && $result_mover) {
        echo "Update successful";
        header('location: ../../../manager/homepage.php?page_name=orders');
        exit; // Terminate script execution after redirection
    } else {
        die("Something failed");
    }
}
