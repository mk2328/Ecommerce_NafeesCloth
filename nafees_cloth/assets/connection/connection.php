<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ecommerce";

$conn = new MySQLi($server , $user , $password , $db);

if($conn -> connect_error)
{
	die("connection not created");
}
else{
	// die("connection created successfully");
}

?>