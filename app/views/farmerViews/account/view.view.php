<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php
//the navbar of home farmers view is required in all farmers view pages
require views_path("farmerOtherviews/constantnavview");
?>
<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light  myclassmargintop">
    <h1>View Account</h1>
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
            $useremail = $row['email'];
            $userphone = $row['phone'];
            $userlocation = $row['location'];
            $userfarmer_type = $row['farmer_type'];

            echo '
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body ">
                    <h5 class="card-title text-center">your details</h5>
                    <img src="path_to_your_image.jpg" class="float-end" alt="Profile Picture" style="width: 100px; height: auto;">
                    <p class="card-text "><strong>Name:</strong> ' . $username . '</p>
                    <p class="card-text"><strong>Email:</strong> ' . $useremail . '</p>
                    <p class="card-text"><strong>Phone:</strong> ' . $userphone . '</p>
                    <p class="card-text"><strong>Location:</strong> ' . $userlocation . '</p>
                    <p class="card-text"><strong>Farmer Type:</strong> ' . $userfarmer_type . '</p>
                     <div class="d-flex justify-content-between">
                        <a href="?page_name=updateacount" class="btn btn-primary">update</a>
                        <a href="?page_name=home" class="btn btn-primary">close</a>
                    </div>
                   </div>
            </div>';
        }
    }}
    ?>
</div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/pageFooter");?>
