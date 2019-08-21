<div class="row">
  <div class="col-sm-3" id="top-sidebar">
    <a href="index.php"><img src="images/admin-logo.png" class="img-responsive"></a>
  </div>
  <div class="col-sm-9" id="top-content">
    <div class="status pull-right">
      <img src="images/user.jpg" class="img-circle">
      <div class="userStatus">
        <a class="userStatus dropdown-toggle" data-toggle="dropdown" id="userStatus">
           <?php
              $id = loggedIn();
              $sql = "SELECT firstname FROM users WHERE id = $id";
              $runQuery = query($sql);
              $getFirstName = fetch($runQuery);
              echo $getFirstName["firstname"];

            ?>
             <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
         <li><a href="logout.php">Log Out</a></li>
         <li><a href="change-password.php">Change Password</a></li>
         <li><a href="edit-profile.php">Edit Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
