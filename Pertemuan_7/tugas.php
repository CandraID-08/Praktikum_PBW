<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian</title>
</head>
<body style="font-family: sans-serif; border: 1px solid black; width: 600px; padding: 15px; margin: auto; margin-top: 15px;">

<?php
$barang = array("keyboard" => 150000);
$jumlahbeli = 2;
define("PAJAK", 0.1);

$hargasatuan = $barang["keyboard"];
$totalsebelumpajak = $hargasatuan * $jumlahbeli;
$pajak = $totalsebelumpajak * PAJAK;
$totalbayar = $totalsebelumpajak + $pajak;

echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2><hr>";
echo "Nama Barang: Keyboard<br>";
echo "Harga Satuan: Rp " . $hargasatuan . "<br>";
echo "Jumlah Beli: " . $jumlahbeli . "<br>";
echo "Total Harga (Sebelum Pajak): Rp " . $totalsebelumpajak . "<br>";
echo "Pajak (10%): Rp " . $pajak . "<br>";
echo "<b>Total Bayar: Rp " . $totalbayar . "</b>";
?>

</body>
</html>
