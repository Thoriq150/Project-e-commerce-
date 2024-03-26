<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($conn,"SELECT *FROM produk  LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="fontawesome/fontawesome-5/css/fontawesome.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'navbar.php'; ?>

    <!-- Banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Online Retail</h1>
            <h2>Mau Cari Apa?</h2>
            <div class="col-8 offset-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Barang" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button class="btn warna2 text-white" type="submit">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5 ">
                <div class="col-md-4 mb-3" >
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Laki-Laki">Baju Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3" >
                    <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Wanita">Baju Wanita</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3" >
                    <div class="highlighted-kategori kategori-sepatu d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Sepatu">Sepatu</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
    <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p>
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ipsum facilis veniam nemo aliquam ducimus. 
               Sed voluptate nemo officia soluta sunt itaque autem iusto. Pariatur omnis doloremque tenetur asperiores, 
               suscipit expedita eveniet quae! Quae aut optio aperiam, doloremque possimus cupiditate dolores rem necessitatibus 
               laudantium asperiores consequatur voluptates, veritatis modi nobis sint dolorem. Ducimus soluta, officiis enim 
               dolorum dolor minima delectus voluptatibus dolore consequuntur sunt! Delectus velit deserunt fugiat perspiciatis 
               maxime minima asperiores architecto eligendi provident a rem sapiente hic temporibus enim et esse possimus, 
               necessitatibus quasi nesciunt adipisci harum eaque! Inventore voluptates excepturi obcaecati. Consequatur harum 
               tempora soluta optio vel!
            </p>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid  py-5">
        <div class="container text-center">
            <h3>Produk</h3>
            
            <div class="row mt-5">
            <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100" >
                        <div class="image-box">
                            <img src="image/<?php echo $data ['foto'];?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama'];?></h5>
                            <p class="card-text text-truncate"><?php echo $data['detail'] ?></p>
                            <p class="card-text text-harga">Rp <?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama'];?>" class="btn warna1 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <a href="produk.php" class="btn btn-outline-warning mt-4 p-3">See More</a>

        </div>
    </div>

   <?php require 'footer.php'; ?>


    <script src="bootstrap/bootstrap-5/js/js.bundle.min.js"></script> 
    <script src="fontawesome/fontawesome-5/js/all.min.js"></script>   
</body>
</html>
