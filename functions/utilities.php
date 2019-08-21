<?php 


	//$requiredField = array(name, email, password)
	function checkRequiredField($requiredField){
		$formErrors = array();
		foreach($requiredField as $nameOfField){
			if(empty($_POST[$nameOfField]) || $_POST[$nameOfField] == NULL){
				$formErrors[] = $nameOfField . " is required";
			}
		}
		return $formErrors;
	}


	//$fieldLength = array(username => 4, password => 6)
	function checkForLength($fieldLength){
		$formErrors = array();
		foreach($fieldLength as $nameOfField => $minLengthRequired){
			if(strlen(trim($_POST[$nameOfField])) < $minLengthRequired){
				$formErrors[] = $nameOfField." is too short must be {$minLengthRequired} character long";
			}
		}
		return $formErrors;
	}

	

	function checkEmail($data){
		//initialize an array to store error messages
		$formErrors = array();
		$key = "email";

		//check if the key email exist in the data array

		if(array_key_exists($key, $data)){

			//check if the email field has a value
			if($_POST[$key] != NULL){

				//Remove all illegal characters from email
				$key = filter_var($key, FILTER_SANITIZE_EMAIL);

				if(filter_var($_POST[$key], FILTER_VALIDATE_EMAIL) == FALSE){
					$formErrors[] = $key." is not a valid email";
				}
			}
		}
		return $formErrors;
	}


	function redirectTo($page){
		header("Location: $page");
		exit();
	}


	function loggedIn(){
		if(isset($_SESSION["id"])){
		  return $_SESSION["id"]; 
		}else{
			return false;
		}
	}

	function notLoggedIn(){
		if(loggedIn() == false){
			redirectTo("../index.php");
		}
	}

	
