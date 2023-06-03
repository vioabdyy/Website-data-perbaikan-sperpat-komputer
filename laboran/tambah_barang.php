<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
	<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<div class="container mt-3">
</head>
<body>
	<div>
		<h3 class="tulisan_data"style="font-family:Audiowide; font-weight: bold">Tambah Barang </h3>
 		<br>
		<form method="POST"  action="tambah_barang.php">
 			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			<label><b>Nama Barang</b></label>
			<input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">

			<label><b>No Barang</b></label>
			<input type="text" name="no_barang" class="form-control" placeholder="Masukkan Nomor Barang">

			<div class="form-group">
                <label><b>Status</b></label>
                <select  name="status" class="form-control">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Kosong">Kosong</option>
                </select>
                </div>

			<input type="submit" class="btn btn-success" value="Tambah" name="submit">

		<a class="btn btn-info" href="barang.php">Kembali</a>

		</form>
		
	</div>
</div>
 </div>
</div>
<?php
 
	if(isset($_POST['submit'])) {
		$nama_barang = $_POST['nama_barang'];
		$no_barang = $_POST['no_barang'];
		$status = $_POST['status'];
		
		$result = mysqli_query($koneksi, "INSERT INTO barang(nama_barang,no_barang,status) VALUES('$nama_barang','$no_barang','$status')");
		
		echo "<script>alert('Berhasil Menambah Data')</script>";
		echo "<meta http-equiv='refresh' content='0;url=barang.php'>";
	}
	?>

	</body>
</html>