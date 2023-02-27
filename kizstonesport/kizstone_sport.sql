-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 07:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kizstone_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_client`
--

CREATE TABLE `t_client` (
  `ip` varchar(100) NOT NULL,
  `id_product` text NOT NULL,
  `id_cart` varchar(100) NOT NULL,
  `quantity` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id` varchar(10) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `nama` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `id_product` text NOT NULL,
  `size` text NOT NULL,
  `quantity` text NOT NULL,
  `price` text NOT NULL,
  `status` set('pending','ready','processing','complete','cancel') NOT NULL,
  `tgl_exp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id`, `tgl_order`, `nama`, `no_tlp`, `email`, `alamat`, `id_product`, `size`, `quantity`, `price`, `status`, `tgl_exp`) VALUES
('1007ca975f', '2022-07-10 04:09:51', 'Pandu', '082314540155', 'pandudwiyan@gmail.com', 'jl pramuka no 7, rt 07/rw06 uwu dikit sebelah kanan', 'P04077e8e5,P0407a02b4,P0407f1da7', 'm,m,l', '1,2,1', '400000,600000,400000', 'complete', '2022-07-17 16:09:51'),
('1007cab90b', '2022-07-10 06:33:31', 'bambang', '082314540155', 'pandudwiyan@gmail.com', 'cisaga aja', 'P04074e372', 'm', '1', '400000', 'complete', '2022-07-17 18:33:31'),
('1207cd243a', '2022-07-12 02:35:22', 'pandu dwiyan', '082314540155', 'pandudwiyan@gmail.com', 'jl pramuka sebelah kanan dikit', 'P0407227a7', 'm', '1', '400000', 'complete', '2022-07-19 14:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` varchar(10) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `quantity` double NOT NULL,
  `current_price` double NOT NULL,
  `price` double NOT NULL,
  `thumbnail` text NOT NULL,
  `photo` text NOT NULL,
  `tgl_update` datetime NOT NULL,
  `status` set('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `tgl_input`, `nama`, `deskripsi`, `size`, `quantity`, `current_price`, `price`, `thumbnail`, `photo`, `tgl_update`, `status`) VALUES
('P0407227a7', '2022-07-04 10:32:50', 'Kizstone Sport Hijau', 'Bahan: Fancy Crepe Lux original 100% (hasil campuran wollycrepe dengan basic kimia celup maxmara italiano yang membuat bahan halus, lembut, nyaman, dan ringan digunakan).', 's,m,l,xl,', 49, 0, 400000, '62c308227af2c.jpg', '[\"62c308227aa6b.jpg\",\"62c308227abd7.jpg\",\"62c308227acf3.jpg\",\"62c308227adfe.jpg\"]', '2022-07-13 11:40:32', 'aktif'),
('P04074449f', '2022-07-04 10:29:08', 'Kiztone Sport Red', 'Bahan: Fancy Crepe Lux original 100% (hasil campuran wollycrepe dengan basic kimia celup maxmara italiano yang membuat bahan halus, lembut, nyaman, dan ringan digunakan).', 's,m,l,xl,', 50, 0, 300000, '62c307445b08b.jpg', '[\"62c307444c04c.jpg\",\"62c3074458b8e.jpg\",\"62c30744590df.jpg\",\"62c307445961a.jpg\",\"62c3074459b54.jpg\",\"62c307445a07d.jpg\",\"62c307445a5ac.jpg\",\"62c307445aad3.jpg\"]', '2022-07-04 10:29:08', 'aktif'),
('P04074e372', '2022-07-04 10:33:34', 'Kizstone Sport Pink', 'Bahan: Fancy Crepe Lux original 100% (hasil campuran wollycrepe dengan basic kimia celup maxmara italiano yang membuat bahan halus, lembut, nyaman, dan ringan digunakan).', 's,m,l,xl,', 49, 0, 400000, '62c3084e37a66.jpg', '[\"62c3084e375af.jpg\",\"62c3084e3772a.jpg\",\"62c3084e37841.jpg\",\"62c3084e37955.jpg\"]', '2022-07-13 11:27:00', 'aktif'),
('P04077e8e5', '2022-07-04 10:34:22', 'Kizstone Sport Kuning', 'Bahan: Fancy Crepe Lux original 100% (hasil campuran wollycrepe dengan basic kimia celup maxmara italiano yang membuat bahan halus, lembut, nyaman, dan ringan digunakan).', 's,m,l,xl,', 50, 0, 400000, '62c3087e8f319.jpg', '[\"62c3087e8eb5d.jpg\",\"62c3087e8eda8.jpg\",\"62c3087e8ef9d.jpg\",\"62c3087e8f1bc.jpg\"]', '2022-07-04 10:34:22', 'aktif'),
('P04078d0ec', '2022-07-04 10:30:21', 'Kizstone Sport Hitam ', 'Kizstone Sport Hitam ', 's,m,l,xl,', 50, 0, 400000, '62c3078d0f3ff.jpg', '[\"62c3078d0ef4d.jpg\",\"62c3078d0f0c4.jpg\",\"62c3078d0f1da.jpg\",\"62c3078d0f2de.jpg\"]', '2022-07-04 11:58:21', 'aktif'),
('P0407a02b4', '2022-07-04 10:34:56', 'Kizstone Sport Ungu', 'Kizstone Sport Ungu', 's,m,l,xl,', 50, 300000, 400000, '62c308a02bc42.jpg', '[\"62c308a02b77f.jpg\",\"62c308a02b8f3.jpg\",\"62c308a02ba33.jpg\",\"62c308a02bb3e.jpg\"]', '2022-07-04 10:41:33', 'aktif'),
('P0407cb7f8', '2022-07-04 10:31:23', 'Kizstone Sport Biru', 'Kizstone Sport Biru', 's,m,l', 50, 0, 400000, '62c307cb7ff7c.jpg', '[\"62c307cb7facf.jpg\",\"62c307cb7fc4d.jpg\",\"62c307cb7fd6b.jpg\",\"62c307cb7fe72.jpg\"]', '2022-07-04 11:57:59', 'aktif'),
('P0407f1da7', '2022-07-04 10:32:01', 'Kizstone Sport Biru', 'Bahan: Fancy Crepe Lux original 100% (hasil campuran wollycrepe dengan basic kimia celup maxmara italiano yang membuat bahan halus, lembut, nyaman, dan ringan digunakan).', 's,m,l,xl,', 50, 0, 400000, '62c307f1dae06.jpg', '[\"62c307f1daa63.jpg\",\"62c307f1dabe7.jpg\",\"62c307f1dacfa.jpg\"]', '2022-07-04 10:32:01', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` set('admin','member') NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_login` datetime NOT NULL,
  `tgl_exp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`username`, `nama`, `email`, `password`, `level`, `tgl_input`, `tgl_login`, `tgl_exp`) VALUES
('admin', 'kizstore sport', 'admin@kizstore-sport.com', 'kzadmin', 'admin', '2022-12-01 13:24:27', '2022-01-01 13:24:27', '2022-02-01 13:24:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_client`
--
ALTER TABLE `t_client`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
