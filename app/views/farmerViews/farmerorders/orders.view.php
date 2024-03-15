<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
        <div class="container-fluid myclassmargintop" >
            <div class="row">
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
                <?php require views_path("farmerOtherviews/sidebarnav");?>
           </div> 
            <div class="col-12 col-lg-10 mystylemainbodyfullview" > <!-- Adjust columns for larger screens -->
            <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
      
        </div>

        

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>
