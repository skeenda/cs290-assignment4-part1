<?php


$method = $_SERVER['REQUEST_METHOD'];

//Exits if the user enters either
if($method == 'DELETE' || $method == 'PUT'){
	die();
}

 //Checks if post input
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $method = 'POST';
    $param = $_POST;
}

//Checks if get input
if($_SERVER['REQUEST_METHOD'] === 'GET') { 
    $method = 'GET';
    $param = $_GET;
}
//Provides the output
header('Content-type: application/json');
echo json_encode(array("Type" => $method, "parameters" => $param));

?>