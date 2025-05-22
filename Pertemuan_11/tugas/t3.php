<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$hewan = [
   "1" => "Gajah",
   "2" => "Semut",
   "3" => "Kucing",
];
foreach ($hewan as $nomorhewan => $nama) {
   echo "No hewan: ". $nomorhewan.", Nama Hewan : ". $nama."<br>";
}
    ?>
</body>
</html>