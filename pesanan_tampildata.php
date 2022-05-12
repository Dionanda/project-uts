<?php
    include("pesanan_crud.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESANAN</title>

    <!-- Bootstrap CSS dan Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- CSS -->
    <style type="text/css">
        body{
            font-family: 'Cascadia Code';
            background-color: white;
        }

        nav{
            background-color: black;
        }

        .container{
            margin-top: 3.5rem;
        }

        .card-header{
            background-color: white;
        }
        
    </style>

</head>
<body>

    <nav class="navbar navbar-dark py-3">
        <div class="justify-content-left">
            <a class="navbar-brand px-3 fw-bold fs-1" href="index.php">GADGET MURAH MERIAH</a>
        </div>
        <div class="justify-content-right">
                <ul class="nav fw-bold px-5">
                    <li class="nav-item">
                       <a class="nav-link text-light" href="pembeli_tampildata.php">Pembeli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="pesanan_tampildata.php">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="barang_tampildata.php">Barang</a>
                    </li>
                </ul>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center py-0">
                    <div class="col">
                        <h3 class="my-3">DATA PESANAN</h3>
                    </div>
                </div>
            </div>
            <div class="card-body py-0">
                <table class="table table-hover table-light table-borderless align-middle py-0">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th class = "py-4">NO</th>
                            <th class = "py-4">ID PESANAN</th>
                            <th class = "py-4">ID BARANG</th>
                            <th class = "py-4">ID PEMBELI</th>
                            <th class = "py-4">TANGGAL PEMESANAN</th>
                            <th class = "py-4">ESTIMASI DITERIMA</th>
                            <th class= "py-2" colspan="3"><a href='pesanan_tambahdata.php'><input class="btn btn-outline-light py-2 my-2 px-4 fw-bold rounded-pill" type="button" value="TAMBAH DATA"></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=tampildata();?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>