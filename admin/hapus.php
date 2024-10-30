<?php
include "koneksi1.php";

$nama = $_GET['nama'];
$sql = "delete from produk where nama='$nama'";
$query = mysqli_query($koneksi, $sql);
        if (!$query) {
            die(mysqli_error($koneksi));
        }
header("Location: halaman_admin.php");
?>