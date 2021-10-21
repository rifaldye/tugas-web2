<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td>nama</td>
          <td>:</td>
          <td> <input type="text" name="nama" value=""> </td>
        </tr>
        <tr>
          <td>nim</td>
          <td>:</td>
          <td> <input type="number" name="nim" value=""> </td>
        </tr>
        <tr>
          <td>alamat</td>
          <td>:</td>
          <td> <input type="text" name="alamat" value=""> </td>
        </tr>
      </table>
      <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $db_host = 'localhost'; //server
      $db_user = 'root'; //username
      $db_pass = ''; //password
      $db_name = 'web2'; //nama database

      $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //sintaks untuk connect ke database mysql
      $nama= $_POST['nama'];
      $nim= $_POST['nim'];
      $alamat= $_POST['alamat'];
      if (!$conn) {
          die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
      }

      $sql = "INSERT INTO " . "pertemuan7 (nama, nim, alamat)
              VALUES ('$nama',$nim,'$alamat')";

      echo "$sql";

      $query = mysqli_query($conn,$sql);

      if (!$query) {
          die ('Gagal memasukan ke database : '. mysqli_error($conn));
      }
      header("location:index.php");
    }
     ?>

  </body>
</html>
