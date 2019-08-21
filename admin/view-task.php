<?php 
    require_once("../db-config.php");
     $title = "View Task";
     require_once("templates/head.php");
     $fields = array("id", "taskName", "dueDate", "priority", "description");
     $viewQuery = getRecords($fields, "task");
     $table = "<table class='table table-bordered table-striped'>";
     $table .= "<tr>";
      $table .= "<th>Task Name</th>";
      $table .= "<th>Due Date</th>";
      $table .=  "<th>Priority</th>";
      $table .=  "<th>Task Description</th>";
      $table .=  "<th colspan='2'>Action</th>";
     $table .= "</tr>";
     while($getGetData = fetch($viewQuery)){
        $table .= "<tr>";
        $table .= "<td>{$getGetData['taskName']}</td>";
        $table .= "<td>{$getGetData['dueDate']}</td>";
        $table .= "<td>{$getGetData['priority']}</td>";
        $table .= "<td>{$getGetData['description']}</td>";
        $table .= "<td><a href='add-task.php?edit={$getGetData['id']}'><i class='fa fa-edit'></i></a></td>";
        $table .= "<td><a href='view-task.php?del={$getGetData['id']}'><i class='fa fa-trash'></i></a></td>";
        $table .= "</tr>";
     }
     $table .= "</table>";
?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/sidebars.php") ?>
        <div class="col-sm-9" id="admin-main-content">
         
          <h3>View Task</h3>
          <?php echo $table ?>
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>