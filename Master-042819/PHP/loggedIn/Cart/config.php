<?php
$currency = '&#36; '; //Currency Character or code

$db_username = 'maa3755';
$db_password = 'Rizriz32!';
$db_name = 'bentley';
$db_host = 'penguin';

$shipping_cost     = 1.50; //shipping cost
					
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
