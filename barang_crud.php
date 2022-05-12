<?php
    include_once("konfigurasi.php");

    function tambahdata($data){
        $sqlINSERT = "INSERT INTO barang(id_barang, nama_barang, harga_barang, stok_barang, warna_barang)
        VALUES ('".$data["ID"]."',
        '".$data["NAMA"]."',
        '".$data["HARGA"]."',
        '".$data["STOK"]."',
        '".$data["WB"]."'
        );";

        include_once("dbkoneksi02.php");
        $hsl = mysqli_query($cnn, $sqlINSERT);
        return $hsl;
    }

    function perbaruidata($data){
        $sql = "UPDATE barang SET
            id_barang = '".$data["ID2"]."',
            nama_barang = '".$data["NAMA"]."',
            harga_barang = '".$data["HARGA"]."',
            stok_barang = '".$data["STOK"]."',
            warna_barang = '".$data["WB"]."'
            WHERE id_barang = '".$data["ID1"]."';";

        include_once("dbkoneksi02.php");

        $hsl = mysqli_query($cnn, $sql);
        return $hsl;
    }

    function tampildata(){
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $sql = "SELECT id_barang, nama_barang,harga_barang, stok_barang, warna_barang FROM barang;";
        $hsl = mysqli_query($cnn,$sql);
        $hsl1 = "";
        $no = 1;
        while($h = mysqli_fetch_array($hsl)){
            if($h["warna_barang"]=="H"){
                $wb = "Hitam";
            }else if($h["warna_barang"]=="P"){
                $wb = "Putih";
            }else if($h["warna_barang"]=="A"){
                $wb = "Abu-Abu";
            }else{
                $wb = "";
            }
            $hsl1 .= '<tr>
            <td class="text-center">'.$no.'</td>
            <td class="text-center">'.$h["id_barang"].'</td>
            <td class="text-center">'.$h["nama_barang"].'</td>
            <td class="text-center">'.$h["harga_barang"].'</td>
            <td class="text-center">'.$h["stok_barang"].'</td>
            <td class="text-center">'.$wb.'</td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="barang_perbaruidata.php?id='.$h["id_barang"].'">
                Edit
                </a>
            </td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="barang_hapusdata.php?id='.$h["id_barang"].'" onClick=\'return confirm("Data akan dihapus selamanya, Lanjutkan?");\'>
                Hapus
                </a>
            </td>
        </tr>';
        $no++;
        }
        return $hsl1;
    }