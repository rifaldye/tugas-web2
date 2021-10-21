<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4> <u>Post-increment</u> </h4>
    <?php
      $a = 5;
      echo '$a = '.$a.'<br>';
      echo '$a = akan bernilai 5='.$a++.'(operasi $a++)<br>';
      echo '$a = akan bernilai 6='.$a.'<br>';

      echo '<h4><u>Pre-increment</u></h4>';
      $a = 5;
      echo '$a = '.$a.'<br>';
      echo '$a = akan bernilai 6='.++$a.'(operasi $a++)<br>';
      echo '$a = akan bernilai 6='.$a.'(operasi $a++)<br>';

      echo '<h4><u>Post-Decrement</u></h4>';
      $a = 5;
      echo '$a = '.$a.'<br>';
      echo '$a = akan bernilai 5='.$a--.'(operasi $a++)<br>';
      echo '$a = akan bernilai 4='.$a.'<br>';

      echo '<h4><u>Pre-decrement</u></h4>';
      $a = 5;
      echo '$a = '.$a.'<br>';
      echo '$a = akan bernilai 4='.--$a.'(operasi $a++)<br>';
      echo '$a = akan bernilai 4='.$a.'(operasi $a++)<br>';

     ?>

  </body>
</html>
