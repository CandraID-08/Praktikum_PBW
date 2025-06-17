<?php include 'nav.php'; ?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Logout</title>
   
</head>
<body>
    <div class="container mt-4">
   <h2>Logout</h2>
   <form method="post" action="proses_logout.php">
           <p>Apakah Anda yakin ingin logout?</p>
       <button type="submit" class="btn btn-danger">Logout</button>
       <a href="dashboard.php" class="btn btn-secondary">Batal</a>
   </form>
   </div>
</body>
</html>
       <!-- <div class="mb-3">
           <label>Nama pengguna :</label>
           <input type="text" name="username" class="form-control" required>
       </div>
       <div class="mb-3">
           <label>Kata sandi :</label>
           <input type="password" name="password" class="form-control" required>
       </div> -->