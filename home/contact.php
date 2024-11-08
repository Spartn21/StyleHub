<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1 align="center">Contact Us</h1>
    </header>

    <main>
        <form action="contact.php" method="POST">
		
		<br>
		<br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
			<br>
			<br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
			<br>
			<br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
			<br>
			<br>

            <button type="submit">Send</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);
            echo "<p>Thank you, $name! We have received your message.</p>";
        }
        ?>
    </main>

</body>
</html>
