-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 03:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocean`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(2, 'sam', 'sul'),
(3, 'RianAnanda', 'rianwow4'),
(4, 'Emmanuel', 'emmanuel1'),
(5, 'bach', 'tiar');

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `nomer` int(11) NOT NULL,
  `umum` varchar(1000) NOT NULL,
  `ilmiah` varchar(1000) NOT NULL,
  `kedalaman` int(11) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`nomer`, `umum`, `ilmiah`, `kedalaman`, `keterangan`) VALUES
(1, 'Nila', 'Oreochromis niloticus', 3, 'Ikan nila adalah sejenis ikan konsumsi air tawar. Ikan ini diintroduksi dari Afrika, tepatnya Afrika bagian timur, pada tahun 1969, dan kini menjadi ikan peliharaan yang populer di kolam-kolam air tawar di Indonesia sekaligus hama di setiap sungai dan danau Indonesia.'),
(2, 'Lele', 'Clarias batrachus', 1, 'Lele atau ikan keli, adalah sejenis ikan yang hidup di air tawar. Lele mudah dikenali karena tubuhnya yang licin, agak pipih memanjang, serta memiliki \"kumis\" yang panjang, yang mencuat dari sekitar bagian mulutnya.'),
(3, 'Tongkol', 'Euthynnus affinis', 40, 'Ikan tongkol berwarna agak gelap dan langsing, panjang ikan tongkol rata-rata sekitar 60 cm. Bagian punggung tongkol berwarna biru gelap metalik dengan pola garis-garis. Tongkol lebih banyak dikonsumsi masyarakat Jawa dan Sumatera.'),
(4, 'Tuna', 'Thunnini', 100, ' Tuna merupakan ikan laut pelagik yang termasuk bangsa Thunnini, terdiri dari beberapa spesies dari famili skombride, terutama genus Thunnus. Ikan ini adalah perenang andal. Tidak seperti kebanyakan ikan yang memiliki daging berwarna putih, daging tuna berwarna merah muda sampai merah tua.'),
(5, 'Teri', 'Engraulidae', 35, 'Ikan teri adalah sekelompok ikan laut kecil anggota suku Engraulidae. Nama ini mencakup berbagai ikan dengan warna tubuh perak kehijauan atau kebiruan. Walaupun anggota Engraulidae ada yang memiliki panjang maksimum 23 cm, nama ikan teri biasanya diberikan bagi ikan dengan panjang maksimum 5 cm.'),
(6, 'Makarel', 'Scomber scombrus', 1000, 'Makerel atau makarel adalah sebutan bagi sekelompok ikan laut yang terdiri dari beberapa marga anggota famili Scombridae. Dalam peristilahan bahasa Inggris, sebutan mackerel juga mencakup kelompok ikan tenggiri dan kembung.'),
(7, 'Tenggiri', 'Scomberomorini', 70, 'Scomberomorini, umumnya disebut ikan tenggiri, adalah suku ikan bertulang pada keluarga makerel, Scombridae – yang masih memiliki kaitan dengan suku makerel, tuna dan bonito, ditambah Gasterochisma melampus. Suku ini terdiri dari 21 spesies dalam tiga genera: Acanthocybium A. solandri Grammatorcynus G. bicarinatus'),
(8, 'Wader', 'Wuader', 1, 'Wader bintik-dua adalah sejenis ikan kecil anggota suku Cyprinidae anak-suku Cyprininae. Ikan ini menyebar di Indonesia bagian barat, Indocina, dan Filipina. Nama-nama daerahnya di antaranya adalah beunteur, wader cakul atau wader pada umumnya, puyan, tanah atau sepadak dan lain-lain.'),
(9, 'Hiu', 'Selachimorpha', 30, 'Ikan Hiu adalah sekelompok ikan dengan kerangka tulang rawan yang lengkap dan tubuh yang ramping. Mereka bernapas dengan menggunakan lima liang insang di samping, atau dimulai sedikit di belakang, kepalanya.'),
(10, 'Belanak', 'Moolgarda seheli', 120, 'Belanak adalah sejenis ikan laut tropis dan subtropis yang bentuknya hampir menyerupai bandeng. Dalam bahasa Inggris dikenal sebagai blue-spot mullet atau blue-tail mullet.'),
(11, 'Barakuda', 'Sphyraena', 110, 'Ikan barakuda adalah ikan dalam kelas Actinopterygii yang dikenal berwujud menyeramkan dan berukuran tubuh besar, yaitu sampai panjang enam kaki dan lebar satu kaki.');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `nomer` int(250) NOT NULL,
  `umum` varchar(255) NOT NULL,
  `ilmiah` varchar(255) NOT NULL,
  `kedalaman` int(250) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`nomer`, `umum`, `ilmiah`, `kedalaman`, `keterangan`) VALUES
(1, 'hiu', 'as', 30, 'Predator'),
(4, 'Wader', 'Wuader', 3, 'Ikan kecil biasa ada di kali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `nomer` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
