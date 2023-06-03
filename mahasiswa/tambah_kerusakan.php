<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kerusakan</title>
	 <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<div class="container mt-3">
</head>
<body>
	<div class="kotak_data">
		<h3 class="tulisan_tengah" style="font-family:Audiowide; font-weight: bold">Tambah Kerusakan </h3>
 		<br>
		<form method="POST"  action="tambah_kerusakan.php">
			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">

			<label><b>Barang</b></label>
			  <select name="id_barang" class="form-control">
			  	<option>Pilih Barang</option>
			  	<?php  
			  		$data = mysqli_query($koneksi,"SELECT * FROM barang");
			  		while ($panggil = mysqli_fetch_array($data)) {
			  	?>
			  	<option value="<?php echo $panggil['id_barang'] ?>"><?php echo $panggil['nama_barang']; ?>
			  	</option>
			  <?php } ?>
			  </select>
 
			<label><b>Keterangan Kerusakan</b></label>
			<input type="text" name="ket_kerusakan" class="form-control" placeholder="Masukkan Keterangan Kerusakan">

			<label><b>Tanggal Rusak</b></label>
			<input type="date" name="tgl_kerusakan" class="form-control" placeholder="Tanggal Kerusakan">

			<!-- <label><b>Tanggal Perbaikan</b></label> -->
			<!-- <input type="date" name="tgl_perbaikan" class="form-control" placeholder="Tanggal Perbaikan"> -->

			<!-- <label><b>Nama Petugas</b></label> -->
			<!-- <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas"> -->

			<br>
			<input type="submit" class="btn btn-success" value="Tambah" name="submit">

		<a class="btn btn-info" href="peminjaman.php">Kembali</a>

		</form>
		
	</div>
</div>
 </div>
</div>
<?php
 
	if(isset($_POST['submit'])) {
		$id_barang = $_POST['id_barang'];
		$ket_kerusakan = $_POST['ket_kerusakan'];
		$tgl_kerusakan= $_POST['tgl_kerusakan'];

		
		$result = mysqli_query($koneksi, "INSERT INTO kerusakan(id_barang,ket_kerusakan,tgl_kerusakan) VALUES('$id_barang','$ket_kerusakan','$tgl_kerusakan')");
		
		echo "<script>alert('Berhasil Menambah Data')</script>";
		echo "<meta http-equiv='refresh' content='0;url=kerusakan.php'>";
	}
	?>

	</body>
</html>