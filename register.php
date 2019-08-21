<?php 
    require_once("db-config.php");
    require_once("register-process.php");
    $title = "Register";
    require_once("templates/head.php") 
?>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <?php require_once("templates/logo-head.php") ?>
            <div class="login-form">
              <?php 

                  if(isset($_GET["addsuccess"]) && $_GET["addsuccess"] == "success"){
                    echo "<div class='alert alert-success'>You have been registered</div>";
                  }elseif(isset($errorMessage)){
                    echo "<div class='alert alert-danger'>$errorMessage</div>";
                  }


               ?>
              <div class="page-title text-center">
                <h1>Register</h1>
              </div>
             <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" class="form">
               <div class="form-group">
                 <label>Username*</label>
                 <input type="text" class="form-control" name="username" placeholder="Username">
               </div>
               <div class="form-group">
                 <label>Email*</label>
                 <input type="text" class="form-control" name="email" placeholder="Email">
               </div> 
               <div class="form-group">
                 <label>Password*</label>
                 <input type="password" class="form-control" name="password" placeholder="Password">
               </div>
               <div class="form-group">
                 <label>Password Again*</label>
                 <input type="password" class="form-control" name="passwordAgain" placeholder="Password Again">
               </div>
               <div class="form-group">
                 <label>Firstname</label>
                 <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname">
               </div>
               <div class="form-group">
                 <label>Lastname</label>
                 <input type="text" class="form-control" name="lastname" placeholder="Enter Firstname">
               </div>
               <input type="hidden" name="authority" value="Subscriber">
               <div class="form-group">
                 <label>Gender*</label>&nbsp;&nbsp;&nbsp;
                 <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                 <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
               </div>
               <button type="submit" name="register" class="btn btn-success btn-block">Register</button>
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