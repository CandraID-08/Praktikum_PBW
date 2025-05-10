<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans -serif; border: 1px solid black;width: 600px; padding: 15px; margin: auto; margin-top: 15px;">
    <h1 style="text-align: center;">Form Input</h1>
    <p style="text-align: center;">Silahkan isi form dibawah ini</p>
    <hr>
    <br>
    <form action="t2,1.php" method="post" style="text-align: center;">
        
        <label for="npm">Npm:</label><br>
        <input type="number" id="npm" name="npm"><br><br>
        <label for="nama">Name:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="prodi">Prodi:</label><br>
        <input type="text" id="prodi" name="prodi"><br><br>
        <label for="semester">Semester:</label><br>
        <input type="number" id="semester" name="semester"><br><br>
        <label for="ukt">Biaya Ukt:</label><br>
        <input type="number" id="ukt" name="ukt"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>