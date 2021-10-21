<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Membuat biodata</h2>
    <?php
    $nama = "Rifaldy Elninoru";
    $kelas = "TI 5A";
    $nim = 1907411009;
    $umur = 20;
     ?>

     <table>
       <tr>
         <td>nama</td>
         <td>:</td>
         <td><?=$nama?></td>
       </tr>
       <tr>
         <td>kelas</td>
         <td>:</td>
         <td><?=$kelas?></td>
       </tr>
       <tr>
         <td>nim</td>
         <td>:</td>
         <td><?=$nim?></td>
       </tr>
       <tr>
         <td>umur</td>
         <td>:</td>
         <td><?=$umur?></td>
       </tr>
     </table>

     <br><br>
     <h2>menghitung volume bola</h2>
     <?php
     echo "Rumus Volume Bola = 4/3 x phi x jari-jari x jari-jari x jari-jari <br>";
     echo "jari-jari = 15 cm <br>";
     $jari = 15;
     $volume = 4/3 *3.14 * $jari^3;
     echo "volume bola = ".$volume." cm";

      ?>

      <br><br>
      <h2>menghitung luas lingkaran</h2>
      <?php
      echo "Rumus Luas Lingkaran = π x r x r <br>";
      echo "jari-jari = 20 cm <br>";
      $jari = 20;
      $luas =3.14 * $jari^2;
      echo "luas lingkaran = ".$luas." cm";

       ?>

       <br><br>
       <h2>menghitung volume balok</h2>
       <?php
       echo "Rumus Luas Lingkaran = p x l x t <br>";
       echo "panjang = 5 cm <br>";
       $panjang = 5;
       echo "lebar = 3 cm <br>";
       $lebar = 3;
       echo "tinggi = 7 cm <br>";
       $tinggi = 7;
       $volume = $panjang *$lebar *$tinggi;
       echo "luas lingkaran = ".$volume." cm";

        ?>

  </body>
</html>
