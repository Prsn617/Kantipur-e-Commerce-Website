<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe


  $conn = mysqli_connect("localhost", "root", "", "kantipur");
  $sql = "SELECT * FROM product WHERE prdPos=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($conn);

  header('Content-Type:image/jpg');
  $file =  $row['prdImg'];
  readfile($file);
?>