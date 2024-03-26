<?php
$host = 'localhost';
$username = 'root';
$password = '';  // Leave it empty if no password is set
$database = 'toko1';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



