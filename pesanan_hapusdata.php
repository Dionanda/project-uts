<?php
    include_once("dbkoneksi02.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM pesanan WHERE id_pesanan = '".$_GET["id"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: pesanan_tampildata.php");