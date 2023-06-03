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
		<h3 class="tulisan_data "style="font-family:Audiowide; font-weight: bold">Data Barang</h3>
		<br>
		</div>
		<table class="table table-striped" style="background-color: white;">
			<a href="tambah_barang.php" class="btn btn-info  " style="margin-bottom:7px; width:100% ;">Tambah</a>
			<thead class="thead bg-info">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">No Barang</th>
					<th scope="col">Status</th>
					<th align="center" scope="col">Tools</th>
				</tr>
			</thead>
			<tbody class="">
<?php
	$sql	= "SELECT * FROM barang";
	$query  = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query)){
?>
	<tr class="odd gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['no_barang']; ?></td>
		<td><?php echo $data['status']; ?></td>
		<td><a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" > <i style="color:yellow" class="fa fa-pencil"></i></a>
		<a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" > <i style="color:red" class="fa fa-trash"></i></a>
</td>	
<?php
$no++;  
	}
?>
			</tbody>
		</table>
	</div>
</div>