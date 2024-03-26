<?php
    require 'session.php';
    require '../koneksi.php';

    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($conn, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel='stylesheet' href="../bootstrap/bootstrap-5/css/bootstrap.min.css">
    <link rel='stylesheet' href="../fontawesome/fontawesome-5/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: green;
        border-radius: 10px;
    }

    .summary-produk {
        background-color: blue;
        border-radius: 15px;
    }

    .no-decoration {
        text-decoration: none;
    }

    .no-decoration:hover {
        color: blue;
    }

    .banner {
        height: 40vh;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../image/admin1.png');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }
</style>

<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">Welcome <?php echo $_SESSION['username']; ?></h1>
        </div>
    </div>

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa-solid fa-house"></i> Home
                </li>
            </ol>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-kategori pt-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-align-justify fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4"><?php echo $jumlahKategori; ?> Kategori</p>
                            <p><a href="Kategori.php" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-produk pt-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-box  fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Produk</h3>
                            <p class="fs-4"><?php echo $jumlahProduk; ?> Produk</p>
                            <p><a href="produk.php" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/bootstrap-5/js/js.bundle.min.js"></script>
    <script src="../fontawesome/fontawesome-5/js/all.min.js"></script>
</body>
</html>
