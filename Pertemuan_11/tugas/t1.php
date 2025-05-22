<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $mobil = "3";
switch ($mobil) {
    case "2":
       echo "motor";
       break;
    case "3":
       echo "bajai";
       break;
    case "4":
       echo "mobil";
       break;
    case "6":
       echo "truk";
       break;
    default:
       echo "mobil butut.";
   }

echo " saya beroda " . $mobil;
    ?>
</body>
</html>