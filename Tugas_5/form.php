<?php 
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="960_12_col.css">
    <link rel="stylesheet" type="text/css" href="Index.css">
</head>
<style>
table{
    width :100%;
}
th, td{
    height:50px;
    padding: 15px;
    text-align: left;
}
tr:nth-child(even){background-color: #f2f2f2}
th{ background-color: #4CAF50;
  color: white; }
</style>
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

<div>
    <table>
        <thead>
            <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>hobi</th>
            <th>Makanan</th>
            <th>Status</th>
            <th>Gol.Darah</th>
            <th>Cita-Cita</th>
            <th>Motto</th>
            <th>Email</th>
            <th>No.HP</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                  $query = "SELECT * FROM mhs";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['npm'];  ?></td>
                    <td><?php echo $data['ttl'];  ?></td>
                    <td><?php echo $data['alamat'];  ?></td>
                    <td><?php echo $data['jl'];  ?></td>
                    <td><?php echo $data['hobi'];  ?></td>
                    <td><?php echo $data['makan'];  ?></td>
                    <td><?php echo $data['status'];  ?></td>
                    <td><?php echo $data['darah'];  ?></td>
                    <td><?php echo $data['cita'];  ?></td>
                    <td><?php echo $data['motto'];  ?></td>
                    <td><?php echo $data['email'];  ?></td>
                    <td><?php echo $data['hp'];  ?></td>
                  </tr>
                 <?php endwhile ?>
        </table>
</div>
    
</body>
</html>