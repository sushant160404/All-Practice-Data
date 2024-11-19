<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Fruit Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Panel - Fruit Shop</h1>
    </header>

    <main>
        <section id="admin">
            <h2>Add New Fruit</h2>
            <form action="add_fruit.php" method="POST">
                <label for="name">Fruit Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
                <label for="image">Image Path:</label>
                <input type="text" id="image" name="image" required>
                <button type="submit">Add Fruit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
    </footer>
</body>
</html>
