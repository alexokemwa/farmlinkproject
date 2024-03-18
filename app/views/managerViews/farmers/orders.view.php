<?php require views_path("otherviews/header");
require "../app/core/database.php"; 


?>

  <?php require views_path("managerOtherviews/nav");?>
    <div class="container-fluid myclassmargintop table-responsive">
        <h1>farmer orders management</h1>
        <div class="row">
           <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
              <?php require views_path("managerOtherviews/sidebarnav");?>
          

           </div> 
           <div class="col-12 col-lg-10 "> <!-- Adjust columns for larger screens -->
           <section>
          <h2 class="myclassacounthead">farmer orders history</h2>
          <div class="container"></div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">order_id</th>
              <th scope="col">order_type</th>
              <th scope="col">pickup_location</th>
              <th scope="col">delivery_location</th>
              <th scope="col">goods_type</th>
              <th scope="col">payment_status</th>
              <th scope="col">total_price</th>
              <th scope="col">actions</th>
            </tr>
          </thead>
          <?php
          $sql = "SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
          FROM orders
          UNION
          SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight,  payment_status, total_price
          FROM orderscart";
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
                        <button class='btn btn-primary'><a href='../app/core/managercores/updateorder.php?updateorder_id=$order_id''class = 'text-light'style = 'text-decoration:none;
                font-size:20px;
                color:white; 
                font-weight:70px;
                '>confirm</a></button>
                          <button class='btn btn-danger'><a href='../app/core/managercores/deleterorder.php?del_id=$order_id''class = 'text-light'style = 'text-decoration:none;
                font-size:20px;
                color:white; 
                font-weight:70px;
                '><i class='fa-solid fa-trash-can'></i></a></button>
                    </td>
                    </tr>
                </tbody>
                
              ";
            }}
            else{
                echo "
                <button class='btn btn-primary'style='
                ;'><a href='products.php'class = 'text-light' style = 'text-decoration:none;
                font-size:29px;
                color:white; 
                font-weight:70px;
                '>add user</a></button>";
              }
          ?>
          
        </table>
       </section>
           </div>
        </div>
      
    </div>

    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("managerOtherviews/pageFooter");?>
