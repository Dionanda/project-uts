<?php

    include_once("dbkoneksi02.php");

    $sql = "CREATE TABLE barang(
        id_barang varchar(15) PRIMARY KEY,
        nama_barang varchar(40),
        harga_barang varchar(20),
        stok_barang int, 
        warna_barang varchar(10)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>Barang</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>Barang</strong> Gagal<br>";
    }

    mysqli_close($cnn);