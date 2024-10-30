<?php

    include("koneksi.php");
    echo "<h1> login </h1>";

    $email = $_POST["email"];
    $password = $_POST["password"];
    $hash = password_hash("$password", PASSWORD_DEFAULT);

    $query = mysqli_query($koneksi, "INSERT INTO `user`(`email`, `password`) VALUES ('$email','$hash')");


    

?>