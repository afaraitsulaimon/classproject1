<?php
session_start(); 
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "project_wknd1803");
define("SALT", "%#^ADARRQ)(!WSAqw");

//Connect to database
$connect = mysqli_connect(DBHOST, DBUSER, DBPASS);
if(!$connect){
	die("Could not connect to database".mysqli_error($connect));
}

//Select database
$selectDb = mysqli_select_db($connect, DBNAME);
if(!$selectDb){
	die("Could not select a database".mysqli_error($connect));
}

require_once("functions/includes.php");

