<?php
  $koneksi = mysqli_connect("localhost","root","","php-api");
  $id = $_GET['id'];
  $qry = "DELETE FROM users WHERE id='$id'";
  mysqli_query($koneksi, $qry);
  header("location:index.php");
 ?>