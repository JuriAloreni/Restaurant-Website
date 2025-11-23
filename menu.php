<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Burger Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            border: 2px solid rgba(245, 245, 245, 0);
            border-radius: 5%;
            background-color: rgba(238, 205, 205, 0.702);
            padding: 3%;
            color: rgb(138, 69, 69);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 37px;
        }
        .item-card {
            background-color: rgba(238, 205, 205, 0.5);
            border-radius: 10px;
            margin: 10px;
            width: 220px;
            text-align: center;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .item-card img {
            width: 100%;
            border-radius: 10px;
        }
        .item-name {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 0;
            color: #333;
        }
        .item-price {
            font-size: 16px;
            color: #ff3366;
        }
    </style>
  
    <link rel="stylesheet" href="style.css?v=3">
</head>
<body>

<h1>Burger Restaurant Menu</h1>

<nav>
    <!-- <a href="contact.html">Contact Us</a>
    <a href="order.php">Orders</a>
    <a href="menu.php">Menu</a> -->
    <a href="index.html">Home</a>
</nav>
<br>
<hr color="pink"><hr color="pink">

<div class="menu-container">
    <?php
    // Menu items
    $menu = [
        ['name' => 'Classic Burger', 'price' => '15 SAR', 'image' => 'https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Cheese Burger', 'price' => '18 SAR', 'image' => 'https://images.unsplash.com/photo-1604908177524-4cc1c1dcd87f?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Chicken Burger', 'price' => '16 SAR', 'image' => 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Spicy Burger', 'price' => '20 SAR', 'image' => 'https://images.unsplash.com/photo-1617196030647-973856d0bfc7?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Coca Cola', 'price' => '5 SAR', 'image' => 'https://images.unsplash.com/photo-1580910051076-73f8ec6a2824?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Sprite', 'price' => '5 SAR', 'image' => 'https://images.unsplash.com/photo-1615484474204-6ee6b1b2d2d7?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Orange Juice', 'price' => '7 SAR', 'image' => 'https://images.unsplash.com/photo-1570197783097-d2f3c7f26457?auto=format&fit=crop&w=500&q=60'],
        ['name' => 'Mango Juice', 'price' => '8 SAR', 'image' => 'https://images.unsplash.com/photo-1598514983840-8722db98bbfb?auto=format&fit=crop&w=500&q=60'],
    ];

    // Display items
    foreach($menu as $item) {
        echo '<div class="item-card">';
        echo '<img src="'.$item['image'].'" alt="'.$item['name'].'">';
        echo '<div class="item-name">'.$item['name'].'</div>';
        echo '<div class="item-price">'.$item['price'].'</div>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
