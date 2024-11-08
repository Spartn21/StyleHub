<?php
// Sample product array (prices converted to UGX format)
$products = [
    ['name' => 'Product 1', 'image' => 'home/shirt1.jpg', 'price' => 108000],
    ['name' => 'Product 2', 'image' => 'home/shirt2.jpg', 'price' => 145000],
    ['name' => 'Product 3', 'image' => 'home/shirt3.jpg', 'price' => 142000],
    ['name' => 'Product 4', 'image' => 'home/shirt4.jpg', 'price' => 109000],
    ['name' => 'Product 5', 'image' => 'home/shirt5.jpg', 'price' => 170000],
    ['name' => 'Product 6', 'image' => 'home/shirt6.jpg', 'price' => 214000],
    ['name' => 'Product 7', 'image' => 'home/shirt7.jpg', 'price' => 146000],
    ['name' => 'Product 8', 'image' => 'home/shirt8.jpg', 'price' => 119000],
    ['name' => 'Product 9', 'image' => 'home/shirt9.jpg', 'price' => 152000],
    ['name' => 'Product 10', 'image' => 'home/shirt10.jpg', 'price' => 118000]
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
                
                <!-- Display product price in UGX format -->
                <p class="price">UGX <?php echo number_format($product['price']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
