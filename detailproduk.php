<?php
    include("koneksi.php");

    $id = $_GET["id"];
    $query = mysqli_query($koneksi, "select * from produk where id=$id");

    $data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <img src="asset/<?= $data['foto']?>">
    <h1><?= $data["nama"]?></h1>
    <h6><?= $data["harga"]?></h6>
    <p><?= $data["deskripsi"]?></p>
</body>
</html>
