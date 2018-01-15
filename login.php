<?php
include 'config.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" align="center"><img src="data/produk/sepatu/profil.jpg" width="215" height="210"><br><br>
      <strong>JDK.id</strong><br>
      <p>Menyediakan berbagai alat elektronik yang berkualitas</p></div>

      <div class="card-body">

<?php

        if($_POST['login']){
          $user   = $conn->real_escape_string($_POST['username']);
          $pass   = md5($conn->real_escape_string($_POST['password']));

          $sql = $conn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
          if($sql->num_rows > 0){
            $_SESSION['user'] = $user;
            echo "<script>alert('Anda berhasil Log In. Sebagai :  );</script>";
      echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
          }else{
            echo '<div class="alert alert-danger">Login gagal.</div>';
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
          }
        }
        ?>
        <form method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Belum Punya Akun</a>
         
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