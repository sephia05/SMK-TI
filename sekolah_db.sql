-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 14.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbguru`
--

CREATE TABLE `dbguru` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jeniskelamin` varchar(16) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `tanggallahir` date NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbguru`
--

INSERT INTO `dbguru` (`id`, `nip`, `nama`, `jeniskelamin`, `agama`, `tanggallahir`, `login_id`) VALUES
(1, '1234567890', 'Ari Kurniawan ', 'Laki-laki', 'Islam', '1945-08-17', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbjurusan`
--

CREATE TABLE `dbjurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `singkatan` varchar(8) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbjurusan`
--

INSERT INTO `dbjurusan` (`id`, `nama`, `gambar`, `singkatan`, `penjelasan`) VALUES
(1, 'Teknik Komputer dan Jaringan', '', 'TKJ', ''),
(2, 'Rekayasa Perangkat Lunak', '', 'RPL', ''),
(3, 'MultiMedia', '', 'MM', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbkelas`
--

CREATE TABLE `dbkelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbkelas`
--

INSERT INTO `dbkelas` (`id`, `nama`) VALUES
(1, 'XII'),
(2, 'X'),
(3, 'XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dblogin`
--

CREATE TABLE `dblogin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `jenis` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dblogin`
--

INSERT INTO `dblogin` (`Id`, `Username`, `Password`, `jenis`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'reynaldi.20301@gmail.com', 'reynaldi01', 'siswa'),
(3, 'sephia.20302@gmail.com', 'sephia02', 'siswa'),
(4, 'afif.20303@gmail.com', 'afif03', 'siswa'),
(5, 'uswatun.20304@gmail.com', 'uswatun04', 'siswa'),
(6, 'arikurniawan@gmail.com', 'arikurniawan123', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmapel`
--

CREATE TABLE `dbmapel` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbmapel`
--

INSERT INTO `dbmapel` (`id`, `nama`) VALUES
(1, 'Pemrograman 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbrpp`
--

CREATE TABLE `dbrpp` (
  `id` int(11) NOT NULL,
  `idjurusan` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbsiswa`
--

CREATE TABLE `dbsiswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jeniskelamin` varchar(16) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbsiswa`
--

INSERT INTO `dbsiswa` (`id`, `nis`, `nama`, `jeniskelamin`, `login_id`) VALUES
(1, '20301', 'Reynaldi Dirmansyah Putra', 'Laki-laki', 2),
(2, '20302', 'Sephia Ummiyatil Azizah', 'Perempuan', 3),
(3, '20303', 'Muhammad Afif', 'Laki-laki', 4),
(4, '20304', 'Uswatun Khasanah', 'Perempuan', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dbguru`
--
ALTER TABLE `dbguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbjurusan`
--
ALTER TABLE `dbjurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbkelas`
--
ALTER TABLE `dbkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dblogin`
--
ALTER TABLE `dblogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `dbmapel`
--
ALTER TABLE `dbmapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbrpp`
--
ALTER TABLE `dbrpp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbsiswa`
--
ALTER TABLE `dbsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dbguru`
--
ALTER TABLE `dbguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dbjurusan`
--
ALTER TABLE `dbjurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dbkelas`
--
ALTER TABLE `dbkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dblogin`
--
ALTER TABLE `dblogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `dbmapel`
--
ALTER TABLE `dbmapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dbrpp`
--
ALTER TABLE `dbrpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dbsiswa`
--
ALTER TABLE `dbsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
