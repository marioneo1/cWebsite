<?php
$servername = "localhost";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully" . "<br>";

$sql = "SELECT `Quote`, `Author` FROM `NMarcos`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Quote: " . $row["Quote"]. " - Author Name: " . $row["Author"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

