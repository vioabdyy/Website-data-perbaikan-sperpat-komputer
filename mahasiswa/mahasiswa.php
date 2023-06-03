<?php
 session_start();
 if(!isset($_SESSION["username"])){// jika sesion tidak ada maka kembali ke login
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
$nim=$_SESSION['nim'];
?>
<?php 
include "menu_bar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fontawesome/css/all.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
  <body style="background-image: url(../images/7.jpg);height: 100%;background-position: center;  background-size: cover;">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <h3 style="position: absolute; top: 0px; z-index: 1; color: black; font-family:Audiowide; font-weight: bold"><b>Selamat Datang <?php echo$username;?></h3>
    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/poltek1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/poltek22.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<center><h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Selamat Datang Di Peminjman  Alat Laboratorium</h5></center>
<br>
<div class="">
<div class="row mx-auto" style="">
<div class="wall col-md-4" style="width: 30rem; background-color: #FFFAF0">
  <img src="../images/1.jpg" class="wall-img-top" style="width: 30rem"alt="...">
</div>
<div class="wall col-md-4" style="width: 30rem; background-color: #FFFAF0">
  <img src="../images/2.jpg" class="wall-img-top" style="width: 30rem"alt="...">
</div>
<div class="wall col-md-4" style="width: 30rem; background-color: #FFFAF0">
  <img src="../images/3.jpg" class="wall-img-top" class="gambar" style="width: 100% ;height:100%"alt="...">
</div>
</div>
</div>
 <div class="container p-4">
  <div class="row mx-auto" style="">
<div class="wall col-md-4" style="width: 30rem; background-color: ">
  <img src="../images/labor.png" class="wall-img-top" style="width: 20rem"alt="...">
<br>
<center><p>Peminjaman Barang</p></center>
<br>
<a href="peminjaman.php" class="btn btn-primary right">Klick Disni</a>
<br>
</div>
<div class="wall col-md-4" style="width: 30rem; background-color: ;">
  <img src="../images/rusak.png" class="wall-img-top" style="width: 17rem"alt="...">
<br>
<center><p>Laporan Kerusakan</p></center>
<br>
<a href="kerusakan.php" class="btn btn-primary right">Klick Disni</a>
<br>
</div>
<div class="wall col-md-4" style="width: 30rem; background-color: ">
  <img src="../images/report.png" class="wall-img-top" style="width: 16rem"alt="...">
<br>
<center><p>Reporting</p></center>
<br>
<a href="laporan.php" class="btn btn-primary right">Klick Disni</a>
<br>
<br>
</div>
</div>
<br>
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Tata Cara Lapor Kerusakan</h5>
        <br><br>
       <p>1.Mahasiswa Wajib Memiliki Akun</p>
         <p>2.Setelah Memiliki Akun Mahasiswa di Persilakan Untuk Login</p>
          <p>3.Setelah Login Mahasiswa Akan di Arah Ke Halaman Home</p>
          <p>4.Pada Bagian Atas Terdapat Menu Lapor Kerusakan</p>
           <p>5.Setelah Berada di Menu Lapor Kerusakan Mahasiswa Dapat Melihat Data Mahasiswa Yang Sudah Melakukan Laporan Kerusakan</p>
           <p>6.Selanjutnya Klick Tombol Tambah Pada Bagian Atas Tabel</p>
             <p>7.Setelah Klick Tombol Tambah Mahasiswa di Harapkan Mengisi Data Lapor Kerusakan</p>
              <p>8.Setelah Mengisi Data Lapor Kerusakan Klick Tombol Tambah Pada Bagian Kanan Bawah Untuk Menyinpan Data</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Tata Cara Peminjaman Alat Laboratorium</h5>
        <br>
        <p>1.Mahasiswa Wajib Memiliki Akun</p>
         <p>2.Setelah Memiliki Akun Mahasiswa di Persilakan Untuk Login</p>
          <p>3.Setelah Login Mahasiswa Akan di Arah Ke Halaman Home</p>
          <p>4.Pada Bagian Atas Terdapat Menu Peminjaman</p>
          <p>5.Setelah Berada di Menu Peminjaman Mahasiswa Dapat Melihat Data Mahasiswa Yang Sedang Meminjam Alat Laboratorium</p>
          <p>6.Selanjutnya Klick Tombol Tambah Pada Bagian Atas Tabel</p>
           <p>7.Setelah Klick Tombol Tambah Mahasiswa di Harapkan Mengisi Data Peminjaman Buku</p>
            <p>8.Setelah Mengisi Data Peminjaman Klick Tombol Tambah Pada Bagian Kanan Bawah Untuk Menyinpan Data</p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
    <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Tata Cara Lapor Kerusakan</h5>
        <br><br>
       <p>1.Mahasiswa Wajib Memiliki Akun</p>
         <p>2.Setelah Memiliki Akun Mahasiswa di Persilakan Untuk Login</p>
          <p>3.Setelah Login Mahasiswa Akan di Arah Ke Halaman Home</p>
          <p>4.Pada Bagian Atas Terdapat Menu Lapor Kerusakan</p>
           <p>5.Setelah Berada di Menu Lapor Kerusakan Mahasiswa Dapat Melihat Data Mahasiswa Yang Sudah Melakukan Laporan Kerusakan</p>
           <p>6.Selanjutnya Klick Tombol Tambah Pada Bagian Atas Tabel</p>
             <p>7.Setelah Klick Tombol Tambah Mahasiswa di Harapkan Mengisi Data Lapor Kerusakan</p>
              <p>8.Setelah Mengisi Data Lapor Kerusakan Klick Tombol Tambah Pada Bagian Kanan Bawah Untuk Menyinpan Data</p>

      </div>
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Tata Cara Reporting</h5>
        <br>
        <br>
        <p>1.Mahasiswa Wajib Memiliki Akun</p>
         <p>2.Setelah Memiliki Akun Mahasiswa di Persilakan Untuk Login</p>
          <p>3.Setelah Login Mahasiswa Akan di Arah Ke Halaman Home</p>
          <p>4.Pada Bagian Atas Terdapat Menu Reporting</p>
          <p>5.Setelah Berada di Menu Reporting Mahasiswa Dapat Melihat Form Reporting</p>
          <p>6.Selanjutnya Isi From Sesuai Kerusakan,Nama Alat dan Kirim ke Email Yang Sudah Tercantum</p>
           <p>7.Setelah Mengisi From Reporting Klick Kirim Pada Bagian Kanan Bawah Untuk Mengirim Email</p>
      </div>  
    </div>
  </div>
<footer class="bg-light text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <center><h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">About Us</h5></center>

        <p>
          Kami bergerak didalam bidang perminjaman peralatan Laboratorium Komputer.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <center><h5 class="text-uppercase" style="font-family:Audiowide; font-weight: bold">Contact Us</h5></center>
        <p><i class="fas fa-home me-3"></i>Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            jiwanaja@gmail.com
          </p>
        <p><i class="fas fa-phone me-3"></i> +62 896 8292 2897</p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" >
    © 2022 Copyright:
    <a class="text-dark" href="mahasiswa.php" style="font-family:Audiowide; font-weight: bold">ABDILLAH</a>
  </div>
  <!-- Copyright -->
</footer>
 </body>
 </html>