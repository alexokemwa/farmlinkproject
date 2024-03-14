
<?php

require "../database.php";

 if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM farmers where id =$id";
    $result =mysqli_query($conn,$sql);
    if($result){
        echo"delete successful";
        header('location: ../../../manager/homepage.php?page_name=account');


    }
    else{
        die("Something failed");
    }
   }                 

