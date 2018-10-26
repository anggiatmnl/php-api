<?php
  $koneksi = mysqli_connect("localhost","root","","php-api");
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $fullname = $_POST['fullname'];
  $query = "INSERT INTO users SET id='$id', username='$username', password='$password', level='$level', fullname='$fullname'";
  mysqli_query($koneksi, $query);
  header("location:index.php");
?>