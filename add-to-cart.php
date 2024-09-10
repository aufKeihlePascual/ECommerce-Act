<?php

session_start();
require "products.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            $_SESSION['cart'][] = $product;
            break;
        }
    }
}
header("Location: index.php");
?>