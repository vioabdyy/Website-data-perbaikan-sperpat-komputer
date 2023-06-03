<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>
<?php 
	$nim= $_GET['nim'];
	$row = mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim='$nim'");
	while ($data = mysqli_fetch_array($row)) {
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="kotak_data">
	<div class="container mt-3">
		<h3 class="tulisan_data"style="font-family:Audiowide; font-weight: bold">Edit Mahasiswa</h3>
 		<br>
		<form method="POST"action="edit_mahasiswa.php?nim=<?php echo $nim; ?>">
			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			
			<input type="hidden" name="nim" class="form-control" value="<?php echo $data['nim']; ?>">
 
			<label><b>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">

			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">

			<label>Password</label>
			<input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>">

			<label>Kelas</label>
			<input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas']; ?>">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">

			<label>NO TELEPON</b></label>
			<input type="text" name="no_tlp" class="form-control" value="<?php echo $data['no_tlp']; ?>">

			<br>
			<input type="submit" class="btn btn-success" value="Update" name="update">

		<a class="btn btn-info" href="mahasiswa.php">Kembali</a>

		</form>
		</div>
	</div>
</div>
</divs>
<?php  
	}
?>
<?php
	if(isset($_POST['update']))
	{	
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$kelas= $_POST['kelas'];
		$alamat = $_POST['alamat'];
		$no_tlp = $_POST['no_tlp'];
			
		$result = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim',nama='$nama',username='$username',password='$password',kelas='$kelas',alamat='$alamat',no_tlp='$no_tlp'WHERE nim=$nim");
		
		echo "<script>alert('Berhasil Mengubah Data!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=mahasiswa.php'>";
	}
?>