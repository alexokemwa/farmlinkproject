<?php require views_path("otherviews/header");?>

  <?php require views_path("managerOtherviews/nav");?>
    <div class="container-fluid myclassmargintop">
        <h1>msg communication management</h1>
        <div class="row">
           <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
              <?php require views_path("managerOtherviews/sidebarnav");?>
          

           </div> 
           <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
           <section class="section-2">
            <h2>messages</h2>
            <div>
            <div class="row px-1">
<?php require "../app/core/database.php"; ?>

                         <?php
                         
                         error_reporting(E_ALL);
                         ini_set('display_errors', 1);
                         
                              $sql = "SELECT * FROM  contactus";
                              $all_product = mysqli_query($conn,$sql);
                              if(mysqli_num_rows($all_product) > 0){
                              while($row = mysqli_fetch_assoc($all_product)){
                                   $message_id = $row ['contact_id'];
                                   $sender = $row ['full_name'];
                                   $sender_email = $row ['email'];
                                   $message = $row ['message'];
                                   echo"
                                   <div class='card text-center'>
                                    <div class='card-header'>
                                    <span>msg no::</span>$message_id
                                    </div>
                                    <div class='card-body'>
                                        <h5 class='card-title'><span>sender:</span>$sender</h5>
                                        <p class='card-text'><span>message:</span>$message</p>
                                        <a href='mailto:$sender_email' class='btn btn-primary'>reply</a>
                                    </div>
                                    <div class='card-footer text-body-secondary'>
                                    $sender_email
                                    </div>
                                    </div>";
                                   
                              }}
                              else{
                                   echo "
                                   <h5 class='card-card'><span>no message yet!!</span></h5>
                                   
                                   ";
                                }
                              
                    
                         ?>
                         
                    </div>  
            </div>
        </section>
           </div>
        </div>
      
    </div>

    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("managerOtherviews/pageFooter");?>
