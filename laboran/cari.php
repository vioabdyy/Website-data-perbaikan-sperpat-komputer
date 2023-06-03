<?php include "../koneksi.php";  ?>
<?php  
	include "menu_bar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<title>Laporan Peminjaman Barang</title>
	<div class="container">
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;  background-size: cover;">
	<div class="card"style="margin-left: -42px;margin-top: 100px;width: 75rem;margin-bottom: 55px;">
		  <div class="card-body">
	<h3 style="font-family:Audiowide; font-weight: bold">Laporan Peminjaman Barang</h3>
	<br>
	<form method="get">
			<label><b>PILIH TANGGAL</label>
			<input type="date" name="tgl_pinjam">
			<input  type="submit" class="btn btn-success" value="Cari">
		</form>
	<hr/>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Barang</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Keterangan</th>
	</tr>
	<?php 
		$no = 1;

		if(isset($_GET['tgl_pinjam'])){
			$tgl_pinjam = $_GET['tgl_pinjam'];
			$sql = mysqli_query($koneksi,"select * from pinjam,barang where pinjam.nim = barang.id_barang and tgl_pinjam='$tgl_pinjam'");
		
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama_mhs']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['tgl_pinjam']; ?></td>
			<td><?php echo $data['tgl_kembali']; ?></td>
			<td><?php echo $data['statuss']; ?></td>
		</tr>
		<?php 
		}
	?>

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Izin Dosen, <?= date('d/m/y') ?> <br/>
				Dosen,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	<a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</div>
</div>
</div>
</body>
</html>
<?php } ?>