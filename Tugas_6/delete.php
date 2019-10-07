<?php
  include ('conn.php');
  $status = '';
  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {

          $npm = $_GET['npm'];
          $query = "DELETE FROM mhs WHERE npm = '$npm'";

          $result = mysqli_query(connection(), $query);
          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          header('Location: index.php?status='.$status);
      }
  }