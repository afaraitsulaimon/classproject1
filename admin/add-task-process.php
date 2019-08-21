<?php 

	if(isset($_POST["addTask"])){
		$taskName = sanitize($_POST["taskName"]);
		$dueDate = sanitize($_POST["dueDate"]);
		$priority = sanitize($_POST["priority"]);
		$description = sanitize($_POST["description"]);
		$userId = $_POST["userId"];

		$sql = "INSERT INTO task(taskName, dueDate, priority, description, userId) VALUES ";
		$sql .= "('$taskName', '$dueDate', '$priority', '$description', $userId)";

		$insertQuery = query($sql);
		redirectTo("add-task.php?addSuccess=success");

	}


	// PLacing data inside the form field
	//The directly below this comment prevents an error message from occuring
	//when echoed in the form file
	$taskName = $dueDate = $priority = $description = "";
	//The directly above this comment prevents an error message from occuring
	//when echoed in the form file

	if(isset($_GET["edit"])){
		$editId = $_GET["edit"];
		$fields = array("id", "taskName", "dueDate", "priority", "description");
		$runQuery = getSingleRecords($fields, "task", "id", $editId);
		$getField = fetch($runQuery);
		$taskName = $getField["taskName"];
		$dueDate = $getField["dueDate"];
		$priority = $getField["priority"];
		$description = $getField["description"];
	}