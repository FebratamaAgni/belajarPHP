<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Belajar php</title>
</head>

<body>
   <!-- Menggunakan for -->
   <table border="1" cellpadding="10" cellspacing="0">
      <?php for ($i = 1; $i <= 3; $i++) : ?>
         <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
               <td>
                  <?php echo "$i,$j"; ?>
               </td>
            <?php endfor; ?>
         </tr>
      <?php endfor; ?>
      <!--Merubah kurung kurawal '{' menjadi ':' dan merubah '}' menjadi 'endfor;'
      Jika menggunakan if maka tutup kurung nya yaitu endif; jika foreach tutup nya menjadi endforeach; jika while tutupnya menjadi endwhile;  -->
   </table>
   <br>
   <!-- Menggunakan while -->
   <table border="1" cellpadding="10" cellspacing="0">
      <?php
      $i = 0;
      while ($i < 3) :
         $i++;
      ?>
         <tr>
            <?php
            $j = 0;
            while ($j < 5) :
               $j++;
            ?>
               <td> <?php echo "$i,$j"; ?> </td>
            <?php endwhile; ?>
         </tr>
      <?php endwhile; ?>
   </table>
</body>

</html>