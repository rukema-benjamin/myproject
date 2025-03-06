<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input number from the form
    $number = $_POST['number'];

    // Check if the number is odd or even
    if ($number % 2 == 0) {
        echo "<h2>The number $number is even.</h2>";
    } else {
        echo "<h2>The number $number is odd.</h2>";
    }
}
?>
