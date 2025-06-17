<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
    $search_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
    $search_email = isset($_GET['email']) ? $_GET['email'] : '';

   // Query untuk menampilkan daftar buku dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_nama)) {
    $query .= " AND nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
   }
   if (!empty($search_email)) {
        $email = $conn->real_escape_string($search_email);
        $query .= " AND email = '$email'";
   }


   $result = $conn->query($query);
?>
