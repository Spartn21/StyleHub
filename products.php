<?php
// Sample product array (could be from a database)
$products = [
    ['name' => 'Product 1', 'image' => 'home/shirt1.jpg', 'price' => 29.19],
    ['name' => 'Product 2', 'image' => 'home/shirt2.jpg', 'price' => 39.29],
    ['name' => 'Product 3', 'image' => 'home/shirt3.jpg', 'price' => 38.59],
    ['name' => 'Product 4', 'image' => 'home/shirt4.jpg', 'price' => 29.49],
    ['name' => 'Product 5', 'image' => 'home/shirt5.jpg', 'price' => 45.94],
    ['name' => 'Product 6', 'image' => 'home/shirt6.jpg', 'price' => 57.97],
    ['name' => 'Product 7', 'image' => 'home/shirt7.jpg', 'price' => 39.59],
    ['name' => 'Product 8', 'image' => 'home/shirt8.jpg', 'price' => 32.32],
    ['name' => 'Product 9', 'image' => 'home/shirt9.jpg', 'price' => 41.19],
    ['name' => 'Product 10', 'image' => 'home/shirt10.jpg', 'price' => 32.18]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashioneer Products</title>
    <style>
        /* Basic styles for product display */
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 20px;
        }
        .product {
            width: 200px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .price {
            color: green;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Fashioneer Products</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <!-- Display product image -->
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                
                <!-- Display product name -->
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                
                <!-- Display product price -->
                <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
