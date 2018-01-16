<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item"><a href="?halaman=guest">Kontak Kami</a></li>
        <li class="breadcrumb-item active">Daftar Tamu</li>
</ol>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Pesan</td>
	</tr>

	<?php
	$con = mysqli_connect("localhost","root","","project1");
	$sql = "SELECT * FROM bukutamu";
	$query = mysqli_query($con,$sql);
	$nomor = 1;
	while ($data = mysqli_fetch_array($query)){

	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['pesan']; ?></td>
	</tr>
	<?php
	}

	?>
</table>