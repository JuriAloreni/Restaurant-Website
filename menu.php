
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title> Restaurant Menu</title>
  
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <header>
        <h1>MENU</h1>

      <a href="index.html">HOME</a>
    </nav>
    <br> 

  </header>
<br>

<div class="menu-container">
    <?php
    // قائمة الأصناف
    $menu = [
        ['name' => 'Classic burger ', 'price' => 'SAR 15', 'image' => 'https://s7d1.scene7.com/is/image/mcdonaldsstage/DC_202201_0007-005_QuarterPounderwithCheese_1564x1564?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Cheese burger ', 'price' => 'SAR 18', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202302_0592-999_McDouble_Alt_1564x1564-1?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Chicken burger ', 'price' => 'SAR 16', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202012_0370_DeluxeCrispyChicken_PotatoBun_1564x1564-1?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Spicy burger ', 'price' => 'SAR 20 ', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202104_0100_DeluxeSpicyCrispyChickenSandwich_PotatoBun_1564x1564-1?wid=1000&hei=1000&dpr=off'],
        ['name' => 'coca cola ', 'price' => 'SAR 5 ', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202402_0521_MediumCoke_ContourGlassv1_1564x1564?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Sprite', 'price' => 'SAR 5 ', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202212_0721_MediumSprite_Glass_1564x1564-1?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Fanta orange', 'price' => 'SAR 7 ', 'image' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202212_1262_MediumFantaOrange_Glass_1564x1564-1?wid=1000&hei=1000&dpr=off'],
        ['name' => 'Water ', 'price' => 'SAR 1', 'image' => 'https://s7d1.scene7.com/is/image/mcdonaldsstage/DC_202402_5474_DasaniBottledWater_1564x1564:nutrition-calculator-tile?wid=750&hei=750&dpr=off'],
    ];

    // عرض الأصناف
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

