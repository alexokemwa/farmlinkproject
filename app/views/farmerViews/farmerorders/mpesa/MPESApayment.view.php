<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
}
?>
<?php require "../app/core/database.php"; ?>

<?php
$sql = "SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
        FROM (
            SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight, payment_status, total_price
            FROM orders
            UNION
            SELECT order_id, order_type, pickup_location, delivery_location, goods_type, goods_weight,payment_status, total_price
            FROM orderscart
        ) AS combined_orders
        WHERE payment_status = 'active'";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Initialize total price variable
$total_price = 0;

// Check if any rows were returned
if(mysqli_num_rows($result) > 0) {
    // Loop through each row in the result set
    while($row = mysqli_fetch_assoc($result)) {
        // Accumulate total price
        $total_price += $row["total_price"];
    }
}
?>

<?php
//the navbar of home farmers view is required in all farmers view pages
require views_path("farmerOtherviews/constantnavview");
?>

<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light myclassmargintop pb-4">
    <!-- <h1>Mpesa Payment</h1> -->
    <form action="?page_name=MPESApayment" method="post">
            <h3>mpesa payment</h3>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text mympsastyle" id="basic-addon1">total_amount</span>
                <input type="text" class="form-control" name="total_amount" value="<?php echo $total_price?>" aria-label="Username" aria-describedby="basic-addon1">
            </div>
    
            <div class="mb-3">
                <label for="exampleFormControlInput1 mympsastyle" class="form-label">input phone number</label>
                <input type="tel" class="form-control" name="email" id="exampleFormControlInput1" placeholder="0700000000" maxlength="10">

            </div>
           
            
            
            <br>
            <div class="form-btn d-flex justify-content-center">
                <input type="submit" class="btn btn-primary rounded-pill px-5 mympsastyle" value="submit" name="mpesapay">
            </div>

        </form>

<?php require views_path("otherviews/footer");?>
