<?php
    
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("Koneksi ke DBMS Mysql gagal<br>");
    // echo "Koneksi ke DBMS Mysql Sukses<br>";
