<?php require views_path("otherviews/header");?>

  <?php require views_path("managerOtherviews/nav");?>
    <div class="container-fluid myclassmargintop">
        <h1>farmer payments management</h1>
        <div class="row">
           <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
              <?php require views_path("managerOtherviews/sidebarnav");?>
          

           </div> 
           <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
           <section>
          <h2 class="myclassacounthead">your payments</h2>
          <div class="container"></div>
        <table class="table table-hover">
          <thead class="table-success">
            <tr>
              <th scope="col">payment_id</th>
              <th scope="col">phone_number</th>
              <th scope="col">amount</th>
              <th scope="col">date</th>
              
            </tr>
          </thead>
          <?php
           if (isset($_SESSION["user"])) {
            $user_id = $_SESSION["user"];
            $sql = "SELECT * FROM transactions where  farmer_id=$user_id";

            $all_orders = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($all_orders) > 0) {
                 while ($row = mysqli_fetch_assoc($all_orders)) {
                $payment_id = $row["ID"]; 
                $MerchantRequestID = $row["MerchantRequestID"]; 
                $CheckoutRequestID = $row["CheckoutRequestID"]; 
                $ResultCode = $row["ResultCode"]; 
                $PhoneNumber = $row["PhoneNumber"]; 
                $Amount = $row["Amount"]; 
                $CreatedAt = $row["CreatedAt"]; 
               

              echo "
              
                <tbody>
                    <tr>
                          <th scope='row'>$payment_id</th>
                          <td>$PhoneNumber</td>
                          <td> $Amount</td>
                          <td>$CreatedAt</td>
                          
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
                '>add order and pay</a></button>";
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

    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("managerOtherviews/pageFooter");?>
