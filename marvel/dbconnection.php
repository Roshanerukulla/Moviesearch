<?php
$server = "localhost";
$username = "rerukull";
$password = "unsafest insolvency tread";
$database = "rerukull_db";


// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{ 
	
}

?>