<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans -serif; border: 1px solid black;width: 500px; padding: 15px; margin: auto; margin-top: 15px;">
    
<?php
    $var_npm = $_POST['npm'];
    $var_nama = $_POST['nama'];
    $var_prodi = $_POST['prodi'];
    $var_semester = $_POST['semester'];
    $var_ukt = $_POST['ukt'];

    if (!empty($_POST['npm'])){
        echo "NPM : ". htmlspecialchars($_POST['npm'])."<br>";
    }else{
        echo "Npm tidak boleh kosong!";

    }if (!empty($_POST['nama'])){
        echo "NAMA : ". htmlspecialchars($_POST['nama'])."<br>";
    }else{
        echo "Nama tidak boleh kosong!";
    }
    if (!empty($_POST['prodi'])){
        echo "PRODI : ". htmlspecialchars($_POST['prodi'])."<br>";
    }else{
        echo "Prodi tidak boleh kosong!";
    }
    if (!empty($_POST['semester'])){
        echo "SEMESTER : ". htmlspecialchars($_POST['semester'])."<br>";
    }else{
        echo "Tolong isi Semester anda!";
    }

    $ukt =(int) $_POST['ukt'];
    $semester =(int) $_POST['semester'];
    if ($ukt >= 5000000 && $semester < 8){
        echo "BIAYA UKT : Rp.$ukt,- <br> DISKON : 10% <br> YANG HARUS DI BAYAR : Rp.". ($ukt - ($ukt * 0.1)) .",-";
    }elseif ($ukt >= 5000000 && $semester > 8){
        echo "BIAYA UKT : Rp.$ukt,- <br> DISKON : 15% <br> YANG HARUS DI BAYAR : Rp.". ($ukt - ($ukt * 0.15)) . ",-";
    }elseif ($ukt < 5000000 ){
        echo "BIAYA UKT : Rp." . $ukt .",-";
    }else{
        echo "BIAYA UKT tidak valid";
    }
    ?>
</body>
</html>


