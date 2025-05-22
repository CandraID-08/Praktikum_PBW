<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hari = "Senin";
switch ($hari) {
   case "Senin":
       echo "Hari pertama kerja!<br>";
       break;
   case "jum'at":
       echo "Solat jumat!<br>";
       break;
   case "Minggu":
       echo "Libur akhir pekan!<br>";
       break;
   default:
       echo "Hari biasa.<br>";}
// --------------------------------------------
    for ($i = 1; $i <= 5; $i++) {
   echo "Angka ke-”.$i.”<br>";
}
$buah = ["Apel", "Jeruk", "Mangga"];

// --------------------------------------------
for ($i = 0; $i < count($buah); $i++) {
   echo $buah[$i] . "<br>";
}
// --------------------------------------------
$nilai = 1;


while ($nilai <= 5) {
   echo "Nilai: ". $nilai ."<br>";
   $nilai++;
}
// --------------------------------------------
$mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}
// --------------------------------------------
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";


echo $status;
// --------------------------------------------
echo '<a href="tugas/t1.php">Beranda</a> | <a href="tugas/t2.php">Tentang</a> | <a href="tugas/t3.php">Kontak</a> | <a href="tugas/t4.php">noempat</a>';
    ?>

</body>
</html>