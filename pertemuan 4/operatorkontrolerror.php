<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Operator controll error</h1>
    <?php
      $a = 'pi';
      $res = @tan ($a) or die ("error ");
      echo "$res";
     ?>
  </body>
</html>
