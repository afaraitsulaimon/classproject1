<?php 
     $title = "Forgot Password";
     require_once("templates/head.php") 
 ?>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
           <?php require_once("templates/logo-head.php") ?>
            <div class="login-form">
              <div class="page-title text-center">
                <h1>Change Password</h1>
              </div>
             <form action="#" class="form" method="post">
               <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="Email" placeholder="Enter Email">
               </div>
               <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="Password" placeholder="Password">
               </div>
               <div class="form-group">
                 <label>Password Again</label>
                 <input type="password" class="form-control" name="passwordAgain" placeholder="Password Again">
               </div>
               <button type="submit" name="changePassword" class="btn btn-success btn-block">Change Password</button>
               <div class="link-container text-center">
                 <a href="index.php" class="form-link">Login</a>
               </div>
             </form>
            </div>
          </div>
        </div>
      </div>
   <?php require_once("templates/script.php") ?>
  </body>
</html>