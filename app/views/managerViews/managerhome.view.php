<?php require views_path("otherviews/header");?>

  <?php require views_path("managerOtherviews/nav");?>
    <div class="container-fluid myclassmargintop">
        <h1>homepage</h1>
        <div class="row">
           <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
              <?php require views_path("managerOtherviews/sidebarnav");?>
          

           </div> 
           <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
           
           <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">order history</h5>
                        <p class="card-text">view your order history here</p>
                        <a href="?page_name=orderhistory" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">active orders</h5>
                        <p class="card-text">view your active orders</p>
                        <a href="?page_name=activeorders" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">pending orders</h5>
                        <p class="card-text">view pending orders and make neccessary actions</p>
                        <a href="?page_name=cart" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">ontransit orders</h5>
                        <p class="card-text">check your ontransit orders and do neccessary actions on time</p>
                        <a href="?page_name=ontransit" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
      
        </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("managerOtherviews/pageFooter");?>
