<?php 

	
	if(isset($_POST["login"])){
		$formErrors = array();

		$username = sanitize($_POST["username"]);
		$password = md5(SALT.sanitize($_POST["password"]));

		$requiredField = array("username", "password");
		$formErrors = array_merge($formErrors, checkRequiredField($requiredField));

		$sql = "SELECT id, username, password FROM users WHERE username = '$username' ";
		$sql .= "AND password = '$password'";
		$runQuery = query($sql);
		if(rowsCount($runQuery) == 1){
			$getField = fetch($runQuery);
			$_SESSION["id"] = $getField["id"];
			redirectTo("admin/normal-index.php");	
		}else{
			$formErrors[] = "Username and Password combination do not match";
		}

		if(!empty($formErrors)){
			$errorMessage = "<ul>";
			foreach($formErrors as $theError){
				$errorMessage .= "<li>$theError</li>";
			}
			$errorMessage .= "</ul>";
		}

	}

