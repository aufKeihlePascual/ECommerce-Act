<?php
session_start();
require "products.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    <?php echo $item['name']; ?> - PHP <?php echo $item['price']; ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </ul>
    
    <a href="reset-cart.php">Clear my cart</a>
    <a href="place_order.php">Place the order</a>
</body>
</html>
