<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Sparepart</title>
 <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<div class="container mt-3">
</head>

	<div class="kotak_data">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Tambah Sparepart </h3>
 		<br>
		<form method="POST"  action="tambah_stok.php">
 		<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			<label><b>Nama Sparepart</b></label>
			<input type="text" name="nama_stok" class="form-control" placeholder="Masukkan Nama Sparepart">

			<label><b>No Sparepart</b></label>
			<input type="text" name="no_stok" class="form-control" placeholder="Masukkan Nomor Sparepart">

			<div class="form-group">
                <label><b>Status</b></label>
                <select  name="statuss" class="form-control">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Kosong">Kosong</option>
                </select>
                </div>

			<input type="submit" class="btn btn-success" value="Tambah" name="submit">

		<a class="btn btn-info" href="stok.php">Kembali</a>

		</form>
		
	</div>
</div>
 </div>
</div>
<?php
 
	if(isset($_POST['submit'])) {
		$nama_stok = $_POST['nama_stok'];
		$no_stok = $_POST['no_stok'];
		$statuss = $_POST['statuss'];
		
		$result = mysqli_query($koneksi, "INSERT INTO status(nama_stok,no_stok,statuss) VALUES('$nama_stok','$no_stok','$statuss')");
		
		echo "<script>alert('Berhasil Menambah Data')</script>";
		echo "<meta http-equiv='refresh' content='0;url=stok.php'>";
	}
	?>

	</body>
</html>