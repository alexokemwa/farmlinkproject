<?php
//the navbar of home farmers view is requiresd in all farmers view pages
require views_path("managerOtherviews/mainindex/indexconstantnavview");?>
<div class="container-fluid border col-lg-5 col-md-6 pt-2 bg-light  myclassmargintop" >
<?php
require "../app/core/managercores/logintosytem.php";

?>       
<form action="?page_name=login" method="post">
            <h3><i class="fa fa-user"></i>manager login</h3>
            <br>
    
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
           
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">password</span>
                <input type="text" class="form-control" name="password" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            
            <br>
            <div class="form-btn">
                    <input type="submit" class="btn btn-primary rounded-pill px-5" value="login" name="login">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="?page_name=signup">signup Here</a></p></div>
      </div>
</div>


<?php require views_path("otherviews/footer");?>

