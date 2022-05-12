<?php
    include_once("dbkoneksi02.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM barang WHERE id_barang = '".$_GET["id"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: barang_tampildata.php");