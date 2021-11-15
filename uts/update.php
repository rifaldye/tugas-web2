<?php include "koneksi.php" ;
session_start();
if($_SESSION['role'] != 0){
  header("location:index.php");
}

$id = $_GET['id'];

$query = "UPDATE user SET role=0   WHERE id=$id";
$result = mysqli_query($conn,$query);
if($result){
  header("location:admin.php");
}

?>