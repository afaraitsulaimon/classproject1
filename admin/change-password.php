<?php 
     $title = "Change Password";
     require_once("templates/head.php") 
?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/admin-sidebar.php") ?>
        <div class="col-sm-9" id="admin-main-content">
          <h3>Change Password</h3>
          <form action="#" method="post" class="form">
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="Password" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Password Again</label>
              <input type="password" class="form-control" name="passwordAgain" placeholder="Password Again">
            </div>
            <button type="submit" name="changePassword" class="btn btn-success btn-block">Change Password</button>
          </form>
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>