<?php
$server = "localhost";
$username = "rerukul";
$password = "unsafest insolvency tread";
$database = "rerukul_db";


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