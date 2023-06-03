<?php  
	include "menu_bar.php";
?>
<?php
 include "../koneksi.php"; 
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="container mt-3" >
	<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Data Mahasiswa</h3>
	<div class="row">
		<div class="col-lg-12">
		<br>
		</div>
		<table class="table table-striped" style="background-color: white;">
			<a href="tambah_mahasiswa.php" class="btn btn-info  " style="margin-bottom:7px; width:100% ;">Tambah</a>
			<thead class="thead bg-info">
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">MAHASISWA</th>
					<th scope="col">USERNAME</th>
					<th scope="col">KELAS</th>
					<th scope="col">ALAMAT</th>
					<th scope="col">NO TELEPON</th>
					<th scope="col">ROLE</th>
					<th align="center" scope="col">Tools</th>
				</tr>
			</thead>
			<tbody class="">
<?php
	$sql	= "SELECT * FROM mahasiswa";
	$query  = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query)){
?>
	<tr class="odd gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['kelas']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['no_tlp']; ?></td>
		<td><?php echo $data['mahasiswa']; ?></td>
		<td>
			<a href="edit_mahasiswa.php?nim=<?php echo $data['nim']; ?>"> <i style="color:yellow" class="fa fa-pencil"></i></a>
			<a href="hapus_mahasiswa.php?nim=<?php echo $data['nim']; ?>"> <i style="color:red" class="fa fa-trash"></i> </a>
				
		</td>	
	</tr>
<?php
$no++;  
	}
?>
			</tbody>
		</table>
	</div>
</div>
</body>