<?php

include_once("../koneksi.php");
 
$id_kerusakan = $_GET['id_kerusakan'];
 
$result = mysqli_query($koneksi, "DELETE FROM kerusakan WHERE id_kerusakan=$id_kerusakan");
 
echo "<script>alert('Berhasil menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=perbaikan.php'>";
?>