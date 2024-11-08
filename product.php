<?php
// Product array with consistent keys for name, price, and image
$products = [
    ["name" => "Product 1", "price" => "$49.99", "image" => "home/man1.jpg"],
    ["name" => "Product 2", "price" => "$59.99", "image" => "home/man2.jpg"],
    ["name" => "Product 3", "price" => "$69.99", "image" => "home/product3.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        /* Simple styling for product cards */
        .product-list {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            width: 200px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .product-card p {
            color: green;
            font-weight: bold;
            margin: 5px 0;
        }
        .product-card button {
            padding: 8px 12px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-card button:hover {
            background-color: #e65550;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Our Products</h1>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <!-- Product image -->
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                
                <!-- Product name -->
                <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                
                <!-- Product price -->
                <p><?php echo htmlspecialchars($product['price']); ?></p>
                
                <!-- Add to Cart button -->
                <button>Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
