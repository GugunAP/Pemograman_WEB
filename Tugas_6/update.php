<?php
include("conn.php");
  $result = '';
  $status = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm = $_GET['npm'];
          $query = "SELECT * FROM mhs WHERE npm = '$npm'";
          //eksekusi query
          $result = mysqli_query(connection(), $query);
      }
  }
	if(isset($_POST['submit'])){
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
		   $sql = "UPDATE mhs SET  nama='$nama', npm='$npm', alamat='$alamat', ttl='$ttl', jl='$jl',  hobi='$hobi', makan='$makan', status='$status', agama='$agama', darah='$darah', cita='$cita', motto='$motto', email='$email', hp='$hp' WHERE npm='$npm'";
    $result = mysqli_query(connection(), $sql);
    if($result){
        if ($result) {
            $status = 'ok';
            header('Location: index.php?status='.$status);
            exit();
            
          }
          else{
            $status = 'err';
            header('Location: index.php?status='.$status);
            exit();
          }

      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="960_12_col.css">
    <link rel="stylesheet" type="text/css" href="Index.css">
</head>
<body>
<div class="container_12">
    <ul>
        <li><a class="grid_1" href="<?php echo "index.php"; ?>">HOME</a></li>
        <li><a class="grid_1" href="#about">TENTANG</a></li>
        <li><a class="grid_1" href="#galeri">GALERI</a></li>
        <li><a class= "grid_1"href="<?php echo "form.php"; ?>">TAMPIL_DATA</a></li>
    </ul>
    <br><br><br>
    </div>

    <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
    <div class="container_12">
        <br>
        <h2 id="about" class="center">Update</h2>
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
             : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
             : <input type="text" name="npm" value="<?php echo $data['npm']; ?>"><br>
             : <input type="text" name="ttl" value="<?php echo $data['ttl']; ?>"><br>
             : <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
             : <input type="text" name="jl" value="<?php echo $data['jl']; ?>"><br>
             : <input type="text" name="hobi" value="<?php echo $data['hobi']; ?>"><br>
             : <input type="text" name="makan" value="<?php echo $data['makan']; ?>"><br>
             : <input type="text" name="status" value="<?php echo $data['status']; ?>"><br>
             : <input type="text" name="agama" value="<?php echo $data['agama']; ?>"><br>
             : <input type="text" name="darah" value="<?php echo $data['darah']; ?>"><br>
             : <input type="text" name="cita" value="<?php echo $data['cita']; ?>"><br>
             : <input type="text" name="motto" value="<?php echo $data['motto']; ?>"><br>
             : <input type="text" name="email" value="<?php echo $data['email']; ?>"><br>
             : <input type="text" name="hp" value="<?php echo $data['hp']; ?>"><br> <br> <br>
        </div>
        </div>
        <?php endwhile; ?>
        <div class="container_12">
            <center><input type="submit" name="submit" value="submit"></input></center>
        </div>
        </form>
        <br><br><br>
    </div>
</body>
<script src="bootstrap.min.js"></script>
</html>