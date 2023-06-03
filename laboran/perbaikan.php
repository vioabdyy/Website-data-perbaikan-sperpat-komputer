<?php  
	include "menu_bar.php";
?>
<?php
 include "../koneksi.php"; 
 ?>
 <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div style="margin-left:7%; margin-right: 7%;">
	<div class="">
		<div class="col-lg-12">
		<br>
		<h3 class="tulisan_data " style="font-family:Audiowide; font-weight: bold">Data Perbaikan</h3>
		<br>
		</div>
		<table class="table table-striped" style="background-color: white;">
			<thead class="thead bg-info">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Barang</th>
					<th scope="col">Nomor Barang</th>
					<th scope="col">Keterangan Rusakan</th>
					<th scope="col">Tanggal Rusakan</th>
					<th scope="col">Keterangan Perbaikan</th>
					<th scope="col">Tanggal Perbaikan</th>
					<th scope="col">Nama Petugas</th>
					<th align="center" scope="col">Tools</th>
				</tr>
			</thead>
			<tbody class="">
<?php
	$sql	= "SELECT * FROM kerusakan,barang where kerusakan.id_barang = barang.id_barang ";
	$query  = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query)){
?>
	<tr class="odd gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['no_barang']; ?></td>
		<td><?php echo $data['ket_kerusakan']; ?></td>
		<td><?php echo $data['tgl_kerusakan']; ?></td>
		<td><?php echo $data['ket_perbaikan']; ?></td>
		<td><?php echo $data['tgl_perbaikan']; ?></td>
		<td><?php echo $data['nama_petugas']; ?></td>
		<td><a href="edit_perbaikan.php?id_kerusakan=<?php echo $data['id_kerusakan']; ?>"> <i style="color:yellow" class="fa fa-pencil"></i></a>
		<a href="hapus_perbaikan.php?id_kerusakan=<?php echo $data['id_kerusakan']; ?>"> <i style="color:red" class="fa fa-trash"></i></a>
</td>	
<?php
$no++;  
	}
?>
			</tbody>
		</table>
	</div>
</div>