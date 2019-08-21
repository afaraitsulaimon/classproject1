<?php 

	function sanitize($data){
		global $connect;
		$data = trim($data);
		$data = strip_tags($data);
		$data = mysqli_real_escape_string($connect, $data);
		return $data;
	}

	function query($query){
		global $connect;
		$runQuery = mysqli_query($connect, $query);
		if(!$runQuery){
			die("Could not run query ".mysqli_error($connect));
		}
		return $runQuery;
	}

	function rowsCount($runQuery){
		return mysqli_num_rows($runQuery);
	}

	function fetch($runQuery){
		return mysqli_fetch_assoc($runQuery);
	}


	function checkDuplicateEntries($field, $table, $cond, $value){
		// $value = sanitize($value);
		$sql = "SELECT $field FROM $table WHERE $cond = '$value'";
		$runQuery = query($sql);
		if(rowsCount($runQuery) == 1){
			return true;
		}else{
			return false;
		}
	}

	// "SELECT username FROM users WHERE id = 4";
	// "SELECT authority FROM users WHERE authority = 'admin'";

	function getSingleField($field, $table, $cond, $value){

		if(is_numeric($value)){
			$condition = "WHERE $cond = $value";
		}else{
			$condition = "WHERE $cond = '$value'";
		}
		$sql = "SELECT $field FROM $table $condition";
		$runQuery = query($sql);
		return $runQuery;
	}

	function getRecords($fields, $table){
		$implode = implode(", ", $fields);
		$sql = "SELECT $implode FROM $table";
		$runQuery = query($sql);
		return $runQuery;
	}

	function getSingleRecords($fields, $table, $cond, $value){
		if(is_numeric($value)){
			$condition = "WHERE $cond = $value";
		}else{
			$condition = "WHERE $cond = '$value'";
		}
		$implode = implode(", ", $fields);
		$sql = "SELECT $implode FROM $table $condition";
		$runQuery = query($sql);
		return $runQuery;
	}

	