<?php
    require "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_id = $_POST['product_id'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        // Perform necessary actions (e.g., update database, add to cart, etc.)
        // You can add more logic here based on your requirements.

        // Redirect to a thank you page or shopping cart page
        header("Location: thank-you.php");
        exit();
    } else {
        // Redirect to an error page if accessed without POST request
        header("Location: error.php");
        exit();
    }
?>
