<?php include "koneksi.php" ?>
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

    <div class="forms">
    <form method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      sudah punya akun?<a href="index.php">masuk</a><br>
      <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
    </form>
    <?php
    session_start();
    if(isset($_SESSION['email'])){
      header("location:user.php");
    }
    if(isset($_POST["submit"])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query = "SELECT * FROM user WHERE email='$email'";

      $result = mysqli_query($conn,$query);
      if(mysqli_num_rows($result) == 0)  {
        $query = "INSERT INTO user SET email='$email' , password='$password' , role=1";

        $result = mysqli_query($conn,$query);
        if($result){
          header('location:index.php');
        }else{
          echo"pendaftaran gagal";
        }
      }else{
        echo "email sudah ada silahkan cari email lain";
      }
    }
    ?>
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>