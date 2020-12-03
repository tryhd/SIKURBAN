-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:27 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gardu`
--

CREATE TABLE `data_gardu` (
  `id_gardu` varchar(10) NOT NULL,
  `nama_gardu` varchar(20) NOT NULL,
  `uraian_nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `no_gardu` varchar(30) NOT NULL,
  `id_rayon` varchar(30) NOT NULL,
  `id_penyulang` varchar(30) NOT NULL,
  `daya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_gardu`
--

INSERT INTO `data_gardu` (`id_gardu`, `nama_gardu`, `uraian_nama`, `alamat`, `id_jenis`, `no_gardu`, `id_rayon`, `id_penyulang`, `daya`) VALUES
('00003', 'asdf', 'tinggi', 'cimahi', 'j003', '004', 'w002', 'P001', 20),
('00004', 'wewew', 'Jambuhala', 'cimahi', 'j001', '1234', 'w001', 'P001', 50),
('001', 'JBH', 'Jambuhala', 'Desa Celak, Kec Sindangkerta', 'j001', '256', 'w003', 'P001', 20),
('002', 'asd', 'atas tinggi', 'cimahi', 'j002', '1234', 'w001', 'P001', 50),
('0044', 'uadsDgf', 'Jambuhala', 'QEQWR', 'j005', 'QWEW', 'w004', 'cg', 200),
('65', 'uadsDgf', 'tinggi', 'cimahi', 'j001', '6565', 'w003', 'cg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `data_trafo`
--

CREATE TABLE `data_trafo` (
  `id_trafo` varchar(10) NOT NULL,
  `id_gardu` varchar(10) NOT NULL,
  `id_merek` varchar(10) NOT NULL,
  `no_seri` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_trafo`
--

INSERT INTO `data_trafo` (`id_trafo`, `id_gardu`, `id_merek`, `no_seri`, `tahun`) VALUES
('09', '001', 'm005', '3121', '2003'),
('12', '002', 'm012', 'da', '2003'),
('123', '001', 'm017', '3121', '2005'),
('1234', '001', 'm017', 'zcxz', '2003'),
('34', '001', 'm015', 'zcxz', '2005'),
('56', '001', 'M010', '676', '2003');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
('j001', 'Cantol'),
('j002', 'Portal'),
('j003', 'Tembok'),
('j004', 'Garpor'),
('j005', 'Besi');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` varchar(10) NOT NULL,
  `nama_merek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`) VALUES
('M001', 'B&D'),
('M002', 'ASATA'),
('m003', 'FRANCE'),
('m004', 'DMS'),
('m005', 'SINTRA'),
('m006', 'STARLITE'),
('m007', 'TOSHIBA'),
('m008', 'TRAFINDO'),
('m009', 'UNELEC'),
('M010', 'UNINDO'),
('m011', 'HICO'),
('m012', 'MORAWA'),
('m013', 'VOLTRA'),
('m014', 'SENTRADO'),
('m015', 'UNKNOWN'),
('m016', 'SCHNEIDER'),
('m017', 'LUCKY'),
('m018', 'PAUWELS');

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id_pengukuran` varchar(10) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(11) NOT NULL,
  `r7` int(11) NOT NULL,
  `r8` int(11) NOT NULL,
  `r9` int(11) NOT NULL,
  `r10` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `s7` int(11) NOT NULL,
  `s8` int(11) NOT NULL,
  `s9` int(11) NOT NULL,
  `s10` int(11) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `t4` int(11) NOT NULL,
  `t5` int(11) NOT NULL,
  `t6` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  `n7` int(11) NOT NULL,
  `n8` int(11) NOT NULL,
  `n9` int(11) NOT NULL,
  `n10` int(11) NOT NULL,
  `tegangan_r` int(11) NOT NULL,
  `tegangan_s` int(11) NOT NULL,
  `tegangan_t` int(11) NOT NULL,
  `tegangan_n` int(11) NOT NULL,
  `tgl_pengukuran` date NOT NULL,
  `id_gardu` varchar(10) NOT NULL,
  `beban_terukur` int(10) NOT NULL,
  `daya` int(10) NOT NULL,
  `beban_trafo` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_rayon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengukuran`
--

INSERT INTO `pengukuran` (`id_pengukuran`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `tegangan_r`, `tegangan_s`, `tegangan_t`, `tegangan_n`, `tgl_pengukuran`, `id_gardu`, `beban_terukur`, `daya`, `beban_trafo`, `nama`, `id_rayon`) VALUES
('1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, '2018-10-11', '00004', 8, 50, '0.16', 'udin', 'w001'),
('2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, '2018-10-12', '00003', 30, 20, '1.5', 'dodo', 'w002');

-- --------------------------------------------------------

--
-- Table structure for table `penyulang`
--

CREATE TABLE `penyulang` (
  `id_penyulang` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nama_penyulang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyulang`
--

INSERT INTO `penyulang` (`id_penyulang`, `status`, `nama_penyulang`) VALUES
('123', 'PLN', 'cln'),
('b', 'PLN', 'jjhvkjb'),
('cg', 'Swasta', 'gndh'),
('P001', 'PLN', 'GNH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_rayon` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `level`, `id_rayon`, `username`, `password`) VALUES
('003', 'cikot', 'Rayon', 'w002', 'cikot', '21232f297a57a5a743894a0e4a801fc3'),
('006', 'dodo', 'Rayon', 'w003', 'cililin', '21232f297a57a5a743894a0e4a801fc3'),
('12341', 'Yayu', 'Admin', 'w007', 'admin yayu', '21232f297a57a5a743894a0e4a801fc3'),
('23', 'Sela', 'Teknisi', 'w001', 'Sela', '21232f297a57a5a743894a0e4a801fc3'),
('321', 'udin', 'Rayon', 'w001', 'rayon', '21232f297a57a5a743894a0e4a801fc3'),
('78787', 'Mamat', 'Petugas', 'w003', 'petugas', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_rayon` varchar(10) NOT NULL,
  `nama_wilayah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_rayon`, `nama_wilayah`) VALUES
('w001', 'Cimahi Kota'),
('w002', 'Cimahi Selatan'),
('w003', 'Cililin'),
('w004', 'Lembang'),
('w005', 'Padalarang'),
('w006', 'Rajamandala'),
('w007', 'Prima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gardu`
--
ALTER TABLE `data_gardu`
  ADD PRIMARY KEY (`id_gardu`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_penyulang` (`id_penyulang`),
  ADD KEY `id_rayon` (`id_rayon`);

--
-- Indexes for table `data_trafo`
--
ALTER TABLE `data_trafo`
  ADD PRIMARY KEY (`id_trafo`),
  ADD KEY `data_trafo_ibfk_1` (`id_merek`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id_pengukuran`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indexes for table `penyulang`
--
ALTER TABLE `penyulang`
  ADD PRIMARY KEY (`id_penyulang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_rayon`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_gardu`
--
ALTER TABLE `data_gardu`
  ADD CONSTRAINT `data_gardu_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_2` FOREIGN KEY (`id_penyulang`) REFERENCES `penyulang` (`id_penyulang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_3` FOREIGN KEY (`id_rayon`) REFERENCES `wilayah` (`id_rayon`);

--
-- Constraints for table `data_trafo`
--
ALTER TABLE `data_trafo`
  ADD CONSTRAINT `data_trafo_ibfk_1` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id_merek`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `data_trafo_ibfk_2` FOREIGN KEY (`id_gardu`) REFERENCES `data_gardu` (`id_gardu`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD CONSTRAINT `pengukuran_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `data_gardu` (`id_gardu`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_rayon`) REFERENCES `wilayah` (`id_rayon`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
