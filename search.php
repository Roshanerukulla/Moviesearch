<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    
    $movie_name = $_POST["Movie"];
    $year = $_POST["ReleaseYear"];
    $studio = $_POST["Ownership"];
    $director = $_POST["Director"];
    
    $sql = "SELECT Movie, Release Year, Ownership, Director FROM Marvel WHERE Movie LIKE '%$movie_name'";
    $conn->query($sql);

    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
        // Initialize HTML table
        $html = "<html><table border='1'><tr><th>Movie</th><th>Release Year</th><th>Ownership</th><th>Director</th></tr>";

        // Passing output data of each row to the table structure
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= "<tr><td>" . $row['Movie'] . "</td><td>" . $row['ReleaseYear'] . "</td><td>" . $row['Ownership'] . "</td><td>" . $row['Director'] . "</td></tr>";
        }

        // Close the HTML table
        $html .= "</table></html>";
        echo $html;
    } else {
        echo "No results";
    }
    exit();
}


$conn->close();
?>
