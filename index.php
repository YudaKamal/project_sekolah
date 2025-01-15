<?php
    include("koneksi.php");
    $query = mysqli_query($koneksi, "select * from produk");
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cihuyy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(90deg, #4CAF50, #81C784);
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            margin-top: 50px;
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">cihuyy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    <li class="nav-item"><a href="logout.php" class="btn btn-outline-light">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade mt-4">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/gw banget.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="asset/banner.avif" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="asset/banner2.avif" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container text-center mt-5">
        <h2 class="mb-4">Produk Kami</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php while ($data = mysqli_fetch_array($query)) { ?>
            <div class="col">
                <div class="card h-100">
                    <img src="asset/<?php echo $data['foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $data['nama'] ?> </h5>
                        <p class="card-text">Harga: <?php echo $data['harga'] ?></p>
                        <p class="card-text">Deskripsi: <?php echo $data['deskripsi'] ?></p>
                        <a href="detailproduk.php?id=<?= $data['id'] ?>" class="btn btn-primary">detail produk</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 cihuyy. All Rights Reserved.</p>
    </footer>
</body>

</html>
