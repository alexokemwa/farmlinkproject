<?php

require "../database.php";

if(isset($_POST['delbtnhistory'])){
    $id = $_POST['product_id'];

    // Delete from orders table
    $sql_orders = "DELETE FROM orders WHERE order_id = ?";
    $stmt_orders = mysqli_prepare($conn, $sql_orders);
    mysqli_stmt_bind_param($stmt_orders, "i", $id);
    $result_orders = mysqli_stmt_execute($stmt_orders);

    // Delete from orderscart table
    $sql_cart = "DELETE FROM orderscart WHERE order_id = ?";
    $stmt_cart = mysqli_prepare($conn, $sql_cart);
    mysqli_stmt_bind_param($stmt_cart, "i", $id);
    $result_cart = mysqli_stmt_execute($stmt_cart);

    if ($result_orders && $result_cart) {
        // Return HTTP status code for success and appropriate message
        http_response_code(200);
        echo json_encode(array("message" => "Delete successful"));
    }
    else{
        // Return HTTP status code for failure and appropriate message
        http_response_code(500);
        echo json_encode(array("message" => "Delete failed"));
    }
}
?>
