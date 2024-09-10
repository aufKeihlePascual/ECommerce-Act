<?php
session_start();
require "products.php";

$order_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);

$order_date = date('Y-m-d H:i:s');

$cart_items = $_SESSION['cart'];

$total_price = 0;
foreach ($cart_items as $item) {
    $total_price += $item['price'];
}

$order_data = "Order Code: $order_code\n";
$order_data .= "Date Ordered: $order_date\n\n";
$order_data .= "Order Items:\n";

foreach ($cart_items as $item) {
    $order_data .= "Product ID: " . $item['id'] . "\n";
    $order_data .= "Product Name: " . $item['name'] . "\n";
    $order_data .= "Price: " . $item['price'] . " PHP\n";
    $order_data .= "\n";
}

$order_data .= "Total Price: $total_price PHP\n";

file_put_contents("orders-$order_code.txt", $order_data);

$_SESSION['cart'] = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place Order</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order!</p>
    <p>Order Code: <?php echo $order_code; ?></p>
    <p>Total Price: <?php echo $total_price; ?> PHP</p>
</body>
</html>
