<html>
<head>

</head>
<body>
  <form method="POST">
    <input type="number" name="angka1"><br>
    <span><input type="radio" name="operasi" value="+">Tambah</span>
    <span><input type="radio" name="operasi" value="-">kurang</span>
    <span><input type="radio" name="operasi" value="/">bagi</span>
    <span><input type="radio" name="operasi" value="*">Kali</span><br>
    <input type="number" name="angka2"><br>
    <input type="submit" name="submit" value="hitung">
    
  </form>
  <div>
  <?php
    if(isset($_POST['submit'])){
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $operasi = $_POST['operasi'];
      $hasil = 0 ;
      if($operasi == "+"){
        $hasil = $angka1 + $angka2;
      }elseif($operasi == "-"){
        $hasil = $angka1 - $angka2;
      }else if($operasi == "/"){
        $hasil = $angka1 / $angka2;
      }else if($operasi == "*"){
        $hasil = $angka1 * $angka2;
      }
      

      echo 'hasil dari '. $angka1." " .$operasi. " " .$angka2;
      echo "= ".$hasil;

    }
  ?>

  </div>
</body>
</html>