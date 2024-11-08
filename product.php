<?php
$products = [
    ["men ware" => "Product 1", "price" => "$49.99", "image" => "man1.jpg"],
    ["men " => "Product 2", "price" => "$59.99", "image" => "man2.jpg"],
    ["women" => "Product 3", "price" => "$69.99", "image" => "images/product3.jpg"]
];

foreach ($products as $product) {
    echo "<div class='product-card'>";
    echo "<img src='{$product['image']}' alt='{$product['name']}'>";
    echo "<h3>{$product['name']}</h3>";
    echo "<p>{$product['price']}</p>";
    echo "<button>Add to Cart</button>";
    echo "</div>";
}
?>
