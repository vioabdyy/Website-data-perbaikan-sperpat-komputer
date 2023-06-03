<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>
<?php 
	$id_pinjam = $_GET['id_pinjam'];
	$row = mysqli_query($koneksi,"SELECT * FROM pinjam where id_pinjam='$id_pinjam'");
	while ($data = mysqli_fetch_array($row)) {
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="kotak_data">
	<div class="container mt-3">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Form Peminjaman </h3>
 		<br>
 		<div class="card" style="margin-left: 232px;width: 41rem;">
		  <div class="card-body">
	    	<form method="POST"action="edit_peminjaman.php?id_pinjam=<?php echo $id_pinjam; ?>">
				<input type="hidden" name="id_pinjam" class="form-control" value="<?php echo $data['id_pinjam']; ?>">
	 
				<label><b>NIM</label>
				<input type="text" name="nim" class="form-control" value="<?php echo $data['nim']; ?>" >

				<label>Nama Mahasiswa</label>
				<input type="text" name="nama_mhs" class="form-control" value="<?php echo $data['nama_mhs']; ?>" >

				<label>Barang</label>
				  <select name="id_barang" class="form-control">
				  	<?php  
				  		$datas = mysqli_query($koneksi,"SELECT * FROM barang");
				  		while ($panggil = mysqli_fetch_array($datas)) {
				  	?>
				  	<option  value="<?php echo $panggil['id_barang'] ?>"><?php echo $panggil['nama_barang']; ?>&nbsp;-&nbsp;<?php echo $panggil['status']; ?>
				  	</option>
				  <?php } ?>
				  </select>

				<label>Tanggal Pinjam</label>
				<input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $data['tgl_pinjam']; ?>" >


				<label>Tanggal Kembali</b></label>
				<input type="date" name="tgl_kembali" class="form-control" value="<?php echo $data['tgl_kembali']; ?>" >
				<br>
				<input type="submit" class="btn btn-success" value="Update" name="update">

			<a class="btn btn-info" href="form_peminjaman.php?id_pinjam=<?php echo $data['id_pinjam']; ?>">Kembali</a>

			</form>
		  </div>
		</div>
		</div>
	</div>
<?php  
	}
?>
<?php
	if(isset($_POST['update']))
	{	
		$id_pinjam = $_POST['id_pinjam'];
		$nim = $_POST['nim'];
		$nama_mhs = $_POST['nama_mhs'];
		$id_barang = $_POST['id_barang'];
		$tgl_pinjam= $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$id_barang = $_POST['id_barang'];
			
		$result = mysqli_query($koneksi, "UPDATE pinjam SET nim='$nim',nama_mhs='$nama_mhs',id_barang='$id_barang',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali',id_barang='$id_barang'WHERE id_pinjam=$id_pinjam");
		
		echo "<script>alert('Berhasil Mengubah Data!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=peminjaman.php'>";
	}
?>