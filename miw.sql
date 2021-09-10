-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 12:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(36) NOT NULL,
  `nama_pembimbing` varchar(36) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time(4) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_paket` int(6) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `deskripsi_paket` varchar(500) NOT NULL,
  `kategori_paket` varchar(36) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_paket`, `nama_paket`, `deskripsi_paket`, `kategori_paket`, `harga`, `gambar`) VALUES
(1, 'Paket Umroh Regular 9 hari', 'Keberangkatan tanggal 5 Maret 2021\r\nPesawat Lion Air direct Solo - Madinah\r\nHotel : Al Shohada *4 (Makkah) dan Al Mukhtara International  *4 (Madinah)\r\nHarga all-in sudah termasuk perlengkapan, airport handling dan asuransi.', 'Paket 1 Reguler', 21000000, '1610176801_03266977313daa03c2db.jpg'),
(2, 'Paket Umroh Awal Ramadhan', 'Keberangkatan tanggal 12 April 2021\r\nPesawat Garuda Indonesia direct Solo - Madinah\r\nHotel : Olayan Ajyad *4 (Makkah) dan Nozol Royal Inn *4 (Madinah)\r\nHarga all-in sudah termasuk perlengkapan, airport handling dan asuransi.', 'Paket 2 Promo ', 27900000, '1610176832_7255d11c338ea9b74015.jpg'),
(3, 'Paket Umrah 9H MILAD MIW', 'Keberangkatan tanggal 21 Maret 2021\r\nPesawat Lion Air direct Solo - Madinah\r\nHotel : Anjum *5 (Makkah) dan Nozol Royal Inn *4 (Madinah)\r\nHarga all-in sudah termasuk perlengkapan, airport handling dan asuransi.', 'Paket 2 Promo ', 25500000, '1610176854_6c70fc4d5ceb07415c55.jpg'),
(4, 'Paket Umroh Regular 9 hari', 'Keberangkatan tanggal 09 Januari 2021\r\nPesawat Lion Air direct Solo - Madinah\r\nHotel : Al Shohada *4 (Makkah) dan Al Mukhtara International  *4 (Madinah)\r\nHarga all-in sudah termasuk perlengkapan, airport handling dan asuransi.', 'Paket 1 Reguler', 21500000, '1610177008_4d140941aba681583396.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `paket_dipilih` varchar(36) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum Lunas',
  `bank` varchar(36) NOT NULL,
  `bukti_bayar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `paket_dipilih`, `status`, `bank`, `bukti_bayar`, `tanggal`, `total`) VALUES
(2, 2, 'Paket Umroh Regular 9 hari', 'Lunas', 'BNI', '1610268568_3b5d95947a63c4d6ea94.png', '2021-01-10', 21000000),
(3, 3, 'Paket Umroh Regular 9 hari', 'Lunas', 'BPD Jateng', '1610268688_278c04e26a887ead192b.jpg', '2021-01-10', 21000000),
(4, 4, 'Paket Umrah 9H MILAD MIW', 'Lunas', 'BCA', '1610268776_f7cb7dea7ebeb69b88dc.png', '2021-01-10', 25500000),
(12, 7, 'Paket Umrah 9H MILAD MIW', 'Lunas', 'BNI', '1610450971_30360fe54ab81d794828.png', '2021-01-12', 25500000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `kode_pelanggan` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `ktp` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `nomerhandphone` varchar(14) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `passport` varchar(36) NOT NULL,
  `suratnikah` varchar(36) NOT NULL,
  `pasfoto` varchar(36) NOT NULL,
  `verif` varchar(36) NOT NULL DEFAULT 'Belum diverifikasi',
  `jenis_kelamin` varchar(10) NOT NULL,
  `kota` varchar(36) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_pelanggan`, `nama`, `ktp`, `email`, `password`, `nomerhandphone`, `foto`, `alamat`, `foto_ktp`, `passport`, `suratnikah`, `pasfoto`, `verif`, `jenis_kelamin`, `kota`, `tanggal_lahir`) VALUES
(2, 80534916, 'Damar Pertiwi Sumarno', '3320146008680001', 'damarpertiwi21@gmail.com', 'damarpertiwi21', '081225213098', '1610268190_688e544c27b1f093be0d.jpg', 'Jl. Kates, Pulisen, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57316', '1610268587_a197d6b19ad7e8b4b4ae.jpg', '1610268587_8b2a3a949df4227587b2.jpg', '1610268587_ed833439d851b98d95ca.jpg', '1610268587_571733ec19f79d862274.jpg', 'Diverifikasi', 'perempuan', 'Boyolali', '1968-08-06'),
(3, 97835614, 'Tidar Nugroho Sumarno', '3320109125580001 ', 'tidarnugroho21@gmail.com', 'tidarnugroho21', '081225612980', '1610268270_db4ee7ff19f81da123c0.jpg', 'Jl. Pandanaran No.275, Sidoharjo, kab, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57313', '1610268714_7f1669d46a99757af4ac.png', '1610268714_836a9f49568d5fd5ba86.jpg', '1610268714_7c0739e08a19369b3c24.jpg', '1610268714_05f1f49fbf50171afdeb.jpg', 'Diverifikasi', 'laki-laki', 'Boyolali', '1958-12-01'),
(4, 48217693, 'Warlin Saban Sarwi', '33201120955800003', 'warlinsaban21@gmail.com', 'warlinsaban21', '081229876112', '1610268394_d533115d3cff2d9e4160.jpg', 'Jl. Raya Bandungrejo 20, Kabupaten Demak, Jawa Tengah, 59567.', '1610268791_0e3eed5906443d8465a1.png', '1610268791_90fc18bd395b4a36ab2c.jpg', '1610268791_fc2a4d1df8c897b0c64b.jpg', '1610268791_a5594685f5d45e9ddf4a.jpg', 'diupload', 'laki-laki', 'Demak', '1957-09-12'),
(5, 57423168, 'Siti Mahmudah', '3320198005980009', 'sitimahmudah21@gmail.com', 'sitimahmudah21', '081226782112', '1610268485_6ef3423d67516da877d2.jpg', 'Jl. Gatot Subroto No.104C, Wanasari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah', '1610437493_e196eba2ec8d6f6e945e.png', '1610437493_0be3524a7253806ec205.jpg', '1610437493_2e8ccd853ce9b040c3bc.jpg', '1610437493_a9969563c051f5ad15c2.jpg', 'diupload', 'perempuan', 'Cilacap', '1962-08-08'),
(7, 28645093, 'Ahmad Subhan', '3320092195580003', 'ahmadsubhan21@gmail.com', 'ahmadsubhan21', '081225671889', '1610450949_8a3bf25afa656d3f8ab0.jpg', 'Jl. Sultan Fatah No.7, Bogorame, Mangunjiwan, Kec. Demak, Kabupaten Demak, Jawa Tengah 59515', '', '', '', '', 'Belum diverifikasi', 'laki-laki', 'Demak', '1988-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_paket` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
