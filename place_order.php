<?php
session_start();
require "products.php";
// $order_code = ???;


// TODO: Save order data to orders-[ORDER_CODE].txt
// Get the order from the cart (Session variable)
// Map the order Ids from the $products variable
// Compute the total
// Write the orders in a file
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
    <!-- TODO: Display order summary -->
</body>
</html>
