<?php include "koneksi.php" ;
session_start();
if($_SESSION['role'] != 0){
  header("location:index.php");
}

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id=$id";
$result = mysqli_query($conn,$query);
header("location:admin.php");
?>