<?php
include 'config.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>JDK.id</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Mendaftar Akun</div>
      <div class="card-body">
<?php

        if($_POST['register']){
          $nama   = $conn->real_escape_string($_POST['nama']);
          $email  = $conn->real_escape_string($_POST['email']);
          $username   = $conn->real_escape_string($_POST['username']);
          $pass   = $conn->real_escape_string($_POST['password']);
          $pass2  = $conn->real_escape_string($_POST['password2']);
          $tgl    = date("Y-m-d");
          if(strlen($pass) >= 5){
            if($pass == $pass2){
              $password = md5($pass);
              $insert = $conn->query("INSERT INTO user(tgl_daftar, nama, email, username, password) VALUES('$tgl', '$nama', '$email', '$username', '$password')");
              if($insert){
                echo '<div class="alert alert-success">Register berhasil, silahkan <a href="login.php">Login</a>.</div>';
              }else{
                echo '<div class="alert alert-danger">Gagal melakukan Register.</div>';
              }
            }else{
              echo '<div class="alert alert-danger">Konfirmasi password tidak sesuai.</div>';
            }
          }else{
            echo '<div class="alert alert-danger">Password minimal 5 karakter.</div>';
          }
        }
        ?>
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama</label>
                <input class="form-control" id="exampleInputName" type="text" name="nama" aria-describedby="nameHelp" placeholder="Nama Lengkap">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">E-mail</label>
                <input class="form-control" id="exampleInputEmail1" type="text" name="email" aria-describedby="nameHelp" placeholder="Alamat Email">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputUsername" type="text" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Ulangi Password password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name="password2" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
         
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>