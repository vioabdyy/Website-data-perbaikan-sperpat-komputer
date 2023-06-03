<?php

include_once("../koneksi.php");
 
$id_barang = $_GET['id_barang'];
 
$result = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang=$id_barang");
 
echo "<script>alert('Berhasil menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=barang.php'>";
?>