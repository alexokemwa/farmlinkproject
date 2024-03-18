<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<?php
        require_once "../app/core/farmercores/updateformconst/viewfarmerupdate.php";

?>
<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light myclassmargintop">
    <form action="?page_name=viewupdateform" method="post">
    <?php 
                    require_once "../app/core/farmercores/updatefarmer.php";

        ?>   
    <h3><i class="fa fa-user"></i> Farmer Account Update</h3>
        <br>
        <!-- Username field -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo isset($row['username']) ? $row['username'] : ''; ?>" aria-label="Username" aria-describedby="basic-addon1" autofocus>
        </div>
        <!-- Email field -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" placeholder="name@example.com">
        </div>
        <!-- Phone field -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Phone</span>
            <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" name="phone" value="<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>" aria-describedby="basic-addon1">
        </div>
        <!-- Location field -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Location</span>
            <input type="text" class="form-control" placeholder="Location" aria-label="Location" name="location" value="<?php echo isset($row['location']) ? $row['location'] : ''; ?>" aria-describedby="basic-addon1">
        </div>
        <!-- Farmer type field -->
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Farmer Type</label>
            <select name="farmer_type" class="form-select" id="inputGroupSelect01">
                <option value="individual" <?php echo isset($row['farmer_type']) && $row['farmer_type'] == 'individual' ? 'selected' : ''; ?>>Individual</option>
                <option value="group" <?php echo isset($row['farmer_type']) && $row['farmer_type'] == 'group' ? 'selected' : ''; ?>>Group</option>
            </select>
        </div>
        <!-- Goods field -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Goods</span>
            <input type="text" class="form-control" placeholder="Goods" name="goods" value="<?php echo isset($row['goods']) ? $row['goods'] : ''; ?>" aria-label="Goods" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">password</span>
                <input type="text" class="form-control" placeholder="password" name="password" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">repeat_password</span>
                <input type="text" class="form-control" placeholder="repeat_password" name="repeat_password" aria-label="repeat_password" aria-describedby="basic-addon1">
            </div>
        <br>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary rounded-pill px-5" value="Update" name="submit">
        </div>
    </form>
    <div>
        <div><p>no  need to?<a href="?page_name=login">cancel Here</a></p></div>
      </div>
</div>

<?php require views_path("otherviews/footer");?>

