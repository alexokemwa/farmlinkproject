<?php

require "../database.php";

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];

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
        echo "Deletion successful";
        // Redirect to some page after deletion
        header('location: ../../../manager/homepage.php?page_name=orders');
        exit; // Terminate script execution after redirection
    } else {
        die("Something failed");
    }
}
?>
