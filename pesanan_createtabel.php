<?php

    include_once("dbkoneksi02.php");

    $sql = "CREATE TABLE pesanan(
        id_pesanan varchar(15) PRIMARY KEY,
        id_barang varchar(15),
        id_pembeli varchar(15),
        tanggal_pemesanan date, 
        estimasi_diterima date
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>Pesanan</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>Pesanan</strong> Gagal<br>";
    }

    mysqli_close($cnn);