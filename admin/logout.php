<?php
	require_once("../db-config.php"); 
	session_destroy();
	redirectTo("../index.php");
