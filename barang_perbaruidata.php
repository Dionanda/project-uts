<?php
    if(isset($_POST["txSIMPAN"])){
        $data["ID1"] = $_POST["txIDLAMA"];
        $data["ID2"] = $_POST["txID"];
        $data["NAMA"] = $_POST["txNAMA"];
        $data["HARGA"] = $_POST["txHARGA"];
        $data["STOK"] = $_POST["txSTOK"];
        $data["WB"] = $_POST["txWB"];

        include_once("barang_crud.php");
        perbaruidata($data);
        header("location: barang_tampildata.php");
    }

    if(isset($_GET["id"])){
        include_once("dbkoneksi02.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM barang WHERE id_barang='".$id."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
          

        
        if($h["warna_barang"]=="H"){
            $selectH = "selected";
            $selectP = "";
            $selectA = "";
        }else if($h["warna_barang"]=="P"){
            $selectH = "";
            $selectP = "selected";
            $selectA = "";
        }else if($h["warna_barang"]=="A"){
            $selectH = "";
            $selectP = "";
            $selectA = "selected";
        }else{
            $selectL = "";
            $selectP = "";
            $selectA = "";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA BARANG</title>

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
            <a href="barang_tampildata.php" class="btn btn-outline-dark px-4 py-3 rounded-pill fw-bold">◀</a>
        </div>
        <div class="card p-1">
            <div class="card-header border-0">
                <h3 class="fw-bold">EDIT DATA BARANG</h3>   
            </div>
            <div class="card-body pt-0">
                <form action="barang_perbaruidata.php" method="POST">
                <input type="hidden" name="txIDLAMA" value="<?=$h['id_barang'];?>">
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">ID BARANG</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Inputkan ID Barang" name="txID" value="<?=$h['id_barang'];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">NAMA BARANG</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Inputkan Nama" name="txNAMA" value="<?=$h["nama_barang"];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">HARGA BARANG</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Inputkan Harga" name="txHARGA" value="<?=$h["harga_barang"];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">STOK BARANG</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Inputkan Stok" name="txSTOK" value="<?=$h["stok_barang"];?>">
                        </div>
                    </div>
                    <div class="mb-2 fw-bold row">
                        <label class="col-md-2 col-form-label">WARNA BARANG</label>
                        <div class="col-md-10">
                            <select class="form-select" name="txWB">
                                <option selected value="">-</option>
                                <option value="H"<?=$selectH;?>>Hitam</option>
                                <option value="P"<?=$selectP;?>>Putih</option>
                                <option value="A"<?=$selectA;?>>Abu-Abu</option>
                            </select>
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