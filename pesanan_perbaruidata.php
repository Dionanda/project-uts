<?php
    if(isset($_POST["txSIMPAN"])){
        $data["ID1"] = $_POST["txIDLAMA"];
        $data["ID2"] = $_POST["txID"];
        $data["IBR"] = $_POST["txIBR"];
        $data["IPB"] = $_POST["txIPB"];
        $data["TALAN"] = $_POST["txTALAN"];
        $data["ESDI"] = $_POST["txESDI"];

        include_once("pesanan_crud.php");
        perbaruidata($data);
        header("location: pesanan_tampildata.php");
    }

    if(isset($_GET["id"])){
        include_once("dbkoneksi02.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM pesanan INNER JOIN barang ON pesanan.id_barang=barang.id_barang INNER JOIN pembeli ON pesanan.id_pembeli=pembeli.id_pembeli AND id_pesanan='".$id."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA PESANAN</title>

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CSS -->
    <style type="text/css">
        body{
            font-family: 'Cascadia Code';
            background-color: white;
        }

        nav{
            background-color: black;
        }

        .card-header{
            background-color: white;
        }

        .pbl{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
    </style>

</head>
<body>
    
    <nav class="navbar navbar-dark py-3">
        <div class="justify-content-left">
            <a class="navbar-brand px-3 fw-bold fs-1" href="index.php">GADGET MURAH MERIAH</a>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="pbl">
            <a href="pesanan_tampildata.php" class="btn btn-outline-dark px-4 py-3 rounded-pill fw-bold">◀</a>
        </div>
        <div class="card p-1">
            <div class="card-header border-0">
                <h3 class="fw-bold">EDIT DATA PESANAN</h3>   
            </div>
            <div class="card-body pt-0">
                <form action="pesanan_perbaruidata.php" method="POST">
                <input type="hidden" name="txIDLAMA" value="<?=$h['id_pesanan'];?>">
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">ID PESANAN</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Inputkan ID Pesanan" name="txID" value="<?=$h['id_pesanan'];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">ID BARANG</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIBR">
                                <?php
                                    include_once("pesanan_panggilbarang.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">ID PEMBELI</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txIPB">
                                <?php
                                    include_once("pesanan_panggilpembeli.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">TANGGAL PEMESANAN</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="txTALAN" value="<?=$h["tanggal_pemesanan"];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">ESTIMASI DITERIMA</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="txESDI" value="<?=$h["estimasi_diterima"];?>">
                        </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-outline-dark p-3 fw-bold" type="submit" name="txSIMPAN">SIMPAN DATA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>