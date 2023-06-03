<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<div class="container mt-3">
</head>
	<div class="kotak_data">
		<h3 class="tulisan_data"style="font-family:Audiowide; font-weight: bold">Tambah Mahasiswa </h3>
 		<br>
		<form method="POST"  action="tambah_mahasiswa.php">
		<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			<label><b>NIM</b></label>
			<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
 
			<label><b>Nama Mahasiswa</b></label>
			<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa">

			<label><b>Username</b></label>
			<input type="text" name="username" class="form-control" placeholder="Masukkan Username Mahasiswa">

			<label><b>Password</b></label>
			<input type="text" name="password" class="form-control" placeholder="Masukkan Password Mahasiswa">

			<label><b>Kelas</b></label>
			<input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas">

			<label><b>Alamat</b></label>
			<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">

			<label><b>NO Telepon</b></label>
			<input type="text" name="no_tlp" class="form-control" placeholder="Masukan Nomor Telepon">

			<div class="form-group">
                <label><b>Pilih Role</b></label>
                <select  name="mahasiswa" class="form-control">
                  <option value="mahasiswa">Mahasiswa</option>
                </select>
                </div>

			<input type="submit" class="btn btn-success" value="Tambah" name="submit">

		<a class="btn btn-info" href="mahasiswa.php">Kembali</a>

		</form>
		
	</div>
</div>
 </div>
</div>
<?php
 
	if(isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$kelas= $_POST['kelas'];
		$alamat = $_POST['alamat'];
		$no_tlp = $_POST['no_tlp'];
		$mahasiswa = $_POST['mahasiswa'];
		

		$result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,username,password,kelas,alamat,no_tlp,mahasiswa) VALUES('$nim','$nama','$username','$password','$kelas','$alamat','$no_tlp','$mahasiswa')");
		if ($result) {
			echo "<script>alert('Berhasil Menambah Data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=mahasiswa.php'>";
		}
		if (strlen($nim)>10) {
			echo "<script>alert('MASUKKAN 10 ANGKA UNTUK NIM!')</script>";
			echo "<meta http-equiv='refresh' content='0;url=tambah_mahasiswa.php'>";	
		}
	}
	?>

	</body>
</html>