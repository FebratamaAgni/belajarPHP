<?php
// elemen pada array boleh berbeda, int string dan boolean
// cara membuat array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
echo $hari[4];
echo "<br>";
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// belajar pengulangan array
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Belajar Array</title>
   <style>
      .for {
         width: 50px;
         height: 50px;
         line-height: 50px;
         background-color: cornflowerblue;
         text-align: center;
         float: left;
         margin: 5px;
      }

      .clear {
         clear: both;
      }
   </style>
</head>

<body>
   <br>
   <!-- Jika menggunakan for -->
   <?php for ($i = 0; $i < count($angka); $i++) : ?>
      <div class="for"><?php echo $angka[$i]; ?></div>
   <?php endfor; ?>
   <div class="clear"></div>

   <!-- Jika mengunakan foreach -->
   <?php //artinya array dari variabel $angka, diambil dan ditampilkan oleh variabel $tampil
   foreach ($angka as $tampil) : ?>
      <div class="for"><?php echo $tampil; ?></div>
   <?php endforeach; ?>
   <br> <br> <br>

   <!-- latihan -->
   <div class="latihan">
      <!-- Menggunakan array numerik -->
      <?php
      $mahasiswa = [
         ["Vava", "06947", "Teknik Informatika"],
         ["Hasan", "06957", "Teknik Informatika"],
         ["Rendy", "06948", "Teknik Informatika"]
      ];
      ?>
      <?php foreach ($mahasiswa as $data) : ?>
         <ul>
            <!-- rumus menampilkan array didalam array -->
            <?php foreach ($data as $da) : ?>
               <li><?php echo $da; ?></li>
            <?php endforeach; ?>
         </ul>
      <?php endforeach; ?>
   </div>
   <div class="latihan2">
      <!-- Menggunakan array sebutan -->
      <?php
      $siswa = [
         ["nama" => "Febratama", "npm" => "06947", "jurusan" => "Teknik Informatika"],
         ["nama" => "Agni", "npm" => "06947", "jurusan" => "Teknik Informatika"],
         ["nama" => "Ghandy", "npm" => "06947", "jurusan" => "Teknik Informatika"],
      ];
      ?>
      <?php foreach ($siswa as $sis) : ?>
         <ul>
            <!-- rumus menampilkan array didalam array -->
            <?php foreach ($sis as $wa) : ?>
               <li><?php echo $wa; ?></li>
            <?php endforeach; ?>
         </ul>
      <?php endforeach; ?>

   </div>
</body>

</html>