
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Page - Burger Restaurant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            direction: ltr;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            border-radius: 5%;
            background-color: rgba(238, 205, 205, 0.702);
            padding: 3%;
            color: rgb(138, 69, 69);
            font-size: 35px;
            margin-top: 20px;
        }
        form {
            background-color: rgba(238, 205, 205, 0.5);
            width: 400px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: rgb(138, 69, 69);
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }
        input[type="submit"]:hover {
            background-color: rgb(100, 50, 50);
        }
        .success {
            text-align: center;
            color: green;
            font-size: 20px;
            margin-top: 20px;
        }
        nav {
            text-align: center;
            margin: 20px;
        }
        nav a {
            text-decoration: none;
            color: rgb(138, 69, 69);
            font-weight: bold;
            margin: 0 10px;
        }
        hr {
            border: none;
            height: 2px;
            background-color: pink;
        }
    </style>
</head>
<body>

    <div class="header">Order Page</div>

    <nav>
        <a href="index.html">Home</a> |
        <a href="menu.php">Menu</a>
    </nav>

    <hr><hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $item = htmlspecialchars($_POST['item']);
        $quantity = intval($_POST['quantity']);

        echo "<div class='success'>";
        echo "✅ Your order has been received, <b>$name</b><br>";
        echo "Order: <b>$item</b> × $quantity<br>";
        echo "We will contact you at: <b>$phone</b>";
        echo "</div>";
    } else {
    ?>
    <form method="POST" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="item">Choose Item:</label>
        <select id="item" name="item" required>
            <option value="">-- Select --</option>
            <option value="Classic Burger">Classic Burger</option>
            <option value="Cheese Burger">Cheese Burger</option>
            <option value="Chicken Burger">Chicken Burger</option>
            <option value="Spicy Burger">Spicy Burger</option>
            <option value="Coca Cola">Coca Cola</option>
            <option value="Sprite">Sprite</option>
            <option value="Orange Juice">Orange Juice</option>
            <option value="Mango Juice">Mango Juice</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <input type="submit" value="Place Order">
    </form>
    <?php } ?>

</body>
</html>
