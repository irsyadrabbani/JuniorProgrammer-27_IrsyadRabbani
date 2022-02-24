<!DOCTYPE html>
<html>
<head>
        <title>Soal 5</title>
    </head>
<body>

<?php
    $uang = 1895250;
    $dataa = $uang % 100000;
    $a = ($uang - $dataa) / 100000;

    $datab = $dataa % 50000;
    $b = ($dataa - $datab) / 50000;

    $datac = $datab % 20000;
    $c = ($datab - $datac) / 20000;

    $datad = $datac % 5000;
    $d = ($datac - $datad) / 5000;

    $datae = $datad % 1000;
    $e = ($datad- $datae) / 1000;

    $dataf = $datae % 50;
    $f = ($datae - $dataf) / 50;
    
	echo "Jumlah Tabungan Budi : Rp 1.895.250<br>";
    echo "Jumlah Pecahan Rp.100.000 : ".$a."<br>";
    echo "Jumlah Pecahan Rp.50.000 : ".$b."<br>";
    echo "Jumlah Pecahan Rp.20.000 : ".$c."<br>";
    echo "Jumlah Pecahan Rp.5.000 : ".$d."<br>";
    echo "Jumlah Pecahan Rp.1000 : ".$e."<br>";
    echo "Jumlah  Pecahan Rp.50 : ".$f."<br>";

?> 

</body>
</html>
