<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Edit Data</h3>

    <?php
      $koneksi = mysqli_connect("localhost","root","","php-api");
      $id = $_GET['id'];
      $qry = mysqli_query($koneksi,"SELECT * FROM users WHERE id='$id'");
      $data = mysqli_fetch_array($qry);
      function radio($value, $input) {
        $result = $value==$input?'checked':'';
        return $result;
      }
      ?>

      <form action="update.php" method="post">
        <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
          </tr>
          <tr>
            <td style="vertical-align: top">Level</td>
            <td>
              <input type="radio" name="level" value="admin" <?php echo radio("admin", $data['level']) ?>>Admin<br>
              <input type="radio" name="level" value="user" <?php echo radio("user", $data['level']) ?>>User<br>
              <input type="radio" name="level" value="guest" <?php echo radio("guest", $data['level']) ?>>guest
            </td>
          </tr>
          <tr>
            <td>Fullname</td>
            <td><input type="text" name="fullname" value="<?php echo $data['fullname']; ?>"></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="submit" value="Simpan">SIMPAN</button>
          </tr>
        </table>
      </form>
  </body>
</html>