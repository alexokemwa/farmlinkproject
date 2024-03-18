
<?php

require "../database.php";

 if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM orders where order_id =$id";
    $result =mysqli_query($conn,$sql);
    if($result){
        echo"delete successful";
        header('location: ../../../public/homepage.php?page_name=activeorders');


    }
    else{
        die("Something failed");
    }
   }                 

