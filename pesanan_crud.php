<?php
    include_once("konfigurasi.php");

    function tambahdata($data){
        $sqlINSERT = "INSERT INTO pesanan(id_pesanan, id_barang, id_pembeli, tanggal_pemesanan, estimasi_diterima)
        VALUES ('".$data["ID"]."',
        '".$data["IBR"]."',
        '".$data["IPB"]."',
        '".$data["TALAN"]."',
        '".$data["ESDI"]."'
        );";

        include_once("dbkoneksi02.php");
        $hsl = mysqli_query($cnn, $sqlINSERT);
        return $hsl;
    }

    function perbaruidata($data){
        $sql = "UPDATE pesanan SET
            id_pesanan = '".$data["ID2"]."',
            id_barang = '".$data["IBR"]."',
            id_pembeli = '".$data["IPB"]."',
            tanggal_pemesanan = '".$data["TALAN"]."',
            estimasi_diterima = '".$data["ESDI"]."'
            WHERE id_pesanan = '".$data["ID1"]."';";

        include_once("dbkoneksi02.php");

        $hsl = mysqli_query($cnn, $sql);
        return $hsl;
    }

    function tampildata(){
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $sql = "SELECT id_pesanan, id_barang,id_pembeli, tanggal_pemesanan, estimasi_diterima FROM pesanan;";
        $hsl = mysqli_query($cnn, $sql);
        $hsl1 = "";
        $no = 1;
        while($h = mysqli_fetch_array($hsl)){
            $hsl1 .= '<tr>
            <td class="text-center">'.$no.'</td>
            <td class="text-center">'.$h["id_pesanan"].'</td>
            <td class="text-center">'.$h["id_barang"].'</td>
            <td class="text-center">'.$h["id_pembeli"].'</td>
            <td class="text-center">'.$h["tanggal_pemesanan"].'</td>
            <td class="text-center">'.$h["estimasi_diterima"].'</td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="pesanan_perbaruidata.php?id='.$h["id_pesanan"].'">
                Edit
                </a>
            </td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="pesanan_hapusdata.php?id='.$h["id_pesanan"].'" onClick=\'return confirm("Data akan dihapus selamanya, Lanjutkan?");\'>
                Hapus
                </a>
            </td>
        </tr>';
        $no++;
        }
        return $hsl1;
    }