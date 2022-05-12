<?php
include_once("dbkoneksi02.php");

if($cnn){
    $sql = "ALTER TABLE pesanan add constraint fk_barang foreign key (id_barang) references barang (id_barang),
    add constraint fk_pembeli foreign key (id_pembeli) references pembeli (id_pembeli)";

    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Relasi pada pesanan berhasil Dibuat <br>";
    }else{
        echo "Relasi pada pesanan gagal Dibuat <br>";
    }
    
    mysqli_close($cnn);
}