<?php require_once("../db-config.php") ?>
<?php require_once("../functions/includes.php") ?>
<?php notLoggedIn() ?>

 <?php 
     $title = "Admin User";
     require_once("templates/head.php") 
 ?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/sidebars.php") ?>
        <div class="col-sm-9" id="admin-main-content">
          <div class="row">
            <div class="col-sm-2">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-users"></i> 
                 <h4>All Users</h4>
               </a>
             </div>
            </div> 
            <div class="col-sm-2">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-lock"></i> 
                  
                </span>
                <h4> Admins</h4><span>
               </a>
             </div>
            </div> 
            <div class="col-sm-2">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-users"></i> 
                <h4> Subscribers</h4>
               </a>
             </div>
            </div> 
            <div class="col-sm-2">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-male"></i> 
                 <h4> Male</h4>
                 <span class="little-text">Subscribers</span>
               </a>
             </div>
            </div> 
            <div class="col-sm-2">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-female"></i> 
                <h4>Female</h4>
                <span class="little-text">Subscribers</span>
               </a>
             </div>
            </div>
           
          </div>
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>