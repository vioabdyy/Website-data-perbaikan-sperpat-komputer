	<?php  
	include "menu_bar.php";
?>
<?php
 include "../koneksi.php"; 
 ?>
 <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="container mt-3">
	<div class="row">
		<div class="col-lg-12">
		<h3 class="tulisan_data"style="font-family:Audiowide; font-weight: bold">Data Sparepart</h3>
		<br>
		</div>
		<table class="table table-striped" style="background-color: white;">
			<a href="tambah_stok.php" class="btn btn-info  " style="margin-bottom:7px; width:100% ;">Tambah</a>
			<thead class="thead bg-info">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Sparepart</th>
					<th scope="col">No Sparepart</th>
					<th scope="col">Status</th>
					<th align="center" scope="col">Tools</th>
				</tr>
			</thead>
			<tbody>
<?php
	$sql	= "SELECT * FROM status";
	$query  = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query)){
?>
	<tr class="odd gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama_stok']; ?></td>
		<td><?php echo $data['no_stok']; ?></td>
		<td><?php echo $data['statuss']; ?></td>
		<td><a href="edit_stok.php?id_stok=<?php echo $data['id_stok']; ?>" > <i style="color:yellow" class="fa fa-pencil"></i></a>
		<a href="hapus_stok.php?id_stok=<?php echo $data['id_stok']; ?>" > <i style="color:red" class="fa fa-trash"></i></a>
</td>	
<?php
$no++;  
	}
?>
			</tbody>
		</table>
	</div>
</div>