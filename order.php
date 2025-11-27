
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
    <h1>ORDER</h1>
    <nav>
      <a href="index.html">HOME</a>
    </nav>
    <br> 

  </header>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];

        echo "<div class='success'>";
        echo "Your order has been successfully received <b>$name</b><br>";
        echo "order: <b>$item</b> × $quantity<br>";
        echo "You will be contacted on this number: <b>$phone</b>";
        echo "</div>";
    } else {
    ?>
    <form method="POST" action="" class="for">
        <div class="">
        <label for="name">Full Name :</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number :</label>
        <input type="text" id="phone" name="phone" required>
        
        
        <label for="item" class="lab"> Select Item: </label>
        <select id="item" name="item" required>
            <option value="">-- Select --</option>
            <option value="Classic burger ">Classic burger </option>
            <option value="Cheese burger ">Cheese burger </option>
            <option value=" Chicken burge">Chicken burger </option>
            <option value="Spicy burger  ">Spicy burger </option>
            <option value="coca cola ">coca cola </option>
            <option value="Sprite">Sprite</option>
            <option value=" Fanta orange">Fanta orange </option>
            <option value="Water">Water</option>
        </select>
        <label for="quantity">Quantity :</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <input type="submit" value="Order">
        </div>
    </form>
    <?php } ?>

  <footer class="jh">
    <p>2025 Restaurant</p>
  </footer>

</body>
</html>

