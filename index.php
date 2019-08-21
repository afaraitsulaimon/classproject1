<?php
    require_once("db-config.php");
    require_once("login-process.php");
    // echo md5(SALT."pass12345");
    $title = "Login";
    require_once("templates/head.php") 
?>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <?php require_once("templates/logo-head.php") ?>           
           <div class="login-form">
              <?php
                  if(isset($errorMessage)){
                    echo "<div class='alert alert-danger'>$errorMessage</div>";
                  } 


               ?>
              <div class="page-title text-center">
                <h1>Login</h1>
              </div>
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" class="form" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" placeholder="Username" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label class="checkbox-inline"><input type="checkbox" name="remember">Remember Me</label>
                  <span class="pull-right"><a href="front-forget.php" class="form-link">Forget Password</a></span>
                </div>
                <input type="submit" name="login" value="Login" class="btn btn-success btn-block">
                <div class="link-container text-center">
                  <a href="register.php" class="form-link">Register</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php require_once("templates/script.php") ?>
</body>
</html>