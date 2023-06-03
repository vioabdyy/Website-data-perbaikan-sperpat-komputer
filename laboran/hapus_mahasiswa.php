<?php

include_once("../koneksi.php");
 
$nim = $_GET['nim'];
 
$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim=$nim");
 
echo "<script>alert('Berhasil menghapus data')</script>";
			echo "<meta http-equiv='refresh' content='0;url=mahasiswa.php'>";
?>