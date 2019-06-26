-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 06:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lnf`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login` (IN `u_name` VARCHAR(15), IN `u_pass` VARCHAR(32))  BEGIN
IF EXISTS (SELECT * FROM users WHERE(u_name = id_user) AND (u_pass = password_user)) THEN
	SELECT 0, "Login Berhasil";
	ELSE
	SELECT -1, "Username atau password anda tidak cocok";
	END IF;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'yazeeen', 'yazen', 'qq'),
(2, 'apreeel', 'aprel', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(3, 'pinaaa', 'pina', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(4, 'aqu', 'q', '111');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` varchar(10) NOT NULL,
  `ID_User` varchar(15) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `Tempat` varchar(50) NOT NULL,
  `Kategori` varchar(20) NOT NULL,
  `Keterangan` text NOT NULL,
  `Foto` varchar(40) NOT NULL,
  `Security_Ques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `ID_User`, `Nama_Barang`, `Tanggal`, `Tempat`, `Kategori`, `Keterangan`, `Foto`, `Security_Ques`) VALUES
('B001', 'aprilkh', 'Charger Laptop', '2019-01-22 00:00:00', 'Plaza Supeno TC', 'Kehilangan', 'Berkabel hitam, panjangnya kurang lebih 70cm.', 'Charger Laptop.jpg', 'Apa merek dari charger tersebut?'),
('B003', 'finafy', 'Tumbler ', '2019-01-20 00:00:00', 'Kantin Tek Geomatika', 'Kehilangan', 'Bermerek StarBucks , bagian luar berbahan plastik ,  bagian dalam berbahan aluminium.', 'Tumblr Starbucks.jpg', 'Berapa ukuran botol minuman tersebut?'),
('B005', 'yasintar', 'Earphone', '2019-02-20 18:27:00', 'Bengkel Mesin', 'Kehilangan', 'Berwarna hitam dengan paduan biru, panjang kabelnya kurang lebih 40cm, ada bagian busa yang tergores di salah satu kuping.', 'Earphone.jpg', 'Disebelah mana bagian busa yang tergores itu?'),
('B014', 'finafy', 'Samsung Note 5', '2019-02-09 19:11:00', 'Parkiran Tek Sipil', 'Kehilangan', 'Berwarna silver, ada hardcasenya, ada goresan dibagian bawah', 'Samsung Note 5.jpg', 'Goresan yang dibagian bawah terletak disebelah mana?'),
('B020', 'sariw_', 'Kacamata', '2019-04-10 12:11:00', 'Masjid Manarul Ilmi', 'Ditemukan', 'Berwarna hitam berpadu dengan coklat. Gagangnya sedikit lebar.', 'Kacamata.jpg', 'Apa merek dari kacamata tersebut?'),
('B022', 'opiyw', 'Jam Tangan', '2019-05-17 19:59:00', 'Gd Robotika', 'Ditemukan', 'Berwana silver, layarnya warna hitam, terdapat goresan kecil di dekat layar.', 'Jam Tangan.jpg', 'Apa merek dari jam tangan tersebut?'),
('B024', 'hitori124', 'Botol Minum Luc', '2019-05-16 12:22:00', 'Gd Riset lt 7', 'Ditemukan', 'Berwarna kuning, ada tali kecil, berbahan aluminium.', 'Botol Minum Lucu.jpg', 'Berapa ukuran botol minuman tersebut?'),
('B028', 'finafy', 'Kotak Kacamata', '2018-05-17 11:10:00', 'Bundaran Geo', 'Kehilangan', 'Bermerek rayban, case nya berwana hitam , dalamnya berwarna putih. Ada kain pembersih kacamatanya juga dan ada inisial di kain pembersih tersebut. ', 'Kotak Kacamata.jpg', 'Apa inisial yang terdapat di kain pembersih kacamata yang di dalam kotak?'),
('B030', 'aprilkh', 'Helm merah', '2019-05-15 11:59:00', 'Parkiran Siskal', 'Kehilangan', 'Berwarna merah, kacanya berwarna hitam, terdapat goresan sedikit, busa dibagian dalam ada yang robek', 'Helm merah.jpg', 'Dibagian sebelah manakah kain busa yang robek?'),
('B034', 'nmmutia', 'Kalkulator', '2019-05-15 07:00:00', 'Depan R Hima Tekpal', 'Ditemukan', 'Bermerek casio, tidak ada tutupnya, susah dimatiin, ada inisial dibelakang kalkulator.', 'Kalkulator.jpg', 'Apa inisial yang terdapat di belakang kalkulator?'),
('B036', 'nmmutia', '1 set kacamata', '2019-05-19 13:03:00', 'Parkiran Motor TC', 'Ditemukan', 'Terdapat kotak kacamata yang berwarna merah keperakann, lalu ada kacamata yang berwarna merah maroon dengan frame yang kecil, lalu ada kain pembersih kacamatanya juga.', '1 set kacamata.jpg', 'Apa merek dari satu set kacamata tersebut?'),
('B038', 'opiyw', 'Tas Laptop', '2019-05-04 16:11:00', 'Kantin Tek Material', 'Ditemukan', 'Tas laptopnya berwarna hitam, berbahan kain yang tahan air. Di dalamnya terdapat mouse mini.', 'Tas Laptop HItam.jpg', 'Apa merek dari tas tersebut?'),
('B040', 'sariw_', 'Glasses Box', '2019-05-14 12:00:00', 'Kantin Tek Kimia', 'Kehilangan', 'Berwarna ungu, bahannya plastik, di dalamnya ada pembersih kacamata.', 'Glasses Box.jpg', 'Apa merek dari kotak kacamata  tersebut?'),
('B041', 'yasintar', 'Charger Laptop', '2019-05-01 09:20:00', 'Teknik Material', 'Kehilangan', 'Berkabel hitam, panjangnya kurang lebih 70cm.', 'Charger Laptop.jpg', 'Apa merek dari charger tersebut?'),
('B042', 'opiyw', 'Mouse Biru', '2019-05-08 09:59:00', 'Kantin Arsitektur', 'Ditemukan', 'Merupakan mouse portable yang berwarna biru dengan ada pattern nya. Lebarnya kurang lebih 6cm', 'Mouse Biru.jpg', 'Apakah ada batre di dalam mouse tersebut?'),
('B043', 'finafy', 'Laptop Case', '2019-05-12 09:30:00', 'Bundaran ITS', 'Ditemukan', 'Berwarna putih, ada corak  hitamnya, reseletingnya berwarna abu-abu.', 'Laptop Case.jpg', 'Apa merek dari laptop case tersebut?'),
('B044', 'yasintar', 'Powerbank Pink', '2019-05-11 10:07:00', 'Parkiran Sistem Informasi', 'Kehilangan', 'Berwarna pink shock, merek XiaoMi, berkapasitas 10000mAh.', 'Powerbank Pink.jpg', 'Apakah ada lecet dibagian luar power bank tersebut?'),
('B045', 'nmmutia', 'Kacamataku', '2019-05-19 07:40:00', 'Tek Lingkungan', 'Kehilangan', 'Berwarna silver dengan corak hitam-hitam, berbahan alumi.nium', 'Kacamata.jpg', 'Apa merek dari kacamata tersebut?'),
('B046', 'yasintar', 'MiFi Putih', '2019-05-08 09:12:00', 'Depan Kantin TC', 'Ditemukan', 'Berwarna putih, ukurannya se-genggang tangan, ada lecet sedikit di bagian luar', 'MiFi Putih.jpg', 'Dibagian sebelah mifi manakah yang lecet?'),
('B047', 'sariw_', 'Jam Tangan', '2019-05-17 19:59:00', 'Masjid Manarul', 'Ditemukan', 'Berwana silver, layarnya warna hitam, terdapat goresan kecil di dekat layar.', 'Jam Tangan.jpg', 'Apa merek dari jam tangan tersebut?'),
('B048', 'aprilkh', 'Senter Hitam', '2019-05-17 20:19:00', 'Parkiran Tek Elektro', 'Ditemukan', 'Berwarna hitam, dengan daya 2000W, merek POLICE. Ada inisial yang tertulis di bagian bawah.', 'Senter Hitam.jpg', 'Apa inisial yang terdapat di bawah senter?'),
('B049', 'yasintar', 'Headset Pink', '2019-05-12 12:12:00', 'Selasar Tek Fisika', 'Kehilangan', 'Berwarna pink, bermerek asus, ada bagian headset yang hampir terputus.', 'Headset Pink.jpg', 'Dibagian sebelah headset manakan yang hampir putus?'),
('B050', 'finafy', 'Jam Swatch', '2019-05-12 08:22:00', 'Perumdos Blok U gg 4', 'Kehilangan', 'Merek Swatch, berbahan aluminium, diameter kurang lebih 4cm dan jamnya sudah habis batre,', 'Jam Swatch.jpg', 'Apakah ada bagian jam tangan yang berkarat?'),
('B051', 'aprilkh', 'Charger Laptop', '2019-05-01 10:00:00', 'Bengkel mesin', 'Ditemukan', 'Berkabel hitam, panjangnya kurang lebih 70cm.', 'Charger Laptop.jpg', 'Apa merek dari charger tersebut?'),
('B052', 'opiyw', 'Tas Laptop Pink', '2019-05-11 14:55:00', 'Depan Perpus Pusat', 'Ditemukan', 'Berwarna pink, tas untuk ukuran laptop 14inchi, ada banyak reseleting yang terdapat didalam tas.', 'Tas Laptop Pink.jpg', 'Apa merek dari tas laptop tersebut?'),
('B054', 'sariw_', 'Helm Hitam', '2019-05-11 12:44:00', 'Perumdos Blok J gg 1', 'Ditemukan', 'Berwarna hitam, ada banyak sticker di bagian belakang helm.', 'Helm Hitam.jpg', 'Ada brp banyak sticker yang tempel di helm tersebut?'),
('B056', 'hitori124', '2 Payung Unik', '2019-05-15 11:22:00', 'Bundaran ITS', 'Ditemukan', 'Ada 2 payung, 1 nya berukuran besar dan berwarna merah dan 1 nya lagi berukuran kecil dan berwarna ungu. Gagangnya berbahan kayu. Ada corak di kain payungnya. Ada tulisan inisial di pegangan payungnya.', '2 Payung Unik.jpg', 'Apa tulisan inisial yang terdapat pada pegangan payung tersebut?'),
('B058', 'yasintar', 'Mug Rubik', '2019-04-17 00:00:00', 'Kantin Perpus Pusat', 'Kehilangan', 'Gelas Mug berbentuk  seperti rubik, berbahan keramik. Dibawah mug ada tulisan inisial.', 'Mug Rubik.jpg', 'Apa inisial yang terdapat di bawah mug?'),
('B060', 'nmmutia', 'Sendok & Garpu', '2019-05-18 14:12:00', 'UPT Bahasa R.11', 'Kehilangan', 'Sepasang alat makan yang berupa aluminium dimana diujung gagangnya ada mainan es krim.', 'Sendok & Garpu.jpg', 'Terbuat dari negara manakah alat makan ini?'),
('B062', 'aprilkh', 'Gantungan Lego', '2019-05-21 11:29:00', 'Perumdos Blok T gg 2', 'Ditemukan', 'Kondisinya masih baru, gantungannya berbahan aluminium biasa, mainan gantungannya yaitu stormtrooper star wars warna putih. Di belakang badan mainan nya ada tulisan angka.', 'Gantungan Lego.jpg', 'Apa tulisan angka yang terdapat di belakang badan mainan gantungan tersebut?'),
('B070', 'hitori124', 'Laptop Case', '2019-03-12 09:30:00', 'Arsitektur', 'Ditemukan', 'Berwarna putih, ada corak  hitamnya, reseletingnya berwarna abu-abu.', 'Laptop Case.jpg', 'Apa merek dari laptop case tersebut?'),
('B071', 'opiyw', 'Kacamataku', '2018-05-19 09:00:00', 'Parkiran BAAK', 'Kehilangan', 'Berwarna silver dengan corak hitam-hitam, berbahan alumi.nium', 'Kacamata.jpg', 'Apa merek dari kacamata tersebut?'),
('B073', 'finafy', 'Jam Tangan', '2019-04-17 12:59:00', 'Taman Siskal', 'Ditemukan', 'Berwana silver, layarnya warna hitam, terdapat goresan kecil di dekat layar.', 'Jam Tangan.jpg', 'Apa merek dari jam tangan tersebut?'),
('B074', 'aprilkh', 'Headset Pink', '2019-03-12 12:14:00', 'Gd Robotika', 'Kehilangan', 'Berwarna pink, bermerek asus, ada bagian headset yang hampir terputus.', 'Headset Pink.jpg', 'Dibagian sebelah headset manakan yang hampir putus?');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID_Message` varchar(10) NOT NULL,
  `Judul_Message` varchar(25) NOT NULL,
  `Isi_Message` text NOT NULL,
  `ID_Sender` varchar(15) NOT NULL,
  `ID_Receiver` varchar(15) NOT NULL,
  `Tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` varchar(10) NOT NULL,
  `ID_Barang` varchar(20) NOT NULL,
  `ID_Pemilik` varchar(20) NOT NULL,
  `ID_Penemu` varchar(20) NOT NULL,
  `Tanggal_Selesai` datetime NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `ID_Barang`, `ID_Pemilik`, `ID_Penemu`, `Tanggal_Selesai`, `Status`, `Kategori`) VALUES
('TR001', 'B001', 'aprilkh', '', '2017-05-21 15:50:08', 'NOT CLEAR', 'Kehilangan'),
('TR002', 'B005', 'yasintar', '', '2019-04-01 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR003', 'B003', 'finafy', 'fikfakboi', '2017-05-21 15:50:24', 'CLEAR', 'Kehilangan'),
('TR004', 'B010', 'nadaw', 'nmmutia', '2019-04-02 21:30:00', 'CLEAR', 'Ditemukan'),
('TR005', 'B012', '', 'hitori124', '2019-04-01 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR006', 'B014', 'finafy', 'nilaaw', '2019-04-21 20:30:00', 'CLEAR', 'Kehilangan'),
('TR007', 'B016', 'yasintar', '', '2019-02-20 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR008', 'B018', 'aprilkh', '', '2019-04-01 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR009', 'B020', '', 'sariw_', '2019-04-11 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR010', 'B022', '', 'opiyw', '2019-05-18 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR011', 'B024', 'oyosh', 'hitori124', '2019-05-20 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR012', 'B026', 'fikfakboi', 'opiyw', '2019-05-20 21:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR013', 'B028', 'finafy', 'nopale', '2019-05-20 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR014', 'B030', 'aprilkh', '', '2019-05-16 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR015', 'B032', 'sariw', 'yasintar', '2019-05-16 20:30:00', 'CLEAR', 'Kehilangan'),
('TR017', 'B034', '', 'nmmutia', '2019-05-16 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR018', 'B036', 'nahhhdia', 'nmmutia', '2019-05-20 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR019', 'B038', '', 'opiyw', '2019-05-16 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR020', 'B040', 'sariw_', '', '2019-05-16 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR021', 'B042', 'rizall', 'opiyw', '2019-05-16 20:30:00', 'CLEAR', 'Ditemukan'),
('TR022', 'B044', 'yasintar', 'aprilkh', '2019-05-16 20:30:00', 'CLEAR', 'Kehilangan'),
('TR023', 'B046', '', 'yasintar', '2019-05-16 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR024', 'B048', '', 'aprilkh', '2019-05-18 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR025', 'B050', 'finafy', 'aprilkh', '2019-05-18 20:30:00', 'CLEAR', 'Kehilangan'),
('TR026', 'B052', 'finafy', 'opiyw', '2019-05-18 20:30:00', 'CLEAR', 'Ditemukan'),
('TR027', 'B054', '', 'sariw_', '2019-05-18 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR028', 'B056', '', 'hitori124', '2019-05-18 20:30:00', 'NOT CLEAR', 'Ditemukan'),
('TR029', 'B058', 'yasintar', '', '2019-05-18 20:30:00', 'NOT CLEAR', 'Kehilangan'),
('TR030', 'B060', 'nmmutia', 'aprilkh', '2019-05-20 20:30:00', 'CLEAR', 'Kehilangan'),
('TR031', 'B062', 'finafy', 'aprilkh', '2019-05-23 20:30:00', 'CLEAR', 'Ditemukan'),
('TR051', 'B044', 'yasintar', '', '2019-05-20 05:15:00', 'NOT CLEAR', 'Kehilangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_User` varchar(15) NOT NULL,
  `Nama_User` varchar(40) NOT NULL,
  `No_Telepon` varchar(15) NOT NULL,
  `Foto` varchar(40) NOT NULL,
  `password_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `Nama_User`, `No_Telepon`, `Foto`, `password_user`) VALUES
('aprilkh', 'Aprilia Khairunnisa', '080811112222', '', 'april'),
('arshau', 'Wirastri Arsharuri', '089912234456', '', 'arsha'),
('beton', 'Gustin Arviana', '087745532218', '', 'betonagung'),
('fadilaw', 'Fadilla Sukma', '082271182234', '', 'fad111la'),
('faridya', 'Faridatul N', '081123432123', '', 'faridaa'),
('fikfakboi', 'Fiko Redha', '089912234432', '', 'faekhyun'),
('finafy', 'Fina Fitri Yunita', '081123456788', '', 'fina'),
('galihhh', 'Panggalih Sumi', '081123345561', '', 'punkGG3'),
('hana43', 'Chalista Hana', '085567732241', '', 'hanasyantig'),
('hitori124', 'Rifka Annisa', '080811112222', '', 'rifkaa'),
('kareraa', 'Karera Aryatika', '087766655512', '', 'kareraaa'),
('momod', 'Jiyon Ataa N', '087123311131', '', 'momod1'),
('nadaw', 'Nada Nibrasalbila', '082231145567', '', 'nada123'),
('nahhhdia', 'Nahda Rosa', '085567732241', '', 'nahdabaiq'),
('nilaaw', 'Desy Nila', '089976654432', '', 'nilaaa'),
('nmmutia', 'Navinda Meutia', '087826382638', '', 'meutia'),
('nopale', 'Naufal Caesar', '089932276654', '', 'opalupil'),
('opiyw', 'Rizvi Sofbrina', '085668869515', '', 'anakgaul'),
('oyosh', 'Yosua Adriel', '085543321145', '', 'ajosh009'),
('ppunjyu', 'Punjung Prayoga', '081167789923', '', 'punjungchan'),
('rizall', 'Rizal Mohamad', '085543321116', '', 'belanjashopee'),
('sariw_', 'Sari Wahyuningsih', '081778890034', '', 'sariwww'),
('tamitatami', 'Chalissya Tami', '082212234432', '', 'tamiyaa'),
('yasintar', 'Yasinta Romadhona', '1111', '', 'yasin'),
('zahraaf', 'Zahrah Ayu', '087798867754', '', 'alimustofa1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_Message`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
