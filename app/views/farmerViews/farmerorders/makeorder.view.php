<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }
?>


<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
        <div class="container-fluid myclassmargintop" >
            
            <div class="row">
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
                <?php require views_path("farmerOtherviews/sidebarnav");?>
           </div> 
            <div class="col-12 col-lg-10 mystylemainbodyfullview orderbg"> <!-- Adjust columns for larger screens -->
             
            <h1>make order</h1>

             <form action="?page_name=makeorder" method="post">
                <?php
                    require "../app/core/farmercores/farmerordercore.php";
                    require "../app/core/farmercores/cart.php";

                ?> 
                 <div class="container mt-5">
                        <div class="row justify-content-between">
                        <div class="col-md-4">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >order_type</label>
                                <select name="order_type" class="form-select" id="inputGroupSelect01" required>
                                <option value="">Choose...</option>
                                
                                <?php
                                    $sql = "SELECT * FROM order_types";
                                    $all_goods = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($all_goods) > 0) {
                                        while ($row = mysqli_fetch_assoc($all_goods)) {
                                            $goods = $row['name'];
                                            echo '<option value="' . $goods . '">' . $goods . '</option>';
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                                        <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >pickup_location</label>
                                <select name="pickup_location" class="form-select" id="inputGroupSelect01" required>
                                    <option value= "">Choose...</option>
                                    <?php
                                    $sql = "SELECT * FROM locations";
                                    $all_locations = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($all_locations) > 0) {
                                        while ($row = mysqli_fetch_assoc($all_locations)) {
                                            $location = $row['location_name'];
                                            echo '<option value="' . $location . '">' . $location . '</option>';
                                        }
                                    }
                                    ?>

                            
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >delivery_location</label>
                                <select name="delivery_location" class="form-select" id="inputGroupSelect01" required>
                                    <option value = "">Choose...</option>
                                    <?php
                                    $sql = "SELECT * FROM locations";
                                    $all_locations = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($all_locations) > 0) {
                                        while ($row = mysqli_fetch_assoc($all_locations)) {
                                            $location = $row['location_name'];
                                            echo '<option value="' . $location . '">' . $location . '</option>';
                                        }
                                    }
                                    ?>

                            
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="container mt-5">

                        <div class="row justify-content-between">
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >goods_type</label>
                                <select name="goods_type" class="form-select" id="inputGroupSelect01" required>
                                    <option value = "">Choose...</option>
                                    <?php
                                    $sql = "SELECT * FROM goods_types";
                                    $all_goods = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($all_goods) > 0) {
                                        while ($row = mysqli_fetch_assoc($all_goods)) {
                                            $goods = $row['goods_type_name'];
                                            echo '<option value="' . $goods . '">' . $goods . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">goods_weight</span>
                                <input type="text" id="goods_weight" class="form-control" placeholder="weight" aria-label="goods_weight" name="goods_weight" aria-describedby="basic-addon1" oninput="calculate()" required>
                            </div>
                        </div>
                       
                        </div>
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">total_price</span>
                                            <input type="text" id="total_price" class="form-control" placeholder="total" aria-label="total_price" name="total_price" aria-describedby="basic-addon1" readonly required>
                                        </div>
                                    </div>
                            </div>
                            
                                    
                         </div>
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                    
                                    <div class="col-md-2">
                                       <div class="form-btn">
                                                <input type="submit" class="btn btn-outline-success rounded-pill orderbtnsyle px-5" value="order" name="submit">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-btn">
                                            <input type="submit" class="btn btn-outline-dark rounded-pill orderbtnsyle px-5" value="cart" name="submitcart">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-group mb-3">
                                        <a href="?page_name=home" class="btn btn-outline-danger orderbtnsyle">cancel</a>
                                       </div>
                                    </div>
                                    
                                    
                            
                                    
                            </div>
                        </div>
                     
             </form>
                </div>
  
            </div>
            </div>
      
     
   
    </div>

        

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>
