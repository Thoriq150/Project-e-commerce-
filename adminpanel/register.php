<?php
    session_start();
    require "../koneksi.php"; // Assuming this file contains your database connection code

    if (isset($_SESSION['login'])) {
        header('location: index.php');
        exit();
    }

    if (isset($_POST['registerbtn'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

        // You can add additional validation here if needed

        // Check if the username is already taken
        $checkUsernameQuery = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
        $countUsername = mysqli_num_rows($checkUsernameQuery);

        if ($countUsername > 0) {
            ?>
            <div class="alert alert-warning" role="alert">
                Username already taken. Choose a different one.
            </div>
            <?php
        } else {
            // Insert the new user into the database
            $insertUserQuery = mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

            if ($insertUserQuery) {
                ?>
                <div class="alert alert-success" role="alert">
                    Registration successful! You can now <a href="login.php">login</a>.
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    Registration failed. Please try again later.
                </div>
                <?php
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel='stylesheet' href="../bootstrap/bootstrap-5/css/bootstrap.min.css">
</head>
<style>
    .main {
        height: 100vh;
        background: url('admin.png') center center fixed;
        background-size: cover;
    }

    .register-box {
        width: 500px;
        height: auto;
        border: solid 1px;
        box-sizing: border-box;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        margin-top: 50px;
    }
</style>

<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="register-box shadow">
            <h2 class="text-center mb-4">Register</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success form-control" type="submit" name="registerbtn">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
