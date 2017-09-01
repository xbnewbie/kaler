-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Sep 2017 pada 16.07
-- Versi Server: 5.7.14-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idcard`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_role`
--

CREATE TABLE `app_role` (
  `KodeAppRole` varchar(5) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_role`
--

INSERT INTO `app_role` (`KodeAppRole`, `Nama`, `Deskripsi`) VALUES
('1', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_role_user`
--

CREATE TABLE `app_role_user` (
  `idAppUser` int(11) NOT NULL,
  `KodeAppRole` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_role_user`
--

INSERT INTO `app_role_user` (`idAppUser`, `KodeAppRole`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `app_user`
--

CREATE TABLE `app_user` (
  `IdAppUser` int(11) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `UserPass` varchar(32) NOT NULL,
  `IsActive` tinyint(4) NOT NULL,
  `UserNick` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `app_user`
--

INSERT INTO `app_user` (`IdAppUser`, `UserName`, `UserPass`, `IsActive`, `UserNick`) VALUES
(1, 'a', 'dc0ae7e1387be9b795f5d6299e383759', 1, 'Brevy M Prabowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `IdCompany` int(11) NOT NULL,
  `CompanyName` varchar(42) NOT NULL,
  `address` text NOT NULL,
  `CompanyLogo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_category`
--

CREATE TABLE `item_category` (
  `Kode` varchar(15) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item_category`
--

INSERT INTO `item_category` (`Kode`, `Description`) VALUES
('facebook', 'account facebook'),
('phone_number', 'phone number'),
('email', 'email'),
('job', 'job detail');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_profile`
--

CREATE TABLE `item_profile` (
  `IdProfile` int(11) NOT NULL,
  `KodeCategory` varchar(15) NOT NULL,
  `Label` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `IdProfile` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `NickName` varchar(100) NOT NULL,
  `PhotoProfile` varchar(100) NOT NULL,
  `IdCompany` int(11) NOT NULL,
  `IdTheme` int(11) NOT NULL,
  `visit` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_collection`
--

CREATE TABLE `profile_collection` (
  `IdFacebook` varchar(255) NOT NULL,
  `IdProfile` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile_collection`
--

INSERT INTO `profile_collection` (`IdFacebook`, `IdProfile`) VALUES
('10207606250754648', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`IdAppUser`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`IdCompany`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`IdProfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `IdAppUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `IdCompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
