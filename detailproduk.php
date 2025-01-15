<?php
    session_start();
    include("koneksi.php");

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id=$id");

    $data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - <?= htmlspecialchars($data['nama']) ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.2em;
            margin-bottom: 10px;
            color: #222;
        }

        h6 {
            font-size: 1.8em;
            color: #28a745;
            margin-bottom: 20px;
        }

        p {
            font-size: 1em;
            line-height: 1.8;
            color: #555;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-back:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="asset/<?= htmlspecialchars($data['foto']) ?>" alt="<?= htmlspecialchars($data['nama']) ?>" class="product-image">
        <h1><?= htmlspecialchars($data["nama"]) ?></h1>
        <h6>Rp<?= number_format($data["harga"], 0, ',', '.') ?></h6>
        <p><?= nl2br(htmlspecialchars($data["deskripsi"])) ?></p>
        <a href="index.php" class="btn-back">Kembali</a>
    </div>
</body>
</html>

