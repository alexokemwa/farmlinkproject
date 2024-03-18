
<?php

require "../database.php";

 if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM orderscart where order_id =$id";
    $result =mysqli_query($conn,$sql);
    if($result){
        echo"delete successful";
        header('location: ../../../public/homepage.php?page_name=pending');


    }
    else{
        die("Something failed");
    }
   }                 

