-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 09:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semnas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `isi`) VALUES
(1, 'oAfSp5mq.png', '                                                                                                                    bhai              ');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(1) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no`, `tanggal`, `deskripsi`, `end_date`) VALUES
(2, '2022-04-18', 'Early Bird Full Paper Submission', '2022-05-15'),
(3, '2022-05-16', 'Regular Full Paper Submission', '2022-07-15'),
(4, '2022-07-15', 'Notification of Acceptance', '2022-07-24'),
(5, '2022-07-25', 'Deadline Payment', '0000-00-00'),
(6, '2022-07-29', 'Final Manuscript', '0000-00-00'),
(7, '2022-08-27', 'Conference Date', '2022-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `komite`
--

CREATE TABLE `komite` (
  `no` int(2) NOT NULL,
  `nama_komite` varchar(60) NOT NULL,
  `kampus_komite` varchar(100) NOT NULL,
  `negara_komite` varchar(50) NOT NULL,
  `jenis_komite` varchar(10) NOT NULL,
  `status_komite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komite`
--

INSERT INTO `komite` (`no`, `nama_komite`, `kampus_komite`, `negara_komite`, `jenis_komite`, `status_komite`) VALUES
(1, 'Prof. Seong Gu Hwang, Ph.D.', 'Hankyong National University', 'SOUTH KOREA', 'scientific', ''),
(2, 'Agung Irawan, S.Pt., M.Sc.', 'Oregon State University', 'USA ', 'scientific', ''),
(3, 'Dr. Ir. Dadik Pantaya, M.Si., IPU.', 'Politeknik Negeri Jember', 'INDONESIA', 'scientific', ''),
(4, 'Dr. Ir. Rosa Tri Hertamawati, M.Si.', 'Politeknik Negeri Jember', 'INDONESIA', 'scientific', ''),
(5, 'Dr. Ir. Merry Muspita DU, MP., IPM.', 'Politeknik Negeri Jember', 'INDONESIA', 'scientific', ''),
(6, 'Dr. Ir. Suci Wulandari, M.Si. IPM.', 'Politeknik Negeri Jember', 'INDONESIA', 'scientific', ''),
(7, 'Saiful Anwar, S.TP, MP.', '', '', 'organizing', 'Director'),
(8, 'Surateno, S.Kom, M.Kom.', '', '', 'organizing', 'Advisor'),
(9, 'Dr. Ir. Hariadi Subagja, S.Pt., MP., IPM.', '', '', 'organizing', 'Advisor'),
(10, 'Ir. Nurkholis, S.Pt., MP., IPM.', '', '', 'organizing', 'Advisor'),
(11, 'Gayuh Syaikhullah, S.Pt., M.Si.', '', '', 'organizing', 'Chairman of Organizing Committee'),
(12, 'Nur Muhamad, S.Pt., M.Sc.', '', '', 'organizing', 'Vice Chairman of Organizing Committee'),
(13, 'Rizki Amalia Nurfitriani, S.Pt., M.Si.', '', '', 'organizing', 'Secretary'),
(14, 'Mira Andriani, S.Pt., M.P.', '', '', 'organizing', 'Public Relations Coordinator'),
(15, 'Dr. Niswatin Hasanah, S.Pt., MP.', '', '', 'organizing', 'Public Relations Support'),
(16, 'Shokhirul Imam, S.Pt., M.Si.', '', '', 'organizing', 'Public Relations Support'),
(17, 'Reikha Rahmasari, S.Pt., M.Si.', '', '', 'organizing', 'Publication and Book Program Coordinator'),
(18, 'Agus Hadi Prayitno, S.Pt., M.Sc.', '', '', 'organizing', 'Publication and Book Program Support'),
(19, 'Theo Mahiseta Syahniar, S.Pt., M.Sc.', '', '', 'organizing', 'Publication and Book Program Support'),
(20, 'Alditya Putri Yulinasari, S.Pt., M.Pt.', '', '', 'organizing', 'Publication and Book Program Support'),
(21, 'M. Adhyatma, S.Pt., M.Si.', '', '', 'organizing', 'IT System Coordinator'),
(22, 'I Gede Wiryawan, S.Kom., M.Kom.', '', '', 'organizing', 'IT System Support'),
(23, 'Aryanti Candra Dewi, S.Pt., M.Sc.', '', '', 'organizing', 'Event Coordinator'),
(24, 'Niati Ningsih, S.Pt., M.Sc.', '', '', 'organizing', 'Event Support'),
(25, 'Satria Budi Kusuma, S.Pt., M.Sc.', '', '', 'organizing', 'Event Support'),
(26, 'Dyah Laksito Rukmi, S.Pt., M.Si.', '', '', 'organizing', 'Event Support'),
(27, 'Gian Zella Ekowulan W, S.ST.', '', '', 'organizing', 'Supporting Staff');

-- --------------------------------------------------------

--
-- Table structure for table `pembicara`
--

CREATE TABLE `pembicara` (
  `no` int(1) NOT NULL,
  `gambar_pembicara` varchar(255) NOT NULL,
  `nama_pembicara` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembicara`
--

INSERT INTO `pembicara` (`no`, `gambar_pembicara`, `nama_pembicara`, `keterangan`, `status`) VALUES
(8, 'Agung_Irawan.JPG', 'Agung Irawan', 'Speaker 1', 0),
(9, 'Galuh_Adi_Insani.jpeg', 'Galuh Adi Insani', 'Speaker 2', 0),
(10, 'Korean_Lecture.jpg', 'Korean Lecture', 'Speaker 3', 0),
(11, 'Suryo_Firmanto.jpeg', 'Suryo Firmanto', 'Speaker 4', 0),
(12, 'Suseno_Bayu_Wibowo.jpeg', 'Suseno Bayu Wibowo', 'Speaker 5', 0),
(13, 'Merry_Muspita.JPG', 'Merry Muspita', 'Speaker 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(3) NOT NULL,
  `gambar_slider` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar_slider`, `keterangan`) VALUES
(1, 'pVSiAfqs.png', 'Polije adalah tempat menuntut ilmu'),
(2, 'xwy3algf.jpg', 'virus itu berbahaya');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `gambar`, `keterangan`) VALUES
(1, 'A9C8jByx.jpg', 'pocari');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `no` int(2) NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`no`, `keterangan`, `link`) VALUES
(1, 'ssma', 'kuyha.com');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `no` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`no`, `gambar`, `keterangan`) VALUES
(1, 'iObxwRNB.PNG', 'hai'),
(3, 'L7wcmWM5.PNG', 'namaku rofiq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `komite`
--
ALTER TABLE `komite`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pembicara`
--
ALTER TABLE `pembicara`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komite`
--
ALTER TABLE `komite`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pembicara`
--
ALTER TABLE `pembicara`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
