<?php

$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "project";
$conn = new mysqli($hostname, $dbusername, $dbpassword, $database);


if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}


?>