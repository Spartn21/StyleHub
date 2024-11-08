<?php
// Define the product array with name, price, and image for each product in UGX
$products = [
    ["name" => "Product 1", "price" => 180000, "image" => "home/man1.jpg"],
    ["name" => "Product 2", "price" => 220000, "image" => "home/man2.jpg"],
    ["name" => "Product 3", "price" => 250000, "image" => "home/product3.jpg"],
    ["name" => "Product 4", "price" => 109000, "image" => "home/shirt4.jpg"],
    ["name" => "Product 5", "price" => 170000, "image" => "home/shirt5.jpg"],
    ["name" => "Product 6", "price" => 214000, "image" => "home/shirt6.jpg"],
    ["name" => "Product 7", "price" => 146000, "image" => "home/shirt7.jpg"],
    ["name" => "Product 8", "price" => 119000, "image" => "home/shirt8.jpg"],
    ["name" => "Product 9", "price" => 152000, "image" => "home/shirt9.jpg"],
    ["name" => "Product 10", "price" => 118000, "image" => "home/shirt10.jpg"]
];
?>

<div class="product-list">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <!-- Display product image -->
            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            
            <!-- Display product name -->
            <h3><?php echo htmlspecialchars($product['name']); ?></h3>
            
            <!-- Display product price in UGX format -->
            <p class="price">UGX <?php echo number_format($product['price']); ?></p>
            
            <!-- Add to Cart button -->
            <button>Add to Cart</button>
        </div>
    <?php endforeach; ?>
</div>
