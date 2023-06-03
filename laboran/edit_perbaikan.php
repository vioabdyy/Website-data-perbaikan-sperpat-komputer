<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>
<?php 
	$id_kerusakan = $_GET['id_kerusakan'];
	$row = mysqli_query($koneksi,"SELECT * FROM kerusakan where id_kerusakan='$id_kerusakan'");
	while ($data = mysqli_fetch_array($row)) {
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="kotak_data">
	<div class="container mt-3">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Edit Perbaikan </h3>
 		<br>
		<form method="POST"action="edit_perbaikan.php?id_kerusakan=<?php echo $id_kerusakan; ?>">
			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			
			<input type="hidden" name="id_kerusakan" class="form-control" value="<?php echo $data['id_kerusakan']; ?>">
 
			<label><b>Barang</label>
			  <select name="id_barang" class="form-control">
			  	<?php  
			  		$datas = mysqli_query($koneksi,"SELECT * FROM barang");
			  		while ($panggil = mysqli_fetch_array($datas)) {
			  	?>
			  	<option value="<?php echo $panggil['id_barang'] ?>"><?php echo $panggil['nama_barang']; ?>&nbsp;-&nbsp;<?php echo $panggil['status']; ?>
			  	</option>
			  <?php } ?>
			  </select>

			<label>Keterangan Rusakan</label>
			<input type="text" name="ket_kerusakan" class="form-control" value="<?php echo $data['ket_kerusakan']; ?>">


			<label>Tanggal Rusakan</label>
			<input type="date" name="tgl_kerusakan" class="form-control" value="<?php echo $data['tgl_kerusakan']; ?>">

			<label>Keterangan Perbaikan</label>
			<input type="text" name="ket_perbaikan" class="form-control" value="<?php echo $data['ket_perbaikan']; ?>">

			<label>Tanggal Perbaikan</label>
			<input type="date" name="tgl_perbaikan" class="form-control" value="<?php echo $data['tgl_perbaikan']; ?>">

			<label>Nama Petugas</b></label>
			<input type="text" name="nama_petugas" class="form-control" value="<?php echo $data['nama_petugas']; ?>">
			<br>
			<input type="submit" class="btn btn-success" value="Update" name="update">

		<a class="btn btn-info" href="perbaikan.php">Kembali</a>

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
		$id_kerusakan = $_POST['id_kerusakan'];
		$id_barang = $_POST['id_barang'];
		$ket_kerusakan = $_POST['ket_kerusakan'];
		$tgl_kerusakan= $_POST['tgl_kerusakan'];
		$ket_perbaikan = $_POST['ket_perbaikan'];
		$tgl_perbaikan = $_POST['tgl_perbaikan'];
		$nama_petugas = $_POST['nama_petugas'];
			
		$result = mysqli_query($koneksi, "UPDATE kerusakan SET id_barang='$id_barang',tgl_kerusakan='$tgl_kerusakan',ket_perbaikan='$ket_perbaikan',ket_kerusakan='$ket_kerusakan',tgl_perbaikan='$tgl_perbaikan',nama_petugas='$nama_petugas'WHERE id_kerusakan=$id_kerusakan");
		
		echo "<script>alert('Berhasil Mengubah Data!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=perbaikan.php'>";
	}
?>