-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 09:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_book` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `ic` varchar(50) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_book`, `date`, `timeslot`, `name`, `gender`, `phone`, `email`, `comment`, `ic`, `id_patient`) VALUES
(100, '2021-11-25', '02:00 PM', 'Umi Natasha Binti Abdul Munaim', 'lelaki', '0123456789', 'uminatasha22@gmail.com', 'sakit belakang', '001122020910', 33),
(101, '2021-12-03', '04:00 PM', 'Umi Natasha Binti Abdul Munaim', 'perempuan', '01157737421', 'uminatasha22@gmail.com', 'lenguh tangan', '001122020910', 33),
(103, '2021-12-03', '04:00 PM', 'Ahmad Ali Bin Abu', 'lelaki', '0123456000', 'ahmadali@gmail.com', 'sakit belakang', '880111020901', 34),
(105, '2021-12-03', '11:00 AM', 'Umi Natasha Binti Abdul Munaim', 'perempuan', '0123456789', 'uminatasha22@gmail.com', 'sakit lengan\r\n', '001122020910', 0),
(106, '2021-12-03', '11:00 AM', 'Umi Natasha Binti Abdul Munaim', 'perempuan', '0123456789', 'uminatasha22@gmail.com', 'sakit bahu', '001122020910', 0),
(107, '2021-12-02', '12:00 PM', 'Ahmad Ali Bin Abu', 'lelaki', '0123456000', 'ahmadali@gmail.com', 'sakit tangan', '880111020901', 0),
(108, '2021-12-02', '12:00 PM', 'Ahmad Bin Abu', 'lelaki', '0123456789', 'ahmad@gmail.com', 'bahu', '880111020901', 0),
(109, '2021-12-02', '12:00 PM', 'Ahmad Bin Abu', 'lelaki', '0123456789', 'ahmad@gmail.com', 'bahu', '880111020901', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `username`, `password`, `user_type`, `name`, `ic`, `phone`, `gender`, `state`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'MUHAMMAD FALIQ BIN AHMAD', '900123026767', '0134122364', 'MALE', 'kedah', 'faliq@gamil.com'),
(2, 'amin', 'amin', 'student', 'MUHAMMAD AMIN BIN AHMAD', '970802022563', '0134126644', 'Male', 'Kedah', 'amin@gmail.com'),
(3, 'amran', 'amran123', 'instructor', 'En. Amran bin Mohd Rejab', ' 62060702558', '0194180803', 'Male', 'Kedah', 'amran@gmail.com'),
(4, 'emira', 'emira', 'student', 'NUR EMIRA SAFIYAH BINTI EMIR SYAFIQ', '030323082424', '0125983765', 'Female', 'Perak', 'emira@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `id_patient` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ic` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`id_patient`, `email`, `phone`, `address`, `gender`, `name`, `ic`, `password`, `create_datetime`) VALUES
(31, 'Sitisarahahmad@gmail.com', '0123456789', 'Bandar Baru 01000, Kangar Perlis', 'perempuan', 'Siti Sarah Binti Abdullah Ahmad', '9900102022', 'sarah', '2021-11-19 07:27:15'),
(33, 'uminatasha22@gmail.com', '01157737421', 'Block G Reflesia 2-1-4 Mata Ayer 02600 Arau, Perlis', 'perempuan', 'Umi Natasha Binti Abdul Munaim', '001122020910', 'natasha', '2021-11-22 02:31:53'),
(34, 'ahmadali@gmail.com', '0123456000', 'Kampung Padang Nyu, 02600 Arau Perlis', 'lelaki', 'Ahmad Ali Bin Abu', '880111020901', 'ahmad', '2021-11-29 05:46:27'),
(35, 'nasriri22@gmail.com', '0123456789', 'Kampung Gial 02500 Mata Ayer Perlis', 'lelaki', 'Muhammad Nasri Bin Ishak', '001122020081', 'nasri', '2021-11-29 07:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti_umum`
--

CREATE TABLE `tbl_cuti_umum` (
  `id_cuti_umum` int(11) NOT NULL,
  `tarikh` date NOT NULL,
  `sebab` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cuti_umum`
--

INSERT INTO `tbl_cuti_umum` (`id_cuti_umum`, `tarikh`, `sebab`) VALUES
(1, '2021-12-25', 'Hari Krismas'),
(3, '2022-01-01', 'New Year.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indexes for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  ADD PRIMARY KEY (`id_cuti_umum`),
  ADD UNIQUE KEY `tarikh` (`tarikh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_cuti_umum`
--
ALTER TABLE `tbl_cuti_umum`
  MODIFY `id_cuti_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
