<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Fruit Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Your Shopping Cart</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cart.php">View Cart</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section id="cart">
            <h2>Items in Your Cart</h2>
            <?php
            // Check if the cart session exists and is not empty
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                echo '<ul>';
                foreach ($_SESSION['cart'] as $fruit) {
                    echo '<li>';
                    echo '<img src="' . $fruit['image'] . '" alt="' . $fruit['name'] . '" style="width: 50px; height: 50px;">';
                    echo '<strong>' . $fruit['name'] . '</strong> - $' . $fruit['price'];
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Your cart is empty.</p>';
            }
            ?>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
    </footer>
</body>
</html>
