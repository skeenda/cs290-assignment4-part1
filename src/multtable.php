<?php

error_reporting(E_ALL);
ini_set('display', 1);

$minMultiplicand = intval($_GET['min-multiplicand']);
$maxMultiplicand = intval($_GET['max-multiplicand']);
$minMultiplier = intval($_GET['min-multiplier']);
$maxMultiplier = intval($_GET['max-multiplier']);
//Checks to see if the key is entered and therefore is valid

if($_GET['min-multiplier'] == null) {
    echo "<br> Missing parameter min-multiplier";   
    $validInput = false;
}
if($_GET['max-multiplier'] == null) {
    echo "<br> Missing parameter max-multiplier";  
    $validInput = false;
}
if($_GET['min-multiplicand'] == null) {
    echo "<br> Missing parameter min-multiplicand";  
    $validInput = false;
}
if($_GET['max-multiplicand'] == null) {
    echo "<br> Missing parameter max-multiplicand";
    $validInput = false;
}

//checks to see if the min is greater than the max and if it is, delivers an error

if($_GET["min-multiplicand"] > $_GET["max-multiplicand"]){
        echo 'Minimum multiplicand larger than maximum.<br>';
    }
    
if($_GET["min-multiplier"] > $_GET["max-multiplier"]){
        echo 'Minimum multiplier larger than maximum.<br>';
    }

//This creates the table
echo '<table border = "3">';
echo '<thead>';
echo '<th></th>'; // This leaves the upper left hand cell empty

//Creates the upper cells of the table
for($i = $_GET['min-multiplier]); $i <= $_GET['max-multiplier']; $i++){
	echo '<th>' . $i . '</th>;
}
	
echo '</thead>'

//Fills the rest of the spaces of the cells

for($j = $_GET['min-multiplicand']; $j <= $_GET['max-multiplicand']; $j++){
    echo '<tr>';
    echo '<th>' . $j . '</th>';
	for($k = $_GET['min-multiplier']; $k <= $_GET['max-multiplier']; $k++){
        echo '<td>' . ($k * $j) . '</td>';
        }
}
echo '</table>'

?>

	
	
	
	
