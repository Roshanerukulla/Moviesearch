<?php
include 'dbconnection.php';

// Retrieve movie name from the URL
$movieName = $_GET["movieName"];

// Query the database to get details of the selected movie
$sql = "SELECT * FROM `TABLE 6` WHERE Movie = '$movieName'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Display detailed information about the selected movie
    echo "<h1>Movie Details</h1>";
    echo "<p><strong>Movie Name:</strong> " . $row['Movie'] . "</p>";
    echo "<p><strong>Release Year:</strong> " . $row['Release Year'] . "</p>";
    echo "<p><strong>Ownership:</strong> " . $row['Ownership'] . "</p>";
    echo "<p><strong>Director:</strong> " . $row['Director'] . "</p>";
} else {
    echo "Movie not found";
}

$conn->close();
?>
