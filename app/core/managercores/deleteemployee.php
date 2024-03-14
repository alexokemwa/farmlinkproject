
<?php

require "../database.php";

 if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM employees where id =$id";
    $result =mysqli_query($conn,$sql);
    if($result){
        echo"delete successful";
        header('location: ../../../manager/homepage.php?page_name=accounts');

    }
    else{
        die("Something failed");
    }
   }                 

