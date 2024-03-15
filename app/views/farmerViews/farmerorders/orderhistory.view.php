<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
        <div class="container-fluid myclassmargintop" >
            <div class="row">
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
                <?php require views_path("farmerOtherviews/sidebarnav");?>
           </div> 
            <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
            
            </div>
            </div>
      
     
   
    </div>

        

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>
