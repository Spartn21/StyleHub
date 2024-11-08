<?php
// Product array with consistent keys for name, price, and image in UGX
$products = [
    ["name" => "Product 1", "price" => "UGX 180,000", "image" => "home/man1.jpg"],
    ["name" => "Product 2", "price" => "UGX 220,000", "image" => "home/man2.jpg"],
    ["name" => "Product 3", "price" => "UGX 250,000", "image" => "home/product3.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Hub - Fashion Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <img src="home/logo2.jpg" alt="Fashion Store Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <h1>Welcome to Style Hub</h1>
            <p>Discover the latest trends and styles</p>
            <button onclick="showAlert()">Shop Now</button>
        </section>

        <!-- Products Section -->
        <section id="products" class="products">
            <h2>Featured Products</h2>
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
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <h2>About Style Hub</h2>
            <p>Style Hub is an online platform dedicated to all styles of fashion for both men and women.</p>
            <p>The platform gives you a chance to explore various fashion styles, including both classic and the latest trends.</p>

            <div class="image-gallery">
                <img src="home/man4.jpg" alt="Men's Style">
                <img src="home/man1.jpg" alt="Men's Style 2">
                <img src="home/man2.jpg" alt="Men's Style 3">
            </div>

            <!-- Size Guide Table -->
            <h3>Size Guide</h3>
            <p>Find your perfect size with our easy-to-follow size guide:</p>
            <table class="size-guide">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Chest (in)</th>
                        <th>Waist (in)</th>
                        <th>Hip (in)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Small</td>
                        <td>34 - 36</td>
                        <td>28 - 30</td>
                        <td>35 - 37</td>
                    </tr>
                    <tr>
                        <td>Medium</td>
                        <td>38 - 40</td>
                        <td>32 - 34</td>
                        <td>39 - 41</td>
                    </tr>
                    <tr>
                        <td>Large</td>
                        <td>42 - 44</td>
                        <td>36 - 38</td>
                        <td>43 - 45</td>
                    </tr>
                    <tr>
                        <td>X-Large</td>
                        <td>46 - 48</td>
                        <td>40 - 42</td>
                        <td>47 - 49</td>
                    </tr>
                </tbody>
            </table>

            <!-- Buyer Information Form -->
            <h3>Order Information</h3>
            <p>Fill out your details below to inquire about a product:</p>
            <form id="buyer-form" class="buyer-form" action="submit_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="product">Product:</label>
                <input type="text" id="product" name="product" required>

                <label for="size">Size:</label>
                <select id="size" name="size" required>
                    <option value="">Select Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="X-Large">X-Large</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <p>Email us at <a href="mailto:info@stylehub.com">info@stylehub.com</a></p>
            <p>Follow us on social media for more updates!</p>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Style Hub. All rights reserved.</p>
    </footer>

</body>
</html>
