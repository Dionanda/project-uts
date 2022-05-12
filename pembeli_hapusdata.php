<?php
    include_once("dbkoneksi02.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM pembeli WHERE id_pembeli = '".$_GET["id"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: pembeli_tampildata.php");