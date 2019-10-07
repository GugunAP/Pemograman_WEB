<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="960_12_col.css">
    <link rel="stylesheet" type="text/css" href="Index.css">
</head>
<?php
include ('conn.php');
$status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $npm = $_POST['npm'];
      $ttl = $_POST['ttl'];
      $jl = $_POST['jl'];
      $alamat = $_POST['alamat'];
      $hobi = $_POST['hobi'];
      $makan = $_POST['makan'];
      $status = $_POST['status'];
      $agama = $_POST['agama'];
      $darah = $_POST['darah'];
      $cita = $_POST['cita'];
      $motto = $_POST['motto'];
      $email = $_POST['email'];
      $hp = $_POST['hp'];
      //query SQL
      $query = "INSERT INTO mhs ( nama, npm, ttl,  alamat, jl,  hobi, makan, status, agama, darah, cita, motto, email, hp) VALUES('$nama', '$npm', '$ttl', '$alamat', '$jl', '$hobi', '$makan', '$status', '$agama', '$darah', '$cita', '$motto', '$email', '$hp')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }
?>

<body>
    <div class="container_12">
    <ul>
        <li><a class="grid_1" href="<?php echo "index.php"; ?>">HOME</a></li>
        <li><a class="grid_1" href="#about">TENTANG</a></li>
        <li><a class="grid_1" href="#galeri">GALERI</a></li>
        <li><a class= "grid_1"href="<?php echo "form.php"; ?>">TAMPIL_DATA</a></li>
    </ul>
    </div>

    <div class="container_12">
        <div class="background">
        <br><br><br>
        <img src="IMG_20190329_114922.jpg" alt="">
        <h1 class="center">
        <input type="text" name="judul" placeholder="NAMA">
        </h1>
        <p class="center" >
        <input type="text" name="profesi" placeholder="PROFESI">
        </p>
        <br><br>
        </div>
    </div>
<form action="index.php" method="POST">
    <div class="container_12">
        <br>
        <h2 id="about" class="center">Tentang</h2>
        <hr>
        <div>
        <div class="grid_3">
             Nama  <br>
             NPM <br>
             TTL  <br>
             Alamat  <br>
            Jenis Kelamin <br>
            Hobi <br> 
            Makananan Kesukaan <br>
            Status <br>
            Agama  <br>
            Gol. Darah  <br>
            Cita - cita  <br>
            Motto  <br>
            Email  <br>
            No. HP  <br> <br> <br>
        </div>
        <div class="grid_4">
             : <input type="text" name="nama"><br>
             : <input type="text" name="npm"><br>
             : <input type="text" name="ttl"><br>
             : <input type="text" name="alamat"><br>
             : <input type="text" name="jl"><br>
             : <input type="text" name="hobi"><br>
             : <input type="text" name="makan"><br>
             : <input type="text" name="status"><br>
             : <input type="text" name="agama"><br>
             : <input type="text" name="darah"><br>
             : <input type="text" name="cita"><br>
             : <input type="text" name="motto"><br>
             : <input type="text" name="email"><br>
             : <input type="text" name="hp"><br> <br> <br>
        </div>
        </div>
        <div class="grid_5">
            <div class="bar1">HTML</div><br>
            <div class="bar2">JAVA</div><br>
            <div class="bar3">C++</div><br>
            <div class="bar4">CSS</div><br>
            <div class="bar5">PHP</div><br>
        </div>
        <div class="container_12">
            <center><button type="submit" value="submit">Simpan</button></center>
        </div>
        </form>
        <br><br><br>
    </div>
    </form>

    <div class="container_12">
        <div class="background">
        <br>
        <h2 class="center" id="galeri">Galeri</h2>
        <hr>
        <div>
            <div class="grid_2">
                <img src="IMG_20190329_123124.jpg" alt="">
            </div>
            <div class="grid_2">
                    <img src="IMG_20190728_134707.jpg" alt="">
            </div>
            <div class="grid_2">
                <img src="IMG_20190329_111158.jpg" alt="">
            </div>
            <div class="grid_2">
                <img src="IMG_20190329_114920.jpg" alt="">
            </div>
            <div class="grid_2">
                <img src="IMG_20190329_114922.jpg" alt="">
            </div>
            <div class="grid_2">
                <img src="IMG_20190329_123106.jpg" alt="">
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <div class="container_12">
    <footer>
            <p>&copy; Copyright 2019 | Made by Guntur Adhi Prasetya
            </p>
        </div>
</body>

</html>