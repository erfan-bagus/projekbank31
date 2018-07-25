-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jul 2018 pada 22.16
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekbank`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pass`) VALUES
(1, 'user', '$2y$10$B8AL6wSivr8H1aBzOYicIOULCy8P9Rb9aBurfi4AIJw6ajunHNYFW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambarberita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `kategori`, `judul`, `konten`, `gambarberita`) VALUES
(4, 'pengumuman', 'pengumuman2', 'pengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumumanpengumuman', NULL),
(5, 'berita', 'Beritaasanisnansa', 'uniasnsaniasn\r\n\r\nsasaldadq\r\nssa\r\nqa\r\n\r\nsqsqsqdqqf\r\neewf', 'vlcsnap-2018-07-02-13h38m56s402.png'),
(6, 'berita', 'ENWONWEWNWOS', 'DDEWEW\r\nGWWERA\r\nRWGRRGWR', 'vlcsnap-2018-06-27-14h53m16s040.png'),
(7, 'pengumuman', 'dsfDSD', 'sSVDVSVDS', NULL),
(8, 'pengumuman', 'adda', 'adada', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `filepdf`
--

CREATE TABLE `filepdf` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `namalokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `filepdf`
--

INSERT INTO `filepdf` (`id`, `kategori`, `nama`, `namalokasi`) VALUES
(7, 'laporankeuangan', 'fghrd', 'bannerlayanan.png'),
(8, 'laporankeuangan', 'asdf', 'vlcsnap-2018-06-26-10h01m49s502.png'),
(9, 'laporantahunan', 'aassasq', 'vlcsnap-2018-06-27-14h53m16s040.png'),
(10, 'laporantahunan', 'efeq', 'vlcsnap-2018-06-26-10h01m41s294.png'),
(11, 'laporancgc', 'ssddaad', 'vlcsnap-2018-06-26-10h00m29s702.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filepdf`
--
ALTER TABLE `filepdf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `filepdf`
--
ALTER TABLE `filepdf`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
