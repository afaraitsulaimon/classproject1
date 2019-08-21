<div class="col-sm-3" id="adim-sidebar">
  <div class="row">
    <div class="col-sm-3">
      <img src="images/user.jpg" class="img-circle">
    </div>
    <div class="col-sm-9">
      <span>
       <?php
          $id = loggedIn();
          // $sql = "SELECT firstname FROM users WHERE id = $id";
          // $runQuery = query($sql);
          // $getFirstName = fetch($runQuery);
          // echo $getFirstName["firstname"];
          $runQuery = getSingleField("firstname", "users", "id",  $id);
          $getFirstName = fetch($runQuery);
          echo $getFirstName["firstname"];

        ?>
      </span><br>
      <span class="fa fa-circle text-success"></span>
      Online<br>
    </div>
  </div>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
             User
             <span class="pull-right"> 
               <span class="fa fa-angle-left"></span>
             </span>
           </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <ul class="nav">
            <li>
              <a href="add-user.php">
                <span class="fa fa-circle-o"></span>
                 Add User
              </a>
            </li>
            <li>
              <a href="view-users.php">
                <span class="fa fa-circle-o"></span>
                View Users
              </a>
            </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            Task
            <span class="pull-right"> 
              <span class="fa fa-angle-left"></span>
            </span>
          </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav">
            <li>
              <a href="add-task.php">
                <span class="fa fa-circle-o"></span>
                Add Task
              </a>
            </li>
            <li>
              <a href="view-task.php">
                <span class="fa fa-circle-o"></span>
                View Task
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>