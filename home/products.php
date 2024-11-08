<?php
// Sample product array (could be from a database)
$products = [
    [
        'name' => 'Product 1',
        'image' => 'shirt1.jpg',
        'price' => 29.19
    ],
    [
        'name' => 'Product 2',
        'image' => 'shirt2.jpg',
        'price' => 39.29
    ],
	[
        'name' => 'Product 3',
        'image' => 'shirt3.jpg',
        'price' => 38.59
    ],
	[
        'name' => 'Product 4',
        'image' => 'shirt4.jpg',
        'price' => 29.49
    ],
	[
        'name' => 'Product 5',
        'image' => 'shirt5.jpg',
        'price' => 45.94
    ],
	[
        'name' => 'Product 6',
        'image' => 'shirt6.jpg',
        'price' => 57.97
    ],
	[
        'name' => 'Product 7',
        'image' => 'shirt7.jpg',
        'price' => 39.59
    ],
	[
        'name' => 'Product 8',
        'image' => 'shirt8.jpg',
        'price' => 32.32
    ],
	[
        'name' => 'Product 9',
        'image' => 'shirt9.jpg',
        'price' => 41.19
    ],
    [
        'name' => 'Product 10',
        'image' => 'shirt10.jpg',
        'price' => 32.18
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashioneer products</title>
    <style>
        .product {
            display: inline-block;
            width: 200px;
            text-align: center;
            margin: 10px;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .price {
            color: green;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Fashioneer products</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
