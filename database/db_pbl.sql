-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2022 pada 13.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pbl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `no_barang` int(10) NOT NULL,
  `status` enum('Tersedia','Kosong','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `no_barang`, `status`) VALUES
(1, 'keyboard', 1, 'Tersedia'),
(2, 'mouse', 2, 'Kosong'),
(3, 'printer', 3, 'Tersedia'),
(4, 'henset', 6, 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `ket_kerusakan` varchar(50) NOT NULL,
  `ket_perbaikan` varchar(50) NOT NULL,
  `tgl_kerusakan` date NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `nama_petugas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `id_barang`, `ket_kerusakan`, `ket_perbaikan`, `tgl_kerusakan`, `tgl_perbaikan`, `nama_petugas`) VALUES
(2, 2, 'mouse tidak bisa bergerakk', 'mengganti sensor mouse', '2022-05-11', '2022-05-13', 'abdi'),
(3, 1, 'tidak bisa di ketik', 'tombol keyboard menghilang', '2022-05-28', '2022-05-29', 'venii'),
(5, 2, 'kabel mouse putus', 'menyambungkan kabel mouse yang telah putus', '2022-05-29', '2022-05-31', 'abdiii'),
(15, 2, 'mouse tidak bisa di klickkkkkk', 'mengganti klicker mouse', '2022-12-31', '2022-12-01', 'veni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboran`
--

CREATE TABLE `laboran` (
  `nip` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `level` enum('laboran','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laboran`
--

INSERT INTO `laboran` (`nip`, `nama`, `username`, `password`, `alamat`, `no_telp`, `level`) VALUES
(1, 'ABDILLAH', 'admin', 'admin', 'BENGKONG SARMEN RAYA', '089682922897', 'laboran'),
(3, 'ABDILLAH', 'abdi', 'abdi', 'BENGKONG SARMEN RAYA', '089682922897', 'laboran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `mahasiswa` enum('mahasiswa','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `username`, `password`, `kelas`, `alamat`, `no_tlp`, `mahasiswa`) VALUES
(1, 'abdi', 'abdi', 'abdi', 'if2b', 'sarmen', '089682922897', 'mahasiswa'),
(2, 'veni', 'veni', 'veni', 'if2bpagi', 'sarmen', '084532425458', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_barang` int(10) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `statuss` enum('Draft','Request','Confirm','Return','Done','Broken') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `nim`, `nama_mhs`, `tgl_pinjam`, `id_barang`, `tgl_kembali`, `statuss`) VALUES
(20, 1, 'abdi', '2022-12-31', 4, '2022-12-31', 'Done'),
(21, 2, 'ABDILLAH', '2022-12-31', 4, '2022-12-31', 'Confirm'),
(25, 2, 'abdi', '2022-12-31', 2, '2022-12-31', 'Draft'),
(26, 1, 'abdi', '2021-12-31', 4, '2022-12-31', 'Broken');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_stok` int(10) NOT NULL,
  `nama_stok` varchar(30) NOT NULL,
  `no_stok` int(20) NOT NULL,
  `statuss` enum('Tersedia','Kosong') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_stok`, `nama_stok`, `no_stok`, `statuss`) VALUES
(1, 'kabel mousee', 10, 'Kosong'),
(3, 'sensor mouse', 2, 'Tersedia'),
(5, 'tinta printer', 5, 'Tersedia'),
(6, 'katrid printer', 7, 'Tersedia'),
(8, 'spiker', 9, 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `laboran`
--
ALTER TABLE `laboran`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_alat` (`id_barang`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id_kerusakan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `laboran`
--
ALTER TABLE `laboran`
  MODIFY `nip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_stok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD CONSTRAINT `kerusakan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
