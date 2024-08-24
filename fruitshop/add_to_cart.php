<?php
session_start(); // Start the session

include 'db.php'; // Include the database connection

// Check if the fruit ID is sent via POST
if (isset($_POST['fruit_id'])) {
    $fruit_id = $_POST['fruit_id'];

    // Fetch the fruit details from the database
    $sql = "SELECT * FROM fruits WHERE id = $fruit_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $fruit = $result->fetch_assoc();

        // Initialize cart if not already set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Add fruit to cart
        $_SESSION['cart'][] = $fruit;
    }

    $conn->close(); // Close the database connection
}

// Redirect back to the index page
header('Location: index.php');
exit();
?>
