<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>
<?php 
	$id_barang= $_GET['id_barang'];
	$row = mysqli_query($koneksi,"SELECT * FROM barang where id_barang='$id_barang'");
	while ($data = mysqli_fetch_array($row)) {
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="kotak_data">
	<div class="container mt-3">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Edit Barang</h3>
 		<br>
		<form method="POST"action="edit_barang.php?id_barang=<?php echo $id_barang; ?>">

			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			<input type="hidden" name="id_barang" class="form-control" value="<?php echo $data['id_barang']; ?>">
 
			<label><b>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang']; ?>">

			<label>No Barang</label>
			<input type="text" name="no_barang" class="form-control" value="<?php echo $data['no_barang']; ?>">

			<div class="form-group">
                <label><b>Status</b></label>
                <select  name="status" class="form-control" value="<?php echo $data['status']; ?>">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Kosong">Kosong</option>
                </select>
                </div>

			<br>
			<input type="submit" class="btn btn-success" value="Update" name="update">

		<a class="btn btn-info" href="barang.php">Kembali</a>

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
		$id_barang = $_POST['id_barang'];
		$nama_barang = $_POST['nama_barang'];
		$no_barang = $_POST['no_barang'];
		$status = $_POST['status'];
			
		$result = mysqli_query($koneksi, "UPDATE barang SET id_barang='$id_barang',nama_barang='$nama_barang',no_barang='$no_barang',status='$status'WHERE id_barang=$id_barang");
		
		echo "<script>alert('Berhasil Mengubah Data!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=barang.php'>";
	}
?>