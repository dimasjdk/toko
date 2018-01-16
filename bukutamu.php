<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kontak Kami</li>
</ol>

<a class="btn btn-success" href="?halaman=daftartamu">Lihat Data</a>
<br>

<form method="POST" action="">
<br>
<label>Nama Anda</label>
<br>
<input type="text" name="a" placeholder="Nama Anda" class="form-control">
<br>

<label>Email Anda</label>
<br>
<input type="text" name="b" placeholder="Email Anda" class="form-control">
<br>

<label>Pesan Anda</label>
<br>
<textarea name="c" placeholder="Pesan Anda" class="form-control"></textarea>
<br>

<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
<input type="reset" name="reset" class="btn btn-danger" value="Reset">
</form>

<?php
if (isset($_POST['simpan'])) {
	# code...

$con = mysqli_connect("localhost","root","","project1");
$sql = "INSERT INTO bukutamu SET
		
		nama = '".$_POST['a']."',
		email = '".$_POST['b']."',
		pesan = '".$_POST['c']."'		
		";
$query = mysqli_query($con,$sql);

if ($kondisi) {
	?>
	<script>
		alert("Gagal Tambah Data");document.location = '?halaman=guest';
	</script>
	<?php
} else {
	?>
	<script>
		alert("Berhasil Tambah Data");document.location = '?halaman=guest';
	</script>
	<?php
}
}
?>