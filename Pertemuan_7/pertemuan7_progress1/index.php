<?php
   echo "Halo, selamat datang di dunia PHP!";
?>
<br><br>
<?php
   $nama = "Budi";
   $umur = 20;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
?>

<br>
<br>
<?php
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");


echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br>";
?><br><br><br>

<!-- ini adalah string -->
<?php
   $nama = "Andi";
   echo "Nama saya adalah ". $nama;
?>
<br>
<!--ini adalh integer-->
<?php
   $umur = 25;
   echo "Umur saya ". $umur. "tahun";
?>
<br>
<!-- ini adalah float -->
<?php
   $berat = 55.5;
   echo "Berat badan saya ". $berat ."kg";
?>
<br>
<!-- ini adlaah boolean-->
<?php
   $isLogin = true;
?>
<br>
<!-- ini adalah array-->
<?php
   $buah = ["apel", "jeruk", "mangga", "pisang"];
   echo "Buah pertama: " . $buah[0] . "<br>";
   // echo "buah yg saya miliki" . $buah[0, 1, 2, 3, 4];
?>

<!-- ini adlaah objek -->
<?php
   class Mahasiswa {
      public $nama;
      public function sapa() {
         return "Halo, saya $this->nama";
}
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();
?>
<br>
<!-- ini adlah null -->
<?php
   $data = null;
   var_dump($data);
?>
