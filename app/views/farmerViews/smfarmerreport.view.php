<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>

<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/constantnavview");?>
<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light  myclassmargintop mystylemainbodyfullview" >

        <h1>your reports</h1>
        <?php
    require "../app/core/database.php";
    if (isset($_SESSION["user"])) {
        $user_id = $_SESSION["user"];
    $sql = "SELECT * FROM farmers WHERE id = $user_id";
    $all_users = mysqli_query($conn, $sql);
    if (mysqli_num_rows($all_users) > 0) {
        while ($row = mysqli_fetch_assoc($all_users)) {
            $user_id = $row['id'];
            $username = $row['username'];
            

            echo '
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger ">order history</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>here is your order history
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=order" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger "> active order</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>
                    here are your active order
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=printactive" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger ">pending order</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>
                    here are your pending order 
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=pendingreportorder" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger ">ontransit order</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>
                    here are your ontransit  order 
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=printontransitorder" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger ">payment report</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>here is your order history
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=payment" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center text-bg-danger ">market report</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Dear</strong> ' . $username . ' <strong>here is your order history
                    report click print to pint it</strong></p>
                    <div class="d-flex justify-content-between">
                    
                        <a href="?page_name=market" class="btn btn-primary">print</a>
                        <a href="?page_name=home" class="btn btn-primary">cancel</a>
                    </div>
                   </div>
            </div>
            
            ';
        }
    }}
    ?>
    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>
