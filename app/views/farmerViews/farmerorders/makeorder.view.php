<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }


require "../app/core/database.php"; 



    // Fetch data for the logged-in user
    $sql = "SELECT * FROM orderstates";
          $all_users = mysqli_query($conn,$sql);
          if(mysqli_num_rows($all_users) > 0){
          while($row = mysqli_fetch_assoc($all_users)){
              $state_id = $row['id'];
              $state = $row['states'];
              $payment = $row['payment'];
              
          }
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
                                <select name="order_type" class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="farm input">farm input</option>
                                    <option value="market outlet">market outlet</option>
                            
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                                        <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >pickup_location</label>
                                <select name="pickup_location" class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="cuk">cuk</option>
                                    <option value="bomas">bomas</option>
                                    <option value="rongai">rongai</option>
                                    <option value="gataka">gataka</option>
                                    <option value="cuea">cuea</option>
                            
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" >delivery_location</label>
                                <select name="delivery_location" class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="cuk">cuk</option>
                                    <option value="bomas">bomas</option>
                                    <option value="rongai">rongai</option>
                                    <option value="gataka">gataka</option>
                                    <option value="cuea">cuea</option>
                            
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
                                <select name="goods_type" class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="individual">cereals</option>
                                    <option value="individual">perishables</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">goods_weight</span>
                                <input type="text" class="form-control" placeholder="weight" aria-label="goods_weight" name="goods_weight" aria-describedby="basic-addon1">
                            </div>
                        </div>
                       
                        </div>
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">total_price</span>
                                            <input type="text" class="form-control" placeholder=<?php echo "$payment"?> aria-label="total_price" name="total_price" aria-describedby="basic-addon1">
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
