<?php
$db_host = 'localhost'; //server
$db_user = 'root'; //username
$db_pass = ''; //password
$db_name = 'test'; //nama database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //sintaks untuk connect ke database mysql

if (!$conn) {
    die ('Gagal terhubung dengan database MySQL : ' . mysqli_connect_error());
}

$sql = "INSERT INTO " . "pertemuan5 (nim, nama, tugas, uts, uas)
        VALUES (19076, 'andi', 90, 84, 86)";

$query = mysqli_query($conn,$sql);

if (!$query) {
    die ('Gagal memasukan ke database : '. mysqli_error());
}

 ?>
