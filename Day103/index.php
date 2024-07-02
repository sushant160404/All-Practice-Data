<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ydatabase';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Query to retrieve data from database
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["1"]. " - Name: ". $row["Sushant"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>