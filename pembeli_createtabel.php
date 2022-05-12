<?php

    include_once("dbkoneksi02.php");

    $sql = "CREATE TABLE pembeli(
        id_pembeli varchar(15) PRIMARY KEY,
        nama_pembeli varchar(40),
        alamat_pembeli varchar(20),
        tanggal_lahir date,
        no_handphone varchar(15),
        jenis_kelamin varchar(1)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>Pembeli</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>Pembeli</strong> Gagal<br>";
    }

    mysqli_close($cnn);