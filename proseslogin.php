<?php

    include("koneksi.php");
    echo "<h1> login  </h1>";


    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "SELECT * FROM user where email='$email'");
    $jumlah_data = mysqli_num_rows($query);
    
    if ($jumlah_data > 0) {
        $data = mysqli_fetch_array($query);

        if (password_verify($password, $data['password'])){
            session_start();
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['role'] = $data['role'];

            if($_SESSION['role'] == "admin"){
                header("location:admin/halaman_admin.php");
            }else{header("location:index.php");}
        }else{
            header("location:login.php?error=username atau password salah");
        }
    }else{
        header("location:login.php?error=username atau password salah");
    }
?>

<?php
