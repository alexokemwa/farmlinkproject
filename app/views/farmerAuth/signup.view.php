<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("farmerOtherviews/mainindex/indexconstantnavview");?>

<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light  myclassmargintop" >
        
<form action="?page_name=signup" method="post">
<?php 
require_once "../app/core/farmercores/signuptosystem.php";


?>
            <h3><i class="fa fa-user"></i>farmer signup</h3>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">username</span>
                <input type="text" class="form-control" placeholder="username" name="username" aria-label="Username" aria-describedby="basic-addon1" autofocus>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">phone</span>
                <input type="text" class="form-control" placeholder="phone" aria-label="phone" name="phone" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">location</span>
                <input type="text" class="form-control" placeholder="location" aria-label="location" name="location" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01" >farmer_type</label>
                <select name="farmer_type" class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="individual">individual</option>
                    <option value="groups">groups</option>
            
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">goods</span>
                <input type="text" class="form-control" placeholder="goods" name="goods" aria-label="goods" aria-describedby="basic-addon1">
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
                    <input type="submit" class="btn btn-primary rounded-pill px-5" value="signup" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="?page_name=login">Login Here</a></p></div>
      </div>
</div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("farmerOtherviews/indexpageFooter");?>

