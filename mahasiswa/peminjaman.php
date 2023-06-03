<?php  
	include "menu_bar.php";
?>
<?php
 include "../koneksi.php"; 
 session_start();
 $nim = $_SESSION['nim']; 
 ?>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<div class="container mt-3">
	<div class="row">
		<div class="col-lg-12">
		<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Data Peminjaman</h3>
		<br>
		</div>
		<table class="table table-striped" style="background-color:white;">
			<a href="tambah_peminjaman.php" class="btn btn-info  " style="margin-bottom:7px; width:100% ;">Tambah</a>
			<thead class="thead bg-info">
				<tr>
					<th scope="col">No</th>
					<th scope="col">NIM</th>
					<th scope="col">MAHASISWA</th>
					<th scope="col">BARANG</th>
					<th scope="col">NOMOR BARANG</th>
					<th scope="col">TANGGAL PINJAM</th>
					<th scope="col">TANGGAL KEMBALI</th>
					<th scope="col">STATUS</th>
					<th align="center" scope="col">Tools</th>
					
				</tr>
			</thead>
			<tbody class="">

<?php
	$sql	= "SELECT * FROM pinjam,barang where pinjam.id_barang = barang.id_barang and pinjam.nim= $nim  ";
	$query  = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query)){
?>
	<tr class="odd gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['nama_mhs']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['no_barang']; ?></td>
		<td><?php echo $data['tgl_pinjam']; ?></td>
		<td><?php echo $data['tgl_kembali']; ?></td>
		<td><?php echo $data['statuss']; ?></td>
		<td><a href="form_peminjaman.php?id_pinjam=<?php echo $data['id_pinjam']; ?>"> <i style="color:green" class="fa fa-eye"></i> </a></td>

<?php
$no++;  
	}
?>
			</tbody>
		</table>
	</div>
</div>