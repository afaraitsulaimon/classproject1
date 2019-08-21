
 <?php 
     $title = "View Users";
     require_once("templates/head.php") 
 ?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/sidebars.php") ?>
        <div class="col-sm-9" id="admin-main-content">
          
          <h3>View Users</h3>
          <table class='table table-bordered table-striped'>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>Authority</th>
              <th>Joined Date</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>benedict</td>
              <td>nonwaz78@gmail.com</td>
              <td>08157550744</td>
              <td>Male</td>
              <td>Admin</td>
              <td>Aug Tue, 2018</td>
              <td>
                <a href='view-users.php'>
                  <i class='fa fa-trash'></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>dareomoba</td>
              <td>dare@gmail.com</td>
              <td>08157550744</td>
              <td>Male</td>
              <td>Subscriber</td>
              <td>Aug Fri, 2018</td>
              <td>
                <a href='view-users.php'>
                  <i class='fa fa-trash'></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>