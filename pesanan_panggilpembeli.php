<?php
    echo "<option selected value=$h[id_pembeli]>$h[id_pembeli] - $h[nama_pembeli]</option>";
    $sql = "SELECT * FROM pembeli";
    $hsl = mysqli_query($cnn, $sql);
    while($h = mysqli_fetch_array($hsl)){
        echo "<option value=$h[id_pembeli]>$h[id_pembeli] - $h[nama_pembeli]</option>";  
    }
