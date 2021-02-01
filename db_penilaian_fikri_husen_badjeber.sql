-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2021 pada 05.05
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penilaian_fikri_husen_badjeber`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2021-01-22-173805', 'App\\Modules\\Home\\Database\\Migrations\\Tables', 'default', 'App', 1612149486, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_guru`
--

CREATE TABLE `tab_guru` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(3) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tab_guru`
--

INSERT INTO `tab_guru` (`id`, `nik`, `nama_guru`, `pendidikan_terakhir`, `jurusan`, `asal_sekolah`, `alamat`, `email`, `no_telp`) VALUES
(1, '1231231231231231', 'Fulan', 'SMA', 'RPL', 'SMKN 2 Jakarta', 'asdfasdfasdf', 'asdfasdf@gmail.com', '17237561823');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_nilai_siswa`
--

CREATE TABLE `tab_nilai_siswa` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `nilai_uh` decimal(10,2) NOT NULL,
  `nilai_uts` decimal(10,2) NOT NULL,
  `nilai_uas` decimal(10,2) NOT NULL,
  `rata_rata` decimal(10,2) NOT NULL,
  `predikat` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tab_nilai_siswa`
--

INSERT INTO `tab_nilai_siswa` (`id`, `id_siswa`, `id_matapelajaran`, `nilai_uh`, `nilai_uts`, `nilai_uas`, `rata_rata`, `predikat`) VALUES
(1, 1, 0, '80.00', '100.00', '100.00', '93.33', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_pelajaran`
--

CREATE TABLE `tab_pelajaran` (
  `id` int(11) NOT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `kelas` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tab_pelajaran`
--

INSERT INTO `tab_pelajaran` (`id`, `mata_pelajaran`, `jurusan`, `kelas`) VALUES
(1, 'MTK', 'RPL', 'XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_siswa`
--

CREATE TABLE `tab_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tab_siswa`
--

INSERT INTO `tab_siswa` (`id`, `nis`, `nama_lengkap`, `kelas`, `jurusan`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_telp`) VALUES
(1, '002891', 'Ucup Abraham', 'SMP', 'OTKP', 'bekasi', '0000-00-00', 'sadasdasd            \r\n          ', 'asd@gmail.com', '08192739123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_user`
--

CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_guru`
--
ALTER TABLE `tab_guru`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tab_nilai_siswa`
--
ALTER TABLE `tab_nilai_siswa`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tab_pelajaran`
--
ALTER TABLE `tab_pelajaran`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tab_siswa`
--
ALTER TABLE `tab_siswa`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `tab_user`
--
ALTER TABLE `tab_user`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tab_guru`
--
ALTER TABLE `tab_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tab_nilai_siswa`
--
ALTER TABLE `tab_nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tab_pelajaran`
--
ALTER TABLE `tab_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tab_siswa`
--
ALTER TABLE `tab_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
