-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2017 pada 06.14
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polieditor_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jkel` tinyint(1) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `password`, `jkel`) VALUES
('1241180090', 'ira', 'ira123', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(15) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(30) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `kuota_kelas` int(2) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `prodi`, `kuota_kelas`) VALUES
(1, 'WRI', 'Teknik Informatika', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_detail`
--

CREATE TABLE IF NOT EXISTS `kelas_detail` (
  `id_kelasD` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `status` int(12) NOT NULL,
  PRIMARY KEY (`id_kelasD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(15) NOT NULL AUTO_INCREMENT,
  `id_dosen` int(15) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `id_dosen`, `judul`, `nama_file`, `keterangan`, `tanggal_upload`, `id_kelas`) VALUES
(5, 1241180090, 'CV', 'folder_materi/1_WRI/248a983e48518e1957661cd85c33902d.pdf', 'ini cv', '2017-07-14 08:03:39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(15) NOT NULL AUTO_INCREMENT,
  `id_tugas` int(15) NOT NULL,
  `nim` int(15) NOT NULL,
  `nip` int(15) NOT NULL,
  `nilai` int(2) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` int(15) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `jenis_tugas` varchar(30) NOT NULL,
  `isi_tugas` text NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `judul`, `jenis_tugas`, `isi_tugas`, `waktu_mulai`, `waktu_selesai`, `id_kelas`) VALUES
(2, 'membuat website dinamis', 'Tugas harian', 'waktu : 120 menit (2 jam)', '2017-07-09 12:00:00', '2017-07-09 05:00:00', '1'),
(3, 'Membuat form html dengan metod', 'Tugas harian', 'dikerjakan dengan baik', '2017-07-09 00:00:00', '2017-07-09 12:00:00', '1'),
(4, 'Membuat sistem login dengan PH', 'Tugas harian', 'lalala lilili', '2017-07-09 12:00:00', '2017-07-16 12:00:00', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
