<?php 
    $title = "Edit Profile";
    require_once("templates/head.php") 
?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/sidebars.php") ?>
        <div class="col-sm-9" id="admin-main-content">
           <h1>Add User</h1>
           <form action="#" class="form" method="post">
             <div class="form-group">
               <label>Username</label>
               <input type="text" class="form-control" value="" placeholder="Username" name="Username">
             </div>
             <div class="form-group">
               <label>Email</label>
               <input type="text" value="" class="form-control" placeholder="Email" name="Email">
             </div> 
             <div class="form-group">
               <label>Phone</label>
               <input type="text" value="" class="form-control" placeholder="Phone" name="Phone">
             </div>
             <input type="hidden" name="Authority" value="Admin">
             <input type="hidden" name="id">
             <div class="form-group">
               <label>Gender</label>&nbsp;&nbsp;&nbsp;
               <label class="radio-inline"><input type="radio" name="Gender" value="Male">Male</label>
               <label class="radio-inline"><input type="radio" name="Gender" value="Female">Female</label>
             </div>
             <button type="submit" name="EditProfile" class="btn btn-success btn-block">Edit Profile</button>
           </form>   
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>