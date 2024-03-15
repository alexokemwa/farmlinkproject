<?php
//the navbar of home employees view is requiresd in all farmers view pages
require views_path("employeeOtherviews/constantnavview");?>
<div class="container-fluid myclassmargintop" >
        <h1>homepage</h1>
        <div class="row">
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
           </div> 
            <div class="col-12 col-lg-10 mystylemainbodyfullview" > <!-- Adjust columns for larger screens -->
            <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">MARKETS</h5>
                        <p class="card-text">check out your markets area 
                                to ensure proper ordering of farm inputs
                                and your goods market
                        </p>
                        <a href="#" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">ORDERS</h5>
                        <p class="card-text">do your order operations here,make order,track e.tc</p>
                        <a href="#" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">REPORTS</h5>
                        <p class="card-text">check your</p>
                        <p class="card-text">reports here</p>
                        <a href="#" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mystlylecardheight">
                    <div class="card-body">
                        <h5 class="card-title">AI VALIDATE GOODS</h5>
                        <p class="card-text">check your goods validity and ensure your goods meet 
                                necessary requirements like expiry dates, we help youmake sure you to 
                                make sure you adhere to terms of service</p>
                        <a href="#" class="btn btn-primary">click here</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
           </div>
            </div>

    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("employeeOtherviews/pageFooter");?>
