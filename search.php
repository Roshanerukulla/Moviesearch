<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    
    $movie_name = $_POST["Movie"];
    $year = $_POST["ReleaseYear"];
    $studio = $_POST["Ownership"];
    $director = $_POST["Director"];
    
    $sql = "SELECT Movie, Release Year, Ownership, Director FROM Marvel WHERE $movie_name LIKE '%$movie_name'";
    $conn->query($sql);

    $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result) > 0) {
	    // passing output data of each row to our table structure
	    while($row = mysqli_fetch_assoc($result)) {
			$html = $html."<tr><td>".$row['Movie']."</td><td>".$row['Release Year']."</td><td>".$row['Ownership']."</td><td>".$row['Director']."</td>
            ></tr>";
	    }
	} else {
	    echo "No results";
	}
	
	$html=$html."</table></html>";

  // Displaying the table
	echo $html;
    exit();
}


$conn->close();
?>
