<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table{
        border: 1px solid black;
      }
      th{
        border: 1px solid black;
      }
      td{
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <?php
    $db_host = 'localhost'; //server
    $db_user = 'root'; //username
    $db_pass = ''; //password
    $db_name = 'web2'; //nama database
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //sintaks untuk connect ke database mysql

    if (!$conn) {
        die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM pertemuan7tugas';

    $query = mysqli_query($conn, $sql);
     ?>
    <a href="tambah.php">Tambah Data</a>
    <table>
      <tr>
        <th>nama</th>
        <th>alamat</th>
        <th>jenis kelamin</th>
        <th>agama</th>
        <th>sekolah asal</th>
        <th>aksi</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($query)) { ?>
        <tr>
          <td><?= $row['nama']  ?></td>
          <td><?= $row['alamat']  ?></td>
          <td><?= $row['kelamin']  ?></td>
          <td><?= $row['agama']  ?></td>
          <td><?= $row['sekolah']  ?></td>
          <td><a href="edit.php?id=<?= $row['id']  ?>">Edit</a>||<a href="hapus.php?id=<?= $row['id']  ?>">Hapus</a></td>
        </tr>

    <?php } ?>
    </table>

  </body>
</html>
