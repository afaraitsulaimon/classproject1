<?php 
   
   	//"SELECT authority FROM users WHERE authority = 4";
	$id = loggedIn();
     $adminQuery = getSingleField("authority", "users", "authority",  $id);
     $getAdmin = fetch($adminQuery);
     if($getAdmin["authority"] == "Admin"){
     	require_once("admin-sidebar.php");
     }else{
     	require_once("normal-sidebar.php");
     }

     // function fetch($runQuery){
     // 	return mysqli_fetch_assoc($runQuery);
     // }

     // function getSingleField($field, $table, $cond, $value){

     // 	if(is_numeric($value)){
     // 		$condition = "WHERE $cond = $value";
     // 	}else{
     // 		$condition = "WHERE $cond = '$value'";
     // 	}
     // 	$sql = "SELECT $field FROM $table $condition";
     // 	$runQuery = query($sql);
     // 	return $runQuery;
     // }
?>