<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to the Fruit Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#fruits">Fruits</a></li>
                <li><a href="cart.php">View Cart</a></li> <!-- Link to view cart -->
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section id="home">
            <h2>Fresh Fruits Everyday</h2>
            <p>We offer the freshest and most delicious fruits directly from the farm.</p>
        </section>

        <section id="fruits">
            <h2>Our Featured Fruits</h2>
            <?php
            include 'db.php'; // Include the database connection file

            // Fetch fruits from the database
            $sql = "SELECT * FROM fruits";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="fruit-card">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<h3>' . $row["name"] . '</h3>';
                    echo '<p>Price: $' . $row["price"] . '</p>';
                    echo '<form method="post" action="add_to_cart.php">';
                    echo '<input type="hidden" name="fruit_id" value="' . $row["id"] . '">';
                    echo '<button type="submit">Buy</button>';
                    echo '</form>';
                    echo '</div>';
                }
            } else {
                echo "<p>No fruits available</p>";
            }

            $conn->close(); // Close the database connection
            ?>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
    </footer>
</body>
</html>
