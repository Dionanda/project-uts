<?php
    include_once("konfigurasi.php");

    function tambahdata($data){
        $sqlINSERT = "INSERT INTO pembeli(id_pembeli, nama_pembeli, alamat_pembeli, tanggal_lahir, no_handphone, jenis_kelamin)
        VALUES ('".$data["ID"]."',
        '".$data["NAMA"]."',
        '".$data["ALAMAT"]."',
        '".$data["TALAG"]."',
        '".$data["NOHP"]."',
        '".$data["JK"]."'
        );";

        include_once("dbkoneksi02.php");
        $hsl = mysqli_query($cnn, $sqlINSERT);
        return $hsl;
    }

    function perbaruidata($data){
        $sql = "UPDATE pembeli SET
            id_pembeli = '".$data["ID2"]."',
            nama_pembeli = '".$data["NAMA"]."',
            alamat_pembeli = '".$data["ALAMAT"]."',
            tanggal_lahir = '".$data["TALAG"]."',
            no_handphone = '".$data["NOHP"]."',
            jenis_kelamin = '".$data["JK"]."'
            WHERE id_pembeli = '".$data["ID1"]."';";

        include_once("dbkoneksi02.php");

        $hsl = mysqli_query($cnn, $sql);
        return $hsl;
    }
    
    function tampildata(){
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
        $sql = "SELECT id_pembeli, nama_pembeli, alamat_pembeli, tanggal_lahir, no_handphone, jenis_kelamin FROM pembeli;";
        $hsl = mysqli_query($cnn,$sql);
        $hsl1 = "";
        $no = 1;
        while($h = mysqli_fetch_array($hsl)){
            if($h["jenis_kelamin"]=="L"){
                $jk = "Laki-Laki";
            }else if($h["jenis_kelamin"]=="P"){
                $jk = "Perempuan";
            }else{
                $jk = "";
            }
            $hsl1 .= '<tr>
            <td class="text-center">'.$no.'</td>
            <td class="text-center">'.$h["id_pembeli"].'</td>
            <td class="text-center">'.$h["nama_pembeli"].'</td>
            <td class="text-center">'.$h["alamat_pembeli"].'</td>
            <td class="text-center">'.$h["tanggal_lahir"].'</td>
            <td class="text-center">'.$h["no_handphone"].'</td>
            <td class="text-center">'.$jk.'</td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="pembeli_perbaruidata.php?id='.$h["id_pembeli"].'">
                Edit
                </a>
            </td>
            <td class = "text-center">
                <a class="btn btn-outline-dark px-4 fw-bold" href="pembeli_hapusdata.php?id='.$h["id_pembeli"].'" onClick=\'return confirm("Data akan dihapus selamanya, Lanjutkan?");\'>
                Hapus
                </a>
            </td>
        </tr>';
        $no++;
        }
        return $hsl1;
    }