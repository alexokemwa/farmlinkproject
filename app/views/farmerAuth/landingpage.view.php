<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: homepage.php?page_name=home");
 }

?>
<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/mainindex/indexconstantnavview");?>
<div class="container-fluid myclassmargintop" >
        <h1>landingpage</h1>
        <h4><?php echo APP_NAME;?></h4>
    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/indexpageFooter");?>
