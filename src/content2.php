<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


//If permission is not given then return to the login page
if($_GET['login'] != true){
	header("Location: login.php");
	$_SESSION = array();
	session_destroy();
}


echo "Welcome to page 2. Click <a href= 'content1.php'>here</a> to return to page 1.";

?>