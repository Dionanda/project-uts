<?php
    
    include_once("dbkoneksi01.php");

    if($cnn){
        $sql = "CREATE DATABASE db_gadget;";

        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            echo "Database db_gadget <strong>sukses</strong> dibuat<br>";
        }else{
            echo "Database db_gadget <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }