-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 11:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(5) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `toko` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `detail` text NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `gambar`, `nama`, `toko`, `slug`, `harga`, `created_at`, `updated_at`, `detail`, `stok`) VALUES
(13, '1610697322_e8414fba7e5c975bc0a4.jpg', 'Bolu Gulung', 'Jeha Bakery', 'bolu-gulung', 25000, '2021-01-14 08:26:05', '2021-01-15 01:55:22', 'Bolu gulung dengan rasa original vanilla kesukaan semua orang', 10),
(14, '1610697439_3b02169fd5340645e3a1.jpg', 'Brownies Panggang', 'Jeha Bakery', 'brownies-panggang', 23000, '2021-01-14 09:48:21', '2021-01-15 01:57:19', 'Brownies dengan rasa coklat\r\nUkuran 20x20\r\nTopping Keju dan Almond', 15),
(17, '1610697616_2e530c077cbbf0cd3ab9.jpg', 'Kuping Gajah', 'Oey Bakery', 'kuping-gajah', 14000, '2021-01-14 10:00:04', '2021-01-15 02:00:16', 'Kue Kuping Gajah rasa original\r\n1 bungkus 150gr', 210),
(19, '1610697724_0abe9d92d5f4dd00c546.jpg', 'Nastar', 'Tiga Putri Minang', 'nastar', 40000, '2021-01-15 02:02:04', '2021-01-15 02:02:04', 'Kue Nastar dengan selai nanas asli.\r\n1 pack 46 pcs kue', 5),
(20, '1610697814_b7101f25c0f002a2d3e9.jpg', 'Rainbow Cake', 'Tiga Putri Minang', 'rainbow-cake', 50000, '2021-01-15 02:03:34', '2021-01-15 02:03:34', 'Rainbow Cake dengan 5 lapisan warna\r\nTopping Mesis Warna warni\r\nBerat 90gr', 3),
(21, '1610698162_81d548a03e96cafe07f6.jpg', 'Kue Ape', 'Jeha Bakery', 'kue-ape', 1000, '2021-01-15 02:09:22', '2021-01-15 02:09:22', 'Kue tradisional dengan topping bisa mesis dan susu', 100),
(22, '1610698245_34933c9be0743d49c432.jpg', 'Bolu Kukus', 'Oey Bakery', 'bolu-kukus', 1500, '2021-01-15 02:10:45', '2021-01-15 02:10:45', 'Kue Kukus warna warni\r\n1 pcs 25gr', 210),
(23, '1610698336_71095e415c07145ff1a8.jpg', 'Karamel', 'Tiga Putri Minang', 'karamel', 25000, '2021-01-15 02:12:16', '2021-01-15 02:12:16', 'Kue karamel rasa original\r\n1 pack 250gr', 15),
(24, '1610698395_e82647010f8f857868b6.jpg', 'BrowniesKukus', 'Tiga Putri Minang', 'brownieskukus', 35000, '2021-01-15 02:13:15', '2021-01-15 02:13:15', 'Kue Brownies rasa coklat\r\n1 pack 250gr', 12),
(25, '1610698442_7c2125b24bb4de12b83e.jpg', 'Kue Cucur', 'Jeha Bakery', 'kue-cucur', 1000, '2021-01-15 02:14:02', '2021-01-15 02:14:02', 'Kue cucur rasa tradisional Indonesia', 25),
(26, '1610698762_50134ee9f171a3e8234b.jpg', 'Bika Ambin', 'Tiga Putri Minang', 'bika-ambin', 100000, '2021-01-15 02:19:22', '2021-01-15 02:19:22', 'Kue Bika Ambon tradisional Indonesia\r\nRasa : original, pandan dan keju\r\n1 pack 500gr', 25),
(27, 'default.jpg', 'kue sus', 'toko sus', 'kue-sus', 12000, '2021-01-15 03:17:15', '2021-01-15 03:17:15', '-', 7);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `no_keranjang` int(5) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `ongkir` varchar(200) NOT NULL,
  `sub_total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
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
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-01-07-153805', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1610543470, 1),
(2, '2021-01-07-155107', 'App\\Database\\Migrations\\User', 'default', 'App', 1610543470, 1),
(3, '2021-01-07-155137', 'App\\Database\\Migrations\\Keranjang', 'default', 'App', 1610543470, 1),
(4, '2021-01-07-155212', 'App\\Database\\Migrations\\Pesanan', 'default', 'App', 1610543471, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_id` int(5) UNSIGNED NOT NULL,
  `no_keranjang` int(10) UNSIGNED NOT NULL,
  `bank` varchar(255) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `kata_sandi` varchar(250) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `kata_sandi`, `nama`, `no_telp`, `tanggal_lahir`, `alamat`, `kode_pos`, `level`) VALUES
(9, 'anisaraden@gmail.com', 'anisa', '$2y$10$I1yrXTKCbdmnAcrA7QWoZeQkaUTKVlg/sU1CZIUl8MiiQaFNxmyCG', 'anisa raden', '082388268446', '0000-00-00', 'hfdsegfjs', '35143', 'Admin'),
(10, 'istiqomahatika.ai@gmail.com', 'admin123', '$2y$10$zqx1iKWdKYRvUoLduBkii.sw1V1zMrQFwQjxId9SCrbuzfhTLJQYy', 'admin', '089631183217', '0000-00-00', 'jalan purnawirawan 7', '35152', 'Admin'),
(11, 'istiqomahatika.ai@gmail.com', 'user123', '$2y$10$5B8ynIY3Ucq37uVIqucQTOX4Pc4B2oLrcDgg6WtuMFuqHAbhoPvH.', 'user', '089631183217', '0000-00-00', 'jalan purnawirawan 7', '35152', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`no_keranjang`),
  ADD KEY `keranjang_id_barang_foreign` (`id_barang`),
  ADD KEY `keranjang_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `pesanan_no_keranjang_foreign` (`no_keranjang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `no_keranjang` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `no_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_no_keranjang_foreign` FOREIGN KEY (`no_keranjang`) REFERENCES `keranjang` (`no_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
