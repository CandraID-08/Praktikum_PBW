<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans -serif; border: 1px solid black;width: 500px; padding: 15px; margin: auto; margin-top: 15px;">

<?php
$var_nama = $_POST['nama'];
$var_nilai = $_POST['nilai'];

if (!empty($_POST['nama'])){
    echo "Nama : ". htmlspecialchars($_POST['nama'])."<br>";
}else{
    echo "Nama tidak boleh kosong!";
}

$nilai = $var_nilai;
if ($nilai <= 100 && $nilai >=85 ){
    echo "Nilai: $nilai  <br>  Predikat: A <br> status: Lulus ";
}elseif ($nilai <=84 && $nilai >= 75  ){
    echo "Nilai: $nilai <br> Predikat: B <br> status: Lulus ";
}elseif ($nilai <=74 && $nilai >= 65 ){
    echo "Nilai: $nilai <br> Predikat: C <br> status: Lulus ";
}elseif ($nilai <=64 && $nilai >= 50 ){
    echo "Nilai: $nilai <br> Predikat: D <br> status: Lulus ";
}elseif ($nilai <=49 && $nilai >= 0 ){
    echo "Nilai: $nilai <br> Predikat: E <br> status: Tidak Lulus ";
}else{
    echo "nilai tidak valid";
}




?>
</body>
</html>


