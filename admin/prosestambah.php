<?php
    include 'koneksi1.php';
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    $sql = "insert into produk values('', '$nama', '$harga', '$deskripsi', '$kategori')";
    $query = mysqli_query($koneksi, $sql);

        
    header("location:halaman_admin.php")    
?>  