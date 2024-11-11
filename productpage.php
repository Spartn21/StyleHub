<?php
// Sample product array (could be from a database)
$products = [
    [
        'name' => 'Product 1',
        'image' => 'home/shirt1.jpg', // Updated path to include 'home' folder
        'price' => 29.19
    ],
    [
        'name' => 'Product 2',
        'image' => 'home/shirt2.jpg',
        'price' => 39.29
    ],
    [
        'name' => 'Product 3',
        'image' => 'home/shirt3.jpg',
        'price' => 38.59
    ],
    [
        'name' => 'Product 4',
        'image' => 'home/shirt4.jpg',
        'price' => 29.49
    ],
    [
        'name' => 'Product 5',
        'image' => 'home/shirt5.jpg',
        'price' => 45.94
    ],
    [
        'name' => 'Product 6',
        'image' => 'home/shirt6.jpg',
        'price' => 57.97
    ],
    [
        'name' => 'Product 7',
        'image' => 'home/shirt7.jpg',
        'price' => 39.59
    ],
    [
        'name' => 'Product 8',
        'image' => 'home/shirt8.jpg',
        'price' => 32.32
    ],
    [
        'name' => 'Product 9',
        'image' => 'home/shirt9.jpg',
        'price' => 41.19
    ],
    [
        'name' => 'Product 10',
        'image' => 'home/shirt10.jpg',
        'price' => 32.18
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="products">
        <h2>Our Products</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p class="price">UGX <?php echo number_format($product['price'], 2); ?></p>
                    <button>Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>
</html>
