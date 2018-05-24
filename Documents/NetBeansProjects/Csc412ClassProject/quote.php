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

$author = $_POST['Author'];
$quote = $_POST['Quote'];
$sql = "INSERT INTO NMarcos (Quote, Author)
VALUES ('$quote', '$author')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  

<html>
    <head>
        <title>Add a quote</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <form action="phpreceive.php" method="post">
        Quote: <input type="text" name="Quote"><br>
        Author: <input type="text" name="Author"><br>
        <input type="submit">
        </form>        
    </body>
</html>
