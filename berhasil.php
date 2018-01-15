 <?php
 include 'config.php';
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini <a href="login.php">login</a></div>';
    }else{
    ?>
Anda Sudah login<br>
silahkan Keluar <a href="logout.php">keluar</a>


<?php
    }

    ?>