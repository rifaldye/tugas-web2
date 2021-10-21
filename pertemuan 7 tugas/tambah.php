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
          <td>alamat</td>
          <td>:</td>
          <td> <textarea name="alamat" rows="3" cols="20"></textarea> </td>
        </tr>
        <tr>
          <td>jenis kelamin</td>
          <td>:</td>
          <td> <input type="radio" name="kelamin" value="L">Laki Laki <input type="radio" name="kelamin" value="P">Perempuan </td>
        </tr>
        <tr>
          <td>agama</td>
          <td>:</td>
          <td> <select  name="agama">
            <option value="Islam">islam</option>
            <option value="Katolik">katolik</option>
            <option value="protestan">protestan</option>
            <option value="budha">budha</option>
            <option value="hindu">hindu</option>
            <option value="konghucu">konghucu</option>
          </select> </td>
        </tr>
        <tr>
          <td>sekolah asal</td>
          <td>:</td>
          <td> <input type="text" name="sekolah" value=""> </td>
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
      $alamat= $_POST['alamat'];
      $kelamin= $_POST['kelamin'];
      $agama= $_POST['agama'];
      $sekolah= $_POST['sekolah'];
      if (!$conn) {
          die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
      }

      $sql = "INSERT INTO " . "pertemuan7tugas(nama,alamat,kelamin,agama,sekolah) VALUES ('$nama','$alamat','$kelamin','$agama','$sekolah')";

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
