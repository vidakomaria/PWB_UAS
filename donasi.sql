-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 13.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noHp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `nama_lengkap`, `username`, `password`, `email`, `noHp`) VALUES
(1, 'donaturNew', 'user', '123', 'donatur1@gmail.com', '081234567990'),
(2, 'donatur2', 'user2', '111', '', '0'),
(5, 'vida komaria', 'vida5', 'admin', 'vidakomaria47@gmail.com', '082222333444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donasi`
--

CREATE TABLE `data_donasi` (
  `idDonasi` int(11) NOT NULL,
  `idAkun` int(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `keterangan` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_donasi`
--

INSERT INTO `data_donasi` (`idDonasi`, `idAkun`, `tanggal`, `jumlah`, `keterangan`) VALUES
(1, 1, '2021-06-01', 300000, 'Donasi yang anda berikan disalurkan untuk pemberian bantuan berupa seragam kepada siswa SD daerah Jember yang memiliki ekonomi kurang mampu dan tidak memiliki seragam yang layak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indeks untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`idDonasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `idDonasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
