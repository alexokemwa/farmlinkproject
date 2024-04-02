
<?php

require "../database.php";

if(isset($_POST['delbtncart'])){
    $id = $_POST['product_id'];
    
    $sql = "DELETE FROM orderscart where order_id =$id";
    $result = mysqli_query($conn,$sql);
    if($result){
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
