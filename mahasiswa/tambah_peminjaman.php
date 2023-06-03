<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Peminjaman</title>
	<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<div class="container mt-3">
</head>
<body>
	<div class="kotak_data">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Tambah Peminjaman </h3>
 		<br>
		<form method="POST"  action="tambah_peminjaman.php">
			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			<label><b>Nim</b></label>
			  <select name="nim" class="form-control">
			  	<option>Pilih Nim</option>
			  	<?php  
			  		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
			  		while ($panggil = mysqli_fetch_array($data)) {
			  	?>
			  	<option value="<?php echo $panggil['nim'] ?>"><?php echo $panggil['nim']; ?>
			  	</option>
			  <?php } ?>
			  </select>
 
			<label><b>Nama Mahasiswa</b></label>
			  <select name="nama_mhs" class="form-control">
			  	<option>Pilih Nama</option>
			  	<?php  
			  		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
			  		while ($panggil = mysqli_fetch_array($data)) {
			  	?>
			  	<option value="<?php echo $panggil['nama'] ?>"><?php echo $panggil['nama']; ?>
			  	</option>
			  <?php } ?>
			  </select>

			<label><b>Barang</b></label>
			  <select name="id_barang" class="form-control">
			  	<option>Pilih Barang</option>
			  	<?php  
			  		$data = mysqli_query($koneksi,"SELECT * FROM barang");
			  		while ($panggil = mysqli_fetch_array($data)) {
			  	?>
			  	<option value="<?php echo $panggil['id_barang'] ?>"><?php echo $panggil['nama_barang']; ?>&nbsp;-&nbsp;<?php echo $panggil['status']; ?>
			  	</option>
			  <?php } ?>
			  </select>


			<label><b>Tanggal Pinjam</b></label>
			<input type="date" name="tgl_pinjam" class="form-control" placeholder="Tanggal Pinjam">

			<label><b>Tanggal Kembali</b></label>
			<input type="date" name="tgl_kembali" class="form-control" placeholder="Tanggal Kembali">
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
		$nim = $_POST['nim'];
		$nama_mhs = $_POST['nama_mhs'];
		$id_barang = $_POST['id_barang'];
		$tgl_pinjam= $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		// $id_barang = $_POST['id_barang'];
		
		$result = mysqli_query($koneksi, "INSERT INTO pinjam(nim,nama_mhs,id_barang,tgl_pinjam,tgl_kembali) VALUES('$nim','$nama_mhs','$id_barang','$tgl_pinjam','$tgl_kembali')");
		
		echo "<script>alert('Berhasil Menambah Data')</script>";
		echo "<meta http-equiv='refresh' content='0;url=peminjaman.php'>";
	}
	?>

	</body>
</html>