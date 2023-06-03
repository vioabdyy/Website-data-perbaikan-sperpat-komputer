<?php  
	include "menu_bar.php";
?>
<?php  
	include "../koneksi.php";
?>
<?php 
	$id_stok= $_GET['id_stok'];
	$row = mysqli_query($koneksi,"SELECT * FROM status where id_stok='$id_stok'");
	while ($data = mysqli_fetch_array($row)) {
 ?>
 <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="kotak_data">
	<div class="container mt-3">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Edit Sparepart</h3>
 		<br>
		<form method="POST"action="edit_stok.php?id_stok=<?php echo $id_stok; ?>">
			<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
			
			<input type="hidden" name="id_stok" class="form-control" value="<?php echo $data['id_stok']; ?>">
 
			<label><b>Nama Sparepart</label>
			<input type="text" name="nama_stok" class="form-control" value="<?php echo $data['nama_stok']; ?>">

			<label>No Sparepart</label>
			<input type="text" name="no_stok" class="form-control" value="<?php echo $data['no_stok']; ?>">

			<div class="form-group">
                <label><b>Status</b></label>
                <select  name="statuss" class="form-control" value="<?php echo $data['status']; ?>">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Kosong">Kosong</option>
                </select>
                </div>

			<br>
			<input type="submit" class="btn btn-success" value="Update" name="update">

		<a class="btn btn-info" href="stok.php">Kembali</a>

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
		$id_stok = $_POST['id_stok'];
		$nama_stok = $_POST['nama_stok'];
		$no_stok = $_POST['no_stok'];
		$statuss= $_POST['statuss'];
			
		$result = mysqli_query($koneksi, "UPDATE status SET id_stok='$id_stok',nama_stok='$nama_stok',no_stok='$no_stok',statuss='$statuss'WHERE id_stok=$id_stok");
		
		echo "<script>alert('Berhasil Mengubah Data!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=stok.php'>";
	}
?>