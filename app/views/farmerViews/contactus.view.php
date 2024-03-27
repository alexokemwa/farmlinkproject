<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php
require "../app/core/database.php"; 

//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
<div class="container-fluid myclassmargintop mystylemainbodyfullview" >
        <main class="contactss">
        <?php 
          if (isset($_SESSION["user"])) {
               $user_id = $_SESSION["user"];

               // Fetch data for the logged-in user
               $sql = "SELECT * FROM farmers WHERE id = $user_id";
               
               $all_product = mysqli_query($conn,$sql);
               if(mysqli_num_rows($all_product) > 0){
               while($row = mysqli_fetch_assoc($all_product)){
                    $username = $row['username'];
                    $user_type = $row['farmer_type'];
                 ?>
               <h6 class="card-title" style="font-size: 50px;
               width:100%; 
               text-align: center;
               color: #ff6347;
                background-color:#1b454f;
                margin-bottom:10px">
  Welcome back, <?php echo $username; ?>!
</h6>
               <h6 class="card-title" style="font-size: 40px;
               
               text-align: center;
               color: blue;
                background-color:white;
                margin-bottom:10px">
  you are logged in  as a <?php echo $user_type; ?> farmer!
</h6>

                 <?php  
               }}}

         ?>
    
          
           
                <div class="ccc">
                <?php
                    require "../app/core/farmercores/contact.php";

        ?>
                    <div class="wrapper">
                        <form action="?page_name=contactus" method="post">
                            <h1>contact us</h1>
                    
                            <input class ="formcontrol"type="text"  name="name" placeholder="Your Name">
                    
                            <input class ="formcontrol"type="email" name="email" placeholder="Your Email">
                    
                            <textarea id="message" name="message" placeholder="Your Message" ></textarea><br>
                            <button type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                    
                                </div>
                </div>
        </main>
           

</div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>