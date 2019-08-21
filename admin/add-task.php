<?php 
    require_once("../db-config.php");
    require_once("add-task-process.php");
    $title = "Add Task/Edit Task";
    require_once("templates/head.php") 
?>
  <body id="admin">
    <div class="container-fluid">
      <?php require_once("templates/header.php") ?>
      <div class="row">
        <?php require_once("templates/sidebars.php") ?>
        <div class="col-sm-9" id="admin-main-content">
          <?php 

              if(isset($_GET["addSuccess"]) && $_GET["addSuccess"] == "success"){
                echo "<div class='alert alert-success'>Task Added</div>";
              }


           ?>
          <h3>Add Task</h3>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" class="form" method="post">
            <div class="form-group">
              <label>Task Name</label>*
              <input type="text" class="form-control" placeholder="Task Name" 
              name="taskName" value="<?php echo $taskName ?>">
            </div>
            <div class="form-group">
              <label>Due Date</label>
              <input type="date" class="form-control" 
              name="dueDate" value="<?php echo $dueDate ?>"> 
            </div> 
            <div class="form-group">
                <label>Priority</label>
                <select name="priority" class="form-control">
                  <option value="Normal" 
                  <?php if(isset($priority) && $priority == "Normal") echo "selected" ?>>Normal</option>
                  <option value="High" <?php if(isset($priority) && $priority == "High") echo "selected" ?> >High</option>
                  <option value="VeryHigh" <?php if(isset($priority) && $priority == "VeryHigh") echo "selected" ?> >Very High</option>
                  <option value="" <?php if(isset($priority) && $priority == "") echo "selected" ?> >Choose Priority</option>
                </select>
            </div>
            <?php $userId = loggedIn() ?>
            <input type="hidden" name="userId" value="<?php echo $userId ?>">
            <div class="form-group">
              <label>Task Description</label>*
              <textarea class="form-control" rows="10" name="description"><?php echo $description ?></textarea>
            </div>
            <button type='submit' class='btn btn-success btn-block' name='addTask'>Add Task</button> 
          </form>
        </div>
      </div>

    </div>
    <?php require_once("templates/script.php") ?>
  </body>
</html>