<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Thank You</title>
    <link rel="stylesheet" href="fontawesome/fontawesome-5/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            height: 100vh;
        }

        .thank-you-container {
            text-align: center;
            padding: 20px;
            background-color: rgb(201, 119, 20);
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php require 'navbar.php'; ?>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="thank-you-container">
            <h1>Thank you for your purchase!</h1>
            <p>Your order is being processed.</p>
        </div>
    </div>

    <script>
        // Redirect to index.php after 5 seconds
        setTimeout(function() {
            window.location.href = "index.php";
        }, 2000);
    </script>

</body>
</html>

