<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php require "../app/core/database.php"; ?>

<?php

//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
<div class="container-fluid myclassmargintop" >
        <h1>markets</h1>
        <h4><?php echo APP_NAME;?></h4>
        <div class="row">
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
                <?php require views_path("farmerOtherviews/farmerreportssidebar");?>
           </div> 
            <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
            <section>
          <h2 class="myclassacounthead">your ontransit orders</h2>
          <div class="container"></div>
        <table class="table table-hover">
          <thead class="table-success">
            <tr>
              <th scope="col">order_id</th>
              <th scope="col">order_type</th>
              <th scope="col">pickup_location</th>
              <th scope="col">delivery_location</th>
              <th scope="col">goods_type</th>
              <th scope="col">payment_status</th>
              <th scope="col">total_price</th>
            </tr>
          </thead>
          <?php
           if (isset($_SESSION["user"])) {
            $user_id = $_SESSION["user"];
            $sql = "SELECT order_id,farmer_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
            FROM (
                SELECT order_id,farmer_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
                FROM orders
                UNION
                SELECT order_id,farmer_id, order_type, pickup_location, delivery_location, goods_type, goods_weight,payment_status, total_price
                FROM orderscart
            ) AS combined_orders
            WHERE payment_status = 'ontransit' and farmer_id = $user_id";
            $all_orders = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($all_orders) > 0) {
                 while ($row = mysqli_fetch_assoc($all_orders)) {
                $order_id = $row["order_id"]; 
                $order_type = $row["order_type"];
                $pickup_location = $row["pickup_location"];
                $delivery_location = $row["delivery_location"];
                $goods_type = $row["goods_type"];
                $goods_weight = $row["goods_weight"];
                $payment_status = $row["payment_status"] ?? ''; // Use NULL coalescing operator to handle NULL value
                $total_price = $row["total_price"];

              echo "
              
                <tbody>
                    <tr>
                          <th scope='row'>$order_id</th>
                          <td>$order_type</td>
                          <td>$pickup_location</td>
                          <td>$delivery_location</td>
                          <td>$goods_type</td>
                          <td>$payment_status</td>
                          <td>$total_price</td>
                          <td>
                        ";
            }}
            else{
                echo "
                <h1>no order history to print</h1>
                <button class='btn btn-primary'style='
                ;'><a href='?page_name=makeorder'class = 'text-light' style = 'text-decoration:none;
                font-size:29px;
                color:white; 
                font-weight:70px;
                '>add order</a></button>";
              }}
          ?>
          
        </table>
        <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
       </section>
            </div>
            </div>
      
     
   
    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>