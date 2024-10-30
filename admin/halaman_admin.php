<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container" style="margin:0 auto; width:50%">
        <a href="tambahproduk.php">Tambah produk</a>
        <table class = 'table table-bordered' border="1" align="center" width="50% ">
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td> harga</td>
                <td>deskripsi</td>
                <td>kategori</td>
            </tr>
<?php
    include 'koneksi1.php';
        $query = mysqli_query($koneksi, 'select * from produk');
        while ($produk = mysqli_fetch_array($query)) {
?>
            <tr>
                <td><?= $produk['id'] ?></td>
                <td><?= $produk['nama'] ?></td>
                <td><?= $produk['harga'] ?></td>
                <td><?= $produk['deskripsi'] ?></td>
                <td><?= $produk['kategori'] ?></td>
                <td>
                <a href="hapus.php?nama=<?= $produk['nama'] ?>">
                        <button type="submit" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>

</html>