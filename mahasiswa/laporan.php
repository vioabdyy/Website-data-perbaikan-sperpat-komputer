<?php  
	include "menu_bar.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Aplikasi Pengirim Email</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>

<body  style="background-image: url(../images/7.jpg);height: 100%;background-position: center;	background-size: cover;">
	<br>
<h3 class="tulisan_data" style="font-family:Audiowide; font-weight: bold">Reporting Kerusakan</h3>
	<div class="container">
		<div class="col-lg-8">
			<div class="page-header">
				
			</div>
			<br>
			<form action="Kirim.php" method="post">
				<div class="card" style="margin-left: 232px;width: 41rem;margin-bottom: 55px;">
		  <div class="card-body">
				<div class="form-group">
					<label><b>Email Petugas</label>
					<input type="text" name="tujuan" class="form-control">
				</div>
				<div class="form-group">
					<label>Subjek</label>
					<input type="text" name="subjek" class="form-control">
				</div>
				<div class="form-group">
					<label>Pesan</b></label>
					<textarea name="pesan" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="Kirim" value="Kirim Pesan" class="btn btn-info">
				</div>
			</form>
			<h3 style="font-family:Audiowide;">Email Petugas Laboratorium : </h3>
			<table border="2" cellpadding="10" style="background-color: white">
				<br>
        <tr>
            <td>Email</td>
            <td>Nama Petugas Laboran</td>
        </tr>
        <tr>
            <td>jiwanaja@gmail.com</td>
            <td>Abdillah</td>
        </tr>
        <tr>
            <td>sawiyati001@gmail.com</td>
            <td>Abdillah</td>
        </tr>
    </table>
		</div>
	</div>
</div>
</div>
</body>

</html>
