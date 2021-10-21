<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $db_host = 'localhost'; //server
    $db_user = 'root'; //username
    $db_pass = ''; //password
    $db_name = 'web2'; //nama database
    $nim=$_GET['nim'];
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //sintaks untuk connect ke database mysql
    $sql = "SELECT * FROM pertemuan7 where nim=$nim";

    $query = mysqli_query($conn, $sql);
     ?>
    <form class="" action="" method="post">
    <?php while ($row = mysqli_fetch_array($query)) { ?>
      <table>
        <tr>
          <td>nama</td>
          <td>:</td>
          <td> <input type="text" name="nama" value="<?= $row['nama']  ?>"> </td>
        </tr>
        <tr>
          <td>alamat</td>
          <td>:</td>
          <td> <input type="text" name="alamat" value="<?= $row['alamat']  ?>"> </td>
        </tr>
      </table>
    <?php } ?>
      <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $nama= $_POST['nama'];
      $alamat= $_POST['alamat'];
      if (!$conn) {
          die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
      }

      $sql = "UPDATE " . "pertemuan7 SET nama='$nama',alamat='$alamat' WHERE nim=$nim";

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
