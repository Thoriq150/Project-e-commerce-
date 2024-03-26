<?php 
    require "koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($conn,"SELECT * FROM produk WHERE nama='$nama'");
    $produk = mysqli_fetch_array($queryProduk);

    $queryProdukTerkait = mysqli_query($conn,"SELECT * FROM produk WHERE kategori_id='$produk[kategori_id]' AND id!='$produk[id]' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Produk</title>
    <link rel="stylesheet" href="fontawesome/fontawesome-5/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'navbar.php'; ?>

    <div class="container-fluid py-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 mb-5 ">
                    <img src="image/<?php echo  $produk['foto']; ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
    <h1><?php echo $produk['nama']; ?></h1>
    <p class="fs-5">
        <?php echo $produk['detail']; ?>
    </p>
    <p class="text-harga">
        Rp <?php echo $produk['harga']; ?>
    </p>
    <p class="fs-5">Status Ketersediaan : <strong><?php echo $produk['ketersediaan_stok']; ?></strong></p>

    <form method="post" action="process-purchase.php">
        <input type="hidden" name="product_id" value="<?php echo $produk['id']; ?>">
        <div class="mb-3">
            <label for="size" class="form-label">Select Size:</label>
            <select class="form-select" id="size" name="size" required>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
        </div>
        <button type="submit " class="btn btn-primary warna2">Add to Cart</button>
    </form>
</div>

            </div>
        </div>
    </div>

    <!-- Produk Terkait-->
    <div class="container-fluid py-5 warna2">
        <div class="container">
            <h2 class="text-center text-white mb-5">Produk Terkait</h2>
        
            <div class="row">
                <?php while($data=mysqli_fetch_array($queryProdukTerkait)){?>
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="produk-detail.php?nama=<?php echo $data['nama'];?>">
                        <img src="image/<?php echo $data['foto'];?>" class="img-fluid img-thumbnail produk-terkait-img" alt="">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>
    <script src="bootstrap/bootstrap-5/js/js.bundle.min.js"></script> 
    <script src="fontawesome/fontawesome-5/js/all.min.js"></script>   
</body>
</html>