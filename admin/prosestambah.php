<?php
    include 'koneksi1.php';
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_tmp = $_FILES['foto']['tmp_name'];
    $nama_baru = time().$nama_foto;


    $sql = "INSERT INTO produk (`id`, `nama`, `harga`, `deskripsi`, `kategori`, `foto`) values('', '$nama', '$harga', '$deskripsi', '$kategori','$nama_baru')";
    $query = mysqli_query($koneksi, $sql);
    
    
    header("location: halaman_admin.php");
    
    move_uploaded_file($lokasi_tmp,"../asset/$nama_foto");


?>  