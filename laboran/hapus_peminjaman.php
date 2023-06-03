<?php

include_once("../koneksi.php");
 
$id_pinjam = $_GET['id_pinjam'];
 
$result = mysqli_query($koneksi, "DELETE FROM pinjam WHERE id_pinjam=$id_pinjam");
 
echo "<script>alert('Berhasil menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=peminjaman.php'>";
?>