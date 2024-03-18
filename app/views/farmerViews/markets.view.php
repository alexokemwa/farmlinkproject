<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
<div class="container-fluid myclassmargintop mystylemainbodyfullview" >
        <h1>markets</h1>
        <div class="row d-flex flex-column-sm">
            <div class="col-lg-6">
            <h4>goods on sale</h4>
            <?php
            require "../app/core/database.php"; 

          $sql = "SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
          FROM (
              SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
              FROM orders
              UNION
              SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight,payment_status, total_price
              FROM orderscart
          ) AS combined_orders
          WHERE payment_status = 'ontransit' and order_type = 'market outlet'";
  
  // Execute the SQL query
            $result = mysqli_query($conn, $sql);
            
            // Check if any rows were returned
            if(mysqli_num_rows($result) > 0) {
      // Loop through each row in the result set
            while($row = mysqli_fetch_assoc($result)) {
          // Extract data from the row
          $order_id = $row["order_id"]; 
          $order_type = $row["order_type"];
          $pickup_location = $row["pickup_location"];
          $delivery_location = $row["delivery_location"];
          $goods_type = $row["goods_type"];
          $goods_weight = $row["goods_weight"];
          $payment_status = $row["payment_status"];
          $total_price = $row["total_price"];

            echo "
            <div class='card mystlylecardheight mb-4 '>
                    <div class='card-body'>
                        <h5 class='card-title'>market orders</h5>
                        <p class='card-text'>good detail</p>
                        <p class='card-text'>.' $goods_type'.</p>
                        <p class='card-text'></p>
                        
                        <a href='#' class='btn btn-primary text-center'>buy</a>
                    </div>
                    </div>
            
            ";
        }
    }
        else{
            echo" no goods";
        }
        ?>
            </div>
            <div class="col-lg-6">
            <h4>farm input orders</h4>
            <?php
            require "../app/core/database.php"; 

          $sql = "SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
          FROM (
              SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
              FROM orders
              UNION
              SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight,payment_status, total_price
              FROM orderscart
          ) AS combined_orders
          WHERE  order_type = 'farm input'";
  
  // Execute the SQL query
            $result = mysqli_query($conn, $sql);
            
            // Check if any rows were returned
            if(mysqli_num_rows($result) > 0) {
      // Loop through each row in the result set
            while($row = mysqli_fetch_assoc($result)) {
          // Extract data from the row
          $order_id = $row["order_id"]; 
          $order_type = $row["order_type"];
          $pickup_location = $row["pickup_location"];
          $delivery_location = $row["delivery_location"];
          $goods_type = $row["goods_type"];
          $goods_weight = $row["goods_weight"];
          $payment_status = $row["payment_status"];
          $total_price = $row["total_price"];

            echo "
            <div class='card mystlylecardheight mb-4'>
                    <div class='card-body'>
                        <h5 class='card-title'>market orders</h5>
                        <p class='card-text '>good detail</p>
                        <p class='card-text'>.' $goods_type'.</p>
                        <p class='card-text'></p>
                        
                        <a href='#' class='btn btn-primary'>buy</a>
                    </div>
                    </div>
            
            ";
        }
    }
        else{
            echo" no goods";

        }
        ?>
            </div>
           

</div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>