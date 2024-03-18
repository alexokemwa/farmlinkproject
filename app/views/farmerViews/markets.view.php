<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
<div class="container-fluid myclassmargintop mystylemainbodyfullview" >
        <h1>markets</h1>
        <h4><?php echo APP_NAME;?></h4>
        <div class="row d-flex flex-column-sm">
            <div class="col-lg-6">
                order farminputs
            </div>
            <div class="col-lg-6">
                dispatch goods for
            </div>
        </div>

</div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>