<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans -serif; border: 1px solid black;width: 600px; padding: 15px; margin: auto; margin-top: 15px;">
<?php
// $namabarang = "keyboard";
// // $hargasatuan = [100000, 20000000000000, 150000 ];
// $array = array(
//     "keyboard" => 150000,
//     "mouse" => 100000,
//     "monitor" => 2000000
// )
$hargasatuan = 150000;
$totalharga = $hargasatuan * 2;
$pajak = $totalharga * 0.10;
$totalbayar = $totalharga + $pajak;


echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2><hr>";
echo "Nama Barang: " . $namabarang . "<br> 
harga satuan: " . $hargasatuan . "<br> 
jumlah beli: 2 <br> 
Total Harga(Sebelum Pajak): " . $totalharga . "<br>
Pajak(10%): " . $pajak . "<br>
<b>Total Bayar: " . $totalbayar . "</b>";  
?>
</body>
</html>
