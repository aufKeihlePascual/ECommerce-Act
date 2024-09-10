<?php
session_start();
require "products.php";

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <style>
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
        }
        .product-item {
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            width: 22%;
            margin-bottom: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .product-item button {
            margin-top: 10px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
        }
        .product-item button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Products</h1>
    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['price']; ?> PHP</p>
                <form method="post" action="add-to-cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <div style="text-align: right; padding-right: 30px;">
        <a href="cart.php">View Cart</a>
    </div>
    
</body>
</html>
