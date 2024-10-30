<?php
    include 'koneksi1.php';
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $nama_foto = $_FILES['foto']['nama'];
    $lokasi_tmp = $_FILES['foto']['tmpname'];
    $nama_baru = time().$nama_foto;

    $sql = "insert into produk values('', '$nama', '$harga', '$deskripsi', '$kategori','$nama_baru')";
    $query = mysqli_query($koneksi, $sql);

    move_uploaded_file($lokasi_tmp)
        

?>  