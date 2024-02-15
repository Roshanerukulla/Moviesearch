<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    
    $movie_name = $_POST["Movie"];
    $year = $_POST["Release Year"];
    $studio = $_POST["Ownership"];
    $director = $_POST["Director"];
    
    $sql = "SELECT Movie FROM Marvel WHERE $movie_name LIKE '%$movie_name'";
    $conn->query($sql);

    exit();
}


$conn->close();
?>
