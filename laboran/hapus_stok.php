<?php

include_once("../koneksi.php");
 
$id_stok = $_GET['id_stok'];
 
$result = mysqli_query($koneksi, "DELETE FROM status WHERE id_stok=$id_stok");
 
echo "<script>alert('Berhasil menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=stok.php'>";
?>