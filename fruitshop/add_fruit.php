<?php
include 'db.php'; // Include the database connection file

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO fruits (name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $image);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New fruit added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
