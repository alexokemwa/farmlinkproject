<?php require views_path("otherviews/header");?>
<?php 
  require "../app/core/database.php";
 
?>
  <?php require views_path("managerOtherviews/nav");?>
    <div class="container-fluid myclassmargintop table-responsive" style="overflow-y: auto;" >
    <div class="row">
           <div class="col-2 col-lg d-none d-lg-block"> <!-- Apply classes to hide on smaller screens -->
              <?php require views_path("managerOtherviews/sidebarnav");?>
          

           </div> 
           <div class="col-12 col-lg-10 mystylemainbodyfullview"> <!-- Adjust columns for larger screens -->
           <section>
            <h2 class="myclassacounthead">farmer accounts</h2>
            <div class="container "></div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id </th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">location</th>
                    <th scope="col">type</th>
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM farmers";
                $all_users = mysqli_query($conn,$sql);
                if(mysqli_num_rows($all_users) > 0){
                while($row = mysqli_fetch_assoc($all_users)){
                    $user_id = $row['id'];
                    $username = $row['username'];
                    $useremail = $row['email'];
                    $userphone = $row['phone'];
                    $userlocation = $row['location'];
                    $userfarmer_type = $row['farmer_type'];

                    echo "
                    
                      <tbody>
                          <tr>
                                <th scope='row'>$user_id</th>
                                <td>$username</td>
                                <td>$useremail</td>
                                <td>$userphone</td>
                                <td>$userlocation</td>
                                <td>$userfarmer_type</td>
                                <td>
                              <button class='btn btn-primary'><a href='../update.php?update_id=$user_id'class = 'text-light'style = 'text-decoration:none;
                      font-size:20px;
                      color:white; 
                      font-weight:70px;
                      '>update</a></button>
                                <button class='btn btn-danger'><a href='../app/core/managercores/deletefarmer.php?del_id=$user_id''class = 'text-light'style = 'text-decoration:none;
                      font-size:20px;
                      color:white; 
                      font-weight:70px;
                      '><i class='fa-solid fa-trash-can'></i></a></button>
                          </td>
                          </tr>
                      </tbody>
                      
                    ";
                  }}
                  else{
                      echo "
                      <button class='btn btn-primary'style='
                      ;'><a href='products.php'class = 'text-light' style = 'text-decoration:none;
                      font-size:29px;
                      color:white; 
                      font-weight:70px;
                      '>add user</a></button>";
                    }
                ?>

        </table>
        </section>
           </div>
        </div>
      
     
   
    </div>

<?php require views_path("otherviews/footer");?>
<?php require views_path("managerOtherviews/pageFooter");?>
