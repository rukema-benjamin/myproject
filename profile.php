<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Check if a number is odd or even</h2>

    <!-- The form to enter a number -->
    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form input
        $number = $_POST['number'];

        // Check if the number is odd or even
        if ($number % 2 == 0) {
            echo "<h3>The number $number is even.</h3>";
        } else {
            echo "<h3>The number $number is odd.</h3>";
        }
    }
    ?>
</body>
</html>
