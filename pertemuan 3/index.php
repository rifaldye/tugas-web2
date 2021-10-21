<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>variable dasar </h1>
    <br>
    <?php
    $color = "yellow";
    echo "Mobil saya " .$color. "<br>";
    echo "motor saya " .$color. "<br>";
    echo "sepeda saya " .$color. "<br>";
    ?>
    <br><br>
    <h1>boolean</h1>
    <br>
    <?php
    $a = TRUE;
    $b = false;
    $c = false;
    $d = true;

    echo "$a = $a <br>";
    echo "$a = $b <br>";
    echo "$a = $c <br>";
    echo "$c = $d <br>";
     ?>
     <br><br>
     <?php

      ?>
      <br><br>
      <h1>floating</h1>
      <br>
      <?php
      $x = 1.5e30;
      $y = 5.0;
      $z = $x*$y;

      echo "x = $x <br>";
      echo "y = $y <br>";
      echo "z = $z <br>";
       ?>
       <br><br>
       <h1>String</h1>
       <br>
       <?php
       $tulisan = 'Menggunakan PHP';
       echo 'Ini adalah suatu string <br>';
       echo 'Anda dapat menyisipkan newline,seperti ini' . '<br>';
       echo 'Arnold berkata: I\'ll be back <br>';
       echo 'Are you sure want delete c:\\*.*? <br>';
       echo 'am trying to include at this point:\rn a new line <br>';
       echo $tulisan. '<br>';
        ?>

  </body>
</html>
