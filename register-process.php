<?php 
// C:\wamp64\www\wknd1803\day4\project\register-process.php:3:
// array (size=9)
//   'username' => string '' (length=0)
//   'email' => string '' (length=0)
//   'phone' => string '' (length=0)
//   'password' => string '' (length=0)
//   'passwordAgain' => string '' (length=0)
//   'firstname' => string '' (length=0)
//   'lastname' => string '' (length=0)
// 'gender' => string 'Male' (length=4)
//   'Authority' => string 'Subscriber' (length=10)
//   'register' => string '' (length=0)
if(isset($_POST["register"])){
	$formErrors = array();
	$username = sanitize($_POST["username"]);
	$password = MD5(SALT.sanitize($_POST["password"]));
	$email = sanitize($_POST["email"]);
	$firstname = sanitize($_POST["firstname"]);
	$lastname = sanitize($_POST["lastname"]);
	$authority = sanitize($_POST["authority"]);
	if(isset($_POST["gender"])){
		$gender = sanitize($_POST["gender"]);
	}

	// Checks required field
	$requiredField = array("username", "email", "password", "passwordAgain", "gender");
	$formErrors = array_merge($formErrors, checkRequiredField($requiredField));

	// Checks minimum length
	$fieldLength = array("username" => 7, "password" => 8);
	$formErrors = array_merge($formErrors, checkForLength($fieldLength));

	// Checks for invalide email
	$formErrors = array_merge($formErrors, checkEmail($_POST));

	if(checkDuplicateEntries("email", "users", "email", $_POST["email"])){
		$formErrors[] = "Email already exist";
	}

	if(empty($formErrors)){
		$sql = "INSERT INTO users(username, email, password, firstname, lastname, ";
		$sql .= "authority, gender, register_date) VALUES('$username', '$email', ";
		$sql .= "'$password', '$firstname', '$lastname', '$authority', '$gender', NOW())";
		$runInsert = query($sql);
		redirectTo("register.php?addsuccess=success");
	}else{
		$errorMessage = "<ul>";
		foreach($formErrors as $theError){
			$errorMessage .= "<li>$theError</li>";
		}
		$errorMessage .= "</ul>";
	}


}