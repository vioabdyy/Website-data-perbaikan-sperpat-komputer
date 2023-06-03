	<?php 

session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if($level == 'mahasiswa'){
	$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa where username='$username' and password='$password'");

	 if (mysqli_num_rows($mahasiswa) > 0) {
	 	$row = mysqli_fetch_array($mahasiswa);
	 	$nim = $row['nim'];
	 	echo "$nim";
	 	$_SESSION['username'] = $username;
	 	$_SESSION['nim'] = $nim;
		$_SESSION['level'] = "mahasiswa";
	 	echo "<script>alert('Berhasil Login Sebagai mahasiswa')</script>";
		echo "<meta http-equiv='refresh' content='0;url=mahasiswa/mahasiswa.php'>";
	 
	 }else{
	 	echo "gagal";
	 }
	

}else if($level== 'laboran'){
	$login = mysqli_query($koneksi,"select * from laboran where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['level']=="laboran"){
	 

			$_SESSION['username'] = $username;
			$_SESSION['level'] = "laboran";

			echo "<script>alert('Berhasil Login Sebagai laboran')</script>";
		echo "<meta http-equiv='refresh' content='0;url=laboran/laboran.php'>";
	 
		}else{
	 
			header("location:index.php?pesan=gagal");
		}	
	}else{
		header("location:index.php?pesan=gagal");
	}
}


 
?>