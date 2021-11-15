<?php include "koneksi.php" ;
session_start();
if($_SESSION['role'] != 0){
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      .forms{
        width: 500px;
        padding: 0 auto;margin: 0 auto;
        margin-top: 150px;
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>

    <center><h1>Welcome Admin</h1>
    <a class="btn btn-danger" href="logout.php">logout</a><br><br>
  </center>
  <form method="get">
    <div class="input-group">
      <div class="form-outline">
        <input type="search" placeholder="cari berdasarkan email" name="email"  id="form1" class="form-control" />
        
      </div>
      <input type="submit" value="cari" class="btn btn-primary">
    </div>
    </form>
    <div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $batas   = 2;
            $halaman = @$_GET['halaman'];
                if(empty($halaman)){
                    $posisi  = 0;
                    $halaman = 1;
                }
                else{
                    $posisi  = ($halaman-1) * $batas;
                }
                $no = $posisi+1;
                if(isset($_GET['email'])){
                  $email = $_GET['email'];
                  $sql="select * from user where role=1 and email LIKE '%$email%' limit $posisi,$batas";
                }else{
                  $sql="select * from user where role=1 limit $posisi,$batas";
                }
                $hasil=mysqli_query($conn,$sql);
                while ($data = mysqli_fetch_array($hasil)) {
          ?>
          <tr>
            <td><?=$no?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['password']?></td>
            <td><a href="update.php?id=<?=$data['id']?>">upgrade admin</a> || <a href="delete.php?id=<?=$data['id']?>">hapus</a></td>
          </tr>
          <?php $no++; } ?>
        </tbody>
    </table>
    
    <?php 
    if(isset($_GET['email'])){
      $query2     = mysqli_query($conn, "select * from user WHERE email LIKE '%$email%'");
    }else{
      $query2     = mysqli_query($conn, "select * from user");
    }

     $jmldata    = mysqli_num_rows($query2);
     $jmlhalaman = ceil($jmldata/$batas)
    ?>
        <ul class="pagination">
            <?php
            for($i=1;$i<=$jmlhalaman;$i++) {
                if ($i != $halaman) {
                  if(isset($_GET['email'])){
                    echo "<li class='page-item'><a class='page-link' href='admin.php?halaman=$i&email=$email'>$i</a></li>";

                  }else{
                    echo "<li class='page-item'><a class='page-link' href='admin.php?halaman=$i'>$i</a></li>";

                  }
                } else {
                    echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                }
            }
            ?>
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>