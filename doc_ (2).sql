-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc+`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'admin', '05-11-2021 11:51:32 PM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `adminStatus` int(11) DEFAULT NULL,
  `fullName` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `contactnumber` int(20) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `startdoctime` varchar(10) DEFAULT NULL,
  `medihis` varchar(50) DEFAULT NULL,
  `paymentstatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`, `adminStatus`, `fullName`, `address`, `city`, `gender`, `contactnumber`, `age`, `startdoctime`, `medihis`, `paymentstatus`) VALUES
(39, 'Homeopath', 4, 13, 700, '2021-11-23', '2021-11-08 14:10:51', 1, 1, '2021-11-22 17:53:50', 0, 'L.G. Shamaan Chamal', 'M-23', 'Hambantota', 'male', 71145078, 35, '	 8:00 PM', 'sdsadasdas', NULL),
(40, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-29', '2021-11-08 14:20:30', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'M-23', 'Hambantota', 'male', 71145078, 55, '2:00 PM', 'asdadadad', NULL),
(41, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-24', '2021-11-13 19:59:34', 1, 1, '2021-11-22 17:53:44', 0, 'Nawanjana', 'Angoda', 'Colombo', 'male', 712345678, 35, '2:00 PM', 'sdsds', NULL),
(42, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-23', '2021-11-13 20:00:03', 1, 1, NULL, 1, 'Nawanjana', 'Angoda', 'Colombo', 'male', 712345678, 35, '2:00 PM', 'ssd', NULL),
(43, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-24', '2021-11-13 20:00:45', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'M-23,sadsds,sdsds', 'Hambantota', 'male', 711450781, 55, '2:00 PM', 'sdsd', NULL),
(44, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-23', '2021-11-13 20:02:08', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'sdsds', 'sdsds', 'male', 711450781, 22, '2:00 PM', 'asdasd', NULL),
(45, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-15', '2021-11-13 20:03:20', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'M-23,sadsds,sdsds', 'Hambantota', 'female', 71145078, 22, '2:00 PM', 'dfsdf', NULL),
(46, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-23', '2021-11-13 20:11:44', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'M-23,sadsds,sdsds', 'Hambantota', 'male', 71145078, 35, '2:00 PM', 'aADAD', NULL),
(47, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-29', '2021-11-13 20:12:58', 1, 1, NULL, 1, 'L.G. Shamaan Chamal', 'M-23,sadsds,sdsds', 'Hambantota', 'male', 71145078, 55, '2:00 PM', 'ASDSAD', NULL),
(48, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-23', '2021-11-13 20:55:01', 1, 1, NULL, 1, 'Nawanjana', 'Angoda', 'Colombo', 'male', 712345678, 35, '2:00 PM', 'asdasd', NULL),
(49, 'Ear-Nose-Throat (Ent) Specialist', 13, 13, 3000, '2021-11-22', '2021-11-13 20:56:38', 1, 1, '2022-01-28 15:01:27', 0, 'Nawanjana', 'Angoda', 'Colombo', 'male', 712345678, 35, '2:00 PM', 'zcasdc', NULL),
(55, 'General Physician', 12, 3, 2000, '2022-01-27', '2022-01-27 07:36:15', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 7:00 PM', 'sxas', NULL),
(56, 'Ear-Nose-Throat (Ent) Specialist', 13, 3, 3000, '2022-01-28', '2022-01-27 08:18:05', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '2:00 PM', 'ash', NULL),
(57, 'Gynecologist/Obstetrician', 10, 3, 5000, '2022-01-30', '2022-01-27 08:21:24', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 2:00 PM', 'adx', NULL),
(58, 'Ear-Nose-Throat (Ent) Specialist', 13, 3, 3000, '2022-02-01', '2022-01-27 08:28:45', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '2:00 PM', 'adxwq', NULL),
(59, 'Psychiatrist', 11, 3, 5000, '2022-01-31', '2022-01-27 08:32:48', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 5:00 PM', 'gdryh', NULL),
(60, 'Ear-Nose-Throat (Ent) Specialist', 13, 2, 3000, '2022-01-30', '2022-01-28 07:20:36', 1, 1, NULL, 1, 'Test 1', 'Nugegoda', 'Colombo', 'female', 714444444, 22, '2:00 PM', 'dssdvcvf', 'Cash'),
(61, 'Gynecologist/Obstetrician', 10, 2, 5000, '2022-02-03', '2022-01-28 07:48:55', 1, 1, NULL, 1, 'Test 1', 'Nugegoda', 'Colombo', 'female', 714444444, 22, '	 2:00 PM', 'csacs', 'Cash'),
(62, 'Ear-Nose-Throat (Ent) Specialist', 13, 2, 3000, '2022-01-31', '2022-01-28 07:51:26', 1, 1, NULL, 1, 'Nawanjana Pathirage', '128,A/5,Vihara mawatha,Kirilla', 'Kadawatha', 'male', 715262536, 22, '2:00 PM', 'cadcdfcdc', 'Card'),
(63, 'Gynecologist/Obstetrician', 10, 3, 5000, '2022-01-31', '2022-01-28 08:48:04', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 2:00 PM', 'feah', 'Cash'),
(64, 'Psychiatrist', 11, 3, 5000, '2022-01-30', '2022-01-28 08:48:59', 1, 1, NULL, 1, 'milena', '22/5 rd', 'Colombo', 'female', 8403239, 22, '	 5:00 PM', 'adkj,', 'Card'),
(65, 'General Physician', 12, 3, 2000, '2022-02-08', '2022-01-28 08:50:54', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 7:00 PM', 'iukADJhq', 'Cash'),
(66, 'Gynecologist/Obstetrician', 10, 3, 5000, '2022-01-30', '2022-01-28 09:43:58', 1, 1, '2022-01-28 15:02:05', 0, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 2:00 PM', 'sdkvm', 'Cash'),
(67, 'Gynecologist/Obstetrician', 10, 3, 5000, '2022-01-30', '2022-01-28 09:45:49', 1, 1, NULL, 1, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 2:00 PM', 'ksfdhj', 'Cash'),
(68, 'Homeopath', 2, 3, 600, '2022-01-31', '2022-01-28 15:03:29', 1, 1, '2022-01-28 15:05:17', 0, 'Test 2', 'Maharagama', 'Maharagama', 'male', 714444455, 25, '	 6:00 PM', 'klv,', 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `startdoctime` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`, `startdoctime`) VALUES
(1, 'Dentist', 'Kapila', 'Maharagama', '500', 8285703354, 'kapila.t@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:25:37', '2021-11-06 14:57:35', '	 4:00 PM'),
(2, 'Homeopath', 'Suwahas', 'Colombo', '600', 2147483647, 'suwhasp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-12-29 06:51:51', '2022-01-28 15:06:45', '	 6:00 PM'),
(3, 'General Physician', 'Ruwansiri', 'Monaragala', '1200', 8523699999, 'ruwansiri@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35', '2021-11-06 14:57:54', '	 6:00 PM'),
(4, 'Homeopath', 'Siriwardhana', 'Matara', '700', 25668888, 'siriwardhana@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09', '2021-11-06 14:58:05', '	 8:00 PM'),
(10, 'Gynecologist/Obstetrician', 'Shamaan Chamal', 'M-23', '5000', 711450781, 'chamal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-02 15:04:38', '2022-01-28 14:59:50', '	 2:00 PM'),
(11, 'Psychiatrist', 'Kavisha Bandara', 'Nugegoda', '5000', 712222222, 'kavisha.b@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '2021-11-05 18:06:22', NULL, '	 5:00 PM'),
(12, 'General Physician', 'Nawanjana Madhushankha', 'Nugegoda', '2000', 714567892, 'nawanjana.p@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '2021-11-05 19:07:44', NULL, '	 7:00 PM'),
(13, 'Ear-Nose-Throat (Ent) Specialist', 'Milena Elisha', 'Seeduwa', '3000', 711234567, 'elisha.m@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '2021-11-05 19:17:19', NULL, '2:00 PM'),
(14, 'General Physician', 'Sam Curran', 'Nugegoda', '5000', 714567445, 'samc@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-11-22 17:53:21', NULL, '12:30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `logint` time DEFAULT curtime(),
  `logindate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`, `logint`, `logindate`) VALUES
(20, NULL, 'ben', 0x3a3a3100000000000000000000000000, '2021-10-25 14:29:43', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(21, NULL, 'ben', 0x3a3a3100000000000000000000000000, '2021-10-25 14:29:47', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(22, NULL, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:30:46', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(23, NULL, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:30:56', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(24, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:32:19', '25-10-2021 08:03:12 PM', 1, '23:57:30', '2021-11-26'),
(25, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:40:54', '25-10-2021 08:19:47 PM', 1, '23:57:30', '2021-11-26'),
(26, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:50:52', '25-10-2021 08:20:58 PM', 1, '23:57:30', '2021-11-26'),
(27, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:31:20', '26-10-2021 12:02:04 AM', 1, '23:57:30', '2021-11-26'),
(28, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:32:30', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(29, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:32:32', '26-10-2021 12:04:04 AM', 1, '23:57:30', '2021-11-26'),
(30, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:34:33', '26-10-2021 12:05:08 AM', 1, '23:57:30', '2021-11-26'),
(31, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 09:40:27', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(32, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:10:55', '29-10-2021 11:41:18 PM', 1, '23:57:30', '2021-11-26'),
(33, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:34:34', '30-10-2021 12:04:44 AM', 1, '23:57:30', '2021-11-26'),
(34, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:37:09', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(35, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:48:51', '30-10-2021 12:33:15 AM', 1, '23:57:30', '2021-11-26'),
(36, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 19:04:03', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(37, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-30 16:54:24', '30-10-2021 10:50:06 PM', 1, '23:57:30', '2021-11-26'),
(38, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-30 17:30:55', '30-10-2021 11:03:32 PM', 1, '23:57:30', '2021-11-26'),
(39, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 17:53:24', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(40, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 18:28:20', '01-11-2021 12:22:00 AM', 1, '23:57:30', '2021-11-26'),
(41, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 18:52:39', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(42, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2021-11-01 14:21:25', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(43, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-01 14:21:30', '01-11-2021 07:51:44 PM', 1, '23:57:30', '2021-11-26'),
(44, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 14:16:54', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(45, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 14:46:02', '02-11-2021 08:19:19 PM', 1, '23:57:30', '2021-11-26'),
(46, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:04:52', '02-11-2021 08:35:11 PM', 1, '23:57:30', '2021-11-26'),
(47, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:05:19', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(48, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:09:58', '02-11-2021 08:40:07 PM', 1, '23:57:30', '2021-11-26'),
(49, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:10:14', '02-11-2021 08:43:05 PM', 1, '23:57:30', '2021-11-26'),
(50, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:26:58', '02-11-2021 09:03:47 PM', 1, '23:57:30', '2021-11-26'),
(51, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:34:46', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(52, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:46:51', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(53, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:49:17', '02-11-2021 10:19:25 PM', 1, '23:57:30', '2021-11-26'),
(54, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 19:54:55', '06-11-2021 12:40:33 AM', 1, '23:57:30', '2021-11-26'),
(55, 11, 'kavisha.b@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 18:22:01', '05-11-2021 11:56:10 PM', 1, '23:57:30', '2021-11-26'),
(56, 11, 'kavisha.b@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 18:32:08', '06-11-2021 12:05:23 AM', 1, '23:57:30', '2021-11-26'),
(57, 11, 'kavisha.b@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 18:39:26', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(58, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:48:09', '06-11-2021 01:19:12 AM', 1, '23:57:30', '2021-11-26'),
(59, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 18:27:06', '28-01-2022 08:32:23 PM', 1, '23:57:30', '2021-11-26'),
(60, NULL, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-08 14:16:30', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(61, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-08 14:16:34', '08-11-2021 07:50:00 PM', 1, '23:57:30', '2021-11-26'),
(62, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-08 14:20:38', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(63, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-10 12:18:57', '2021-11-27 23:35:36', 1, '23:57:30', '2021-11-26'),
(64, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-10 12:52:38', '10-11-2021 06:22:47 PM', 1, '23:57:30', '2021-11-26'),
(65, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-10 13:19:24', '10-11-2021 06:49:33 PM', 1, '23:57:30', '2021-11-26'),
(66, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-26 18:28:47', '27-11-2021 12:46:26 AM', 1, '23:58:47', '2021-11-26'),
(67, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-26 19:17:23', '27-11-2021 01:08:29 AM', 1, '00:47:23', '2021-11-27'),
(68, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-26 19:38:46', '2021-11-27 23:35:36', 1, '01:08:46', '2021-11-27'),
(69, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-27 11:35:03', '2021-11-27 23:35:36', 1, '17:05:03', '2021-11-27'),
(70, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-27 18:08:13', '27-11-2021 11:40:22 PM', 1, '23:38:13', '2021-11-27'),
(71, 13, 'elisha.m@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-27 19:03:03', NULL, 1, '00:33:03', '2021-11-28'),
(72, NULL, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:00:12', NULL, 0, '20:30:12', '2022-01-28'),
(73, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:00:22', NULL, 1, '20:30:22', '2022-01-28'),
(74, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:02:29', '28-01-2022 08:32:47 PM', 1, '20:32:29', '2022-01-28'),
(75, 2, 'suwhasp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:06:59', '28-01-2022 08:37:11 PM', 1, '20:36:59', '2022-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', '0000-00-00 00:00:00'),
(2, 'General Physician', '2016-12-28 06:38:12', '0000-00-00 00:00:00'),
(3, 'Dermatologist', '2016-12-28 06:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-28 06:39:26', '0000-00-00 00:00:00'),
(5, 'Ayurveda', '2016-12-28 06:39:51', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-28 06:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '0000-00-00 00:00:00'),
(8, 'Bones Specialist demo', '2017-01-07 08:07:53', '2021-11-06 15:03:37'),
(9, 'Dermatologist', '2019-11-10 18:36:36', '2021-11-06 15:03:43'),
(10, 'Psychiatrist', '2021-11-05 18:03:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `onlinec`
--

CREATE TABLE `onlinec` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `fullName` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `contactnumber` int(20) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinec`
--

INSERT INTO `onlinec` (`id`, `doctorSpecialization`, `doctorId`, `consultancyFees`, `postingDate`, `fullName`, `gender`, `contactnumber`, `age`, `email`) VALUES
(1, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-24 10:21:27', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(2, 'Dentist', 1, 500, '2021-11-24 10:25:15', 'L.G. Shamaan Chamal', 'Male', 71145078, 45, NULL),
(3, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-24 10:49:42', 'L.G. Shamaan Chamal', 'Male', 71145078, 33, NULL),
(4, 'Dentist', 1, 500, '2021-11-24 11:09:21', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(5, 'Dentist', 1, 500, '2021-11-24 11:09:58', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(6, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-24 11:10:15', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(7, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-24 11:11:52', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(8, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-24 11:11:57', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(9, 'Dentist', 1, 500, '2021-11-24 11:18:08', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(10, 'Dentist', 1, 500, '2021-11-25 04:30:32', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(11, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:25:34', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(12, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:26:18', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(13, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:43:46', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(14, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:44:04', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(15, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:44:55', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(16, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:45:02', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(17, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:48:25', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(18, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:49:10', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(19, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-26 19:50:05', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(20, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 17:22:44', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(21, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 17:22:54', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(22, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 17:28:30', 'L.G. Shamaan Chamal', 'Male', 71145078, 15, NULL),
(23, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 17:33:04', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(24, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 17:35:56', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, NULL),
(25, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 18:08:32', 'L.G. Shamaan Chamal', 'Male', 71145078, 15, NULL),
(26, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 18:08:54', 'L.G. Shamaan Chamal', 'Male', 71145078, 55, NULL),
(27, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:03:19', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(28, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:18:09', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(29, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:24:34', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, NULL),
(30, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:27:27', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, 'shammchamm781@gmail.com'),
(31, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:29:13', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, 'shammchamm781@gmail.com'),
(32, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:31:11', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, 'shammchamm781@gmail.com'),
(33, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-27 19:34:00', 'L.G. Shamaan Chamal', 'Male', 71145078, 35, 'shammchamm781@gmail.com'),
(34, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-28 22:15:01', 'L.G. Shamaan Chamal', 'Male', 71145078, 45, 'shammchamm781@gmail.com'),
(35, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-29 08:28:20', 'L.G. Shamaan Chamal', 'Male', 71145078, 45, 'shammchamm781@gmail.com'),
(36, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2021-11-29 10:06:34', 'L.G. Shamaan Chamal', 'Male', 71145078, 22, 'shammchamm781@gmail.com'),
(40, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2022-01-27 18:50:00', 'Nawanjana Pathirage', 'Male', 2147483647, 33, 'madhushankhap@sltc.ac.lk'),
(41, 'Ear-Nose-Throat (Ent) Specialist', 13, 3000, '2022-01-28 02:43:04', 'Nawanjana Pathirage', 'Male', 10967160, 35, 'nawamadhu@gmail.com'),
(42, 'Gynecologist/Obstetrician', 10, 5000, '2022-01-28 02:55:49', 'Nawanjana Pathirage', 'Male', 10967160, 35, 'nawamadhu@gmail.com'),
(43, 'Gynecologist/Obstetrician', 10, 5000, '2022-01-28 09:16:47', 'milena', 'Female', 399940, 22, 'mil@gmail.com'),
(44, 'Gynecologist/Obstetrician', 10, 5000, '2022-01-28 09:17:46', 'milena', 'Female', 39754, 22, 'mil@gmail.com'),
(45, 'Psychiatrist', 11, 5000, '2022-01-28 09:18:36', 'milena', 'Female', 1298, 22, 'mil@gmail.com'),
(46, 'Psychiatrist', 11, 5000, '2022-01-28 09:23:01', 'milena', 'Female', 2184, 22, 'mil@gmail.com'),
(47, 'Gynecologist/Obstetrician', 10, 5000, '2022-01-28 09:26:13', 'milena', 'Female', 32085, 22, 'mil@gmail.com'),
(48, 'Gynecologist/Obstetrician', 10, 5000, '2022-01-28 09:30:16', 'milena', 'Female', 2197, 22, 'mil@gmail.com'),
(49, 'Psychiatrist', 11, 5000, '2022-01-28 09:31:02', 'milena', 'Female', 320, 22, 'mil@gmail.com'),
(50, 'Psychiatrist', 11, 5000, '2022-01-28 09:40:58', 'milena', 'Female', 92573, 22, 'mil@gmail.com'),
(51, 'Homeopath', 2, 600, '2022-01-28 15:07:44', 'milena', 'Female', 29485, 22, 'mil@gmail.com'),
(52, 'General Physician', 12, 2000, '2022-01-29 07:50:20', 'milena', 'Female', 1234567890, 22, 'mil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-14 19:21:08', '15-10-2021 12:51:30 AM', 1),
(25, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-14 19:21:40', '15-10-2021 12:53:11 AM', 1),
(26, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-14 19:23:32', '15-10-2021 12:55:37 AM', 1),
(27, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-14 19:25:41', NULL, 1),
(28, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-15 19:14:16', '16-10-2021 12:45:57 AM', 1),
(29, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 03:16:18', '18-10-2021 09:20:08 AM', 1),
(30, NULL, 'dss', 0x3a3a3100000000000000000000000000, '2021-10-18 03:50:32', NULL, 0),
(31, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 03:50:43', '18-10-2021 09:20:45 AM', 1),
(32, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:02:28', NULL, 1),
(33, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:02:42', '18-10-2021 09:32:43 AM', 1),
(34, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:02:49', '18-10-2021 09:32:55 AM', 1),
(35, 8, 'shammchamm781@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:03:47', '18-10-2021 09:34:05 AM', 1),
(36, NULL, 'shammchamm781@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:14:06', NULL, 0),
(37, NULL, 'shammchamm781@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:14:10', NULL, 0),
(38, 9, 'shammchamm781@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:14:15', '18-10-2021 09:45:18 AM', 1),
(39, 9, 'shammchamm781@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:15:21', '18-10-2021 10:07:54 AM', 1),
(40, NULL, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:41:21', NULL, 0),
(41, NULL, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:41:31', NULL, 0),
(42, NULL, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:41:49', NULL, 0),
(43, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:42:17', '18-10-2021 10:12:19 AM', 1),
(44, 11, 'shammchamm@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:51:07', '18-10-2021 10:22:30 AM', 1),
(45, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:55:32', NULL, 1),
(46, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 04:56:38', '18-10-2021 10:29:35 AM', 1),
(47, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 05:00:19', '18-10-2021 10:54:55 AM', 1),
(48, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-18 05:25:57', NULL, 1),
(49, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-21 12:13:15', NULL, 1),
(50, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-21 12:14:29', NULL, 1),
(51, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-21 17:14:45', '21-10-2021 10:45:55 PM', 1),
(52, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-21 17:53:00', NULL, 1),
(53, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-22 07:14:29', NULL, 1),
(54, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-22 07:49:58', NULL, 1),
(55, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:36:01', '25-10-2021 08:10:48 PM', 1),
(56, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:51:04', '25-10-2021 08:21:22 PM', 1),
(57, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 15:01:26', '25-10-2021 08:32:39 PM', 1),
(58, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 16:58:20', '25-10-2021 10:30:41 PM', 1),
(59, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 17:28:02', '25-10-2021 11:09:27 PM', 1),
(60, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 17:40:17', '26-10-2021 12:01:12 AM', 1),
(61, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:32:10', '26-10-2021 12:02:26 AM', 1),
(62, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:35:15', '26-10-2021 12:06:41 AM', 1),
(63, NULL, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 13:06:06', NULL, 0),
(64, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 13:06:15', NULL, 1),
(65, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 17:05:04', NULL, 1),
(66, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 17:46:33', NULL, 0),
(67, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 17:47:11', NULL, 1),
(68, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 18:11:23', '26-10-2021 11:52:02 PM', 1),
(69, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2021-10-26 18:22:15', NULL, 0),
(70, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 18:33:58', '27-10-2021 12:05:29 AM', 1),
(71, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 18:39:05', '27-10-2021 12:10:55 AM', 1),
(72, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 17:06:39', NULL, 1),
(73, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 17:30:10', NULL, 1),
(74, NULL, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:36:50', NULL, 0),
(75, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 17:45:29', '31-10-2021 11:23:18 PM', 1),
(76, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 19:03:41', NULL, 1),
(77, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 19:07:21', NULL, 1),
(78, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-01 17:04:44', '02-11-2021 12:54:05 AM', 1),
(79, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 09:10:26', '02-11-2021 02:40:32 PM', 1),
(80, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 14:15:50', '02-11-2021 07:46:48 PM', 1),
(81, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:23:04', '02-11-2021 08:55:39 PM', 1),
(82, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:26:07', '02-11-2021 08:56:48 PM', 1),
(83, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:35:44', NULL, 1),
(84, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:45:56', '02-11-2021 10:16:45 PM', 1),
(85, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:54:26', '03-11-2021 12:49:41 AM', 1),
(86, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 19:19:51', '03-11-2021 01:22:49 AM', 1),
(87, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 19:55:18', '03-11-2021 01:25:23 AM', 1),
(88, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-03 09:12:47', NULL, 1),
(89, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-03 14:15:51', NULL, 1),
(90, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-03 18:16:57', '04-11-2021 12:18:14 AM', 1),
(91, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-03 18:50:46', NULL, 1),
(92, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-03 19:02:31', NULL, 1),
(93, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-04 09:49:19', NULL, 1),
(94, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-04 09:53:51', NULL, 1),
(95, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-04 13:57:51', '05-11-2021 12:08:48 AM', 1),
(96, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 14:58:40', NULL, 1),
(97, NULL, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 18:40:46', NULL, 0),
(98, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 18:40:51', NULL, 1),
(99, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:10:48', '06-11-2021 12:41:13 AM', 1),
(100, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:11:20', '06-11-2021 12:45:18 AM', 1),
(101, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:17:50', '06-11-2021 12:52:34 AM', 1),
(102, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:22:59', NULL, 1),
(103, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:39:18', NULL, 1),
(104, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:39:56', NULL, 1),
(105, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:44:18', '06-11-2021 01:16:37 AM', 1),
(106, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:47:39', '06-11-2021 01:17:59 AM', 1),
(107, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:49:19', '06-11-2021 01:20:17 AM', 1),
(108, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 19:56:42', NULL, 1),
(109, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-05 20:05:06', '06-11-2021 01:42:17 AM', 1),
(110, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 14:45:47', '06-11-2021 08:19:08 PM', 1),
(111, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 14:49:33', '06-11-2021 08:19:52 PM', 1),
(112, NULL, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 18:26:39', NULL, 0),
(113, NULL, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 18:26:44', NULL, 0),
(114, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-06 18:26:48', '06-11-2021 11:56:57 PM', 1),
(115, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-08 14:10:17', '08-11-2021 07:46:23 PM', 1),
(116, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-08 14:20:08', '08-11-2021 07:50:33 PM', 1),
(117, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-10 12:52:52', '10-11-2021 06:23:09 PM', 1),
(118, NULL, 'shamm781', 0x3a3a3100000000000000000000000000, '2021-11-13 19:32:30', NULL, 0),
(119, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:32:33', '14-11-2021 01:05:32 AM', 1),
(120, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:39:15', '14-11-2021 01:09:30 AM', 1),
(121, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:39:40', NULL, 1),
(122, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:40:48', '14-11-2021 01:10:50 AM', 1),
(123, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:40:53', '14-11-2021 01:18:33 AM', 1),
(124, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-13 19:48:38', NULL, 1),
(125, 13, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-14 17:09:13', NULL, 1),
(126, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 15:14:45', NULL, 1),
(127, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 15:43:51', NULL, 1),
(128, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 15:51:20', NULL, 1),
(129, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 15:54:23', NULL, 1),
(130, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 15:56:07', '22-11-2021 11:19:30 PM', 1),
(131, NULL, 'samc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 18:10:54', NULL, 0),
(132, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 18:10:58', '22-11-2021 11:41:46 PM', 1),
(133, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-22 18:11:50', NULL, 1),
(134, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-23 14:32:59', NULL, 1),
(135, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-24 09:38:01', '24-11-2021 04:37:43 PM', 1),
(136, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-25 03:37:09', '25-11-2021 09:57:13 AM', 1),
(137, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-25 11:36:27', '26-11-2021 12:14:00 AM', 1),
(138, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-26 17:19:16', '26-11-2021 11:58:36 PM', 1),
(139, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-26 19:30:25', '27-11-2021 01:00:28 AM', 1),
(140, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-12 21:07:40', NULL, 1),
(141, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-13 07:21:19', NULL, 1),
(142, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-27 07:13:35', '28-01-2022 02:44:58 PM', 1),
(143, NULL, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-27 18:40:33', NULL, 0),
(144, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-27 18:41:03', NULL, 1),
(145, NULL, 'nawanjanap@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 06:43:34', NULL, 0),
(146, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 06:43:42', NULL, 1),
(147, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 07:48:05', NULL, 1),
(148, NULL, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 09:21:03', NULL, 0),
(149, NULL, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 09:42:21', NULL, 0),
(150, NULL, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 09:42:28', NULL, 0),
(151, NULL, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 09:42:38', NULL, 0),
(152, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 09:43:16', NULL, 1),
(153, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 14:56:25', '28-01-2022 08:27:12 PM', 1),
(154, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 14:57:47', '28-01-2022 08:27:53 PM', 1),
(155, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:02:56', '28-01-2022 08:35:36 PM', 1),
(156, 14, 'abc@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-28 15:14:57', '28-01-2022 08:45:30 PM', 1),
(157, 14, 'abc@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-29 07:43:53', '29-01-2022 01:14:03 PM', 1),
(158, 16, 'micky@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-29 07:47:18', '29-01-2022 01:18:44 PM', 1),
(159, 3, 'test2@gmail.com', 0x3a3a3100000000000000000000000000, '2022-01-29 07:49:42', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `contactnumber` int(20) DEFAULT NULL,
  `age` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`, `contactnumber`, `age`) VALUES
(2, 'Test 1', 'Nugegoda', 'Colombo', 'female', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-30 05:34:39', '2021-11-04 10:11:23', 714444444, 22),
(3, 'Test 2', 'Maharagama', 'Maharagama', 'male', 'test2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-07 06:36:53', '2022-01-28 09:43:03', 714444455, 25),
(13, 'Nawanjana', 'Angoda', 'Colombo', 'male', 'nawanjanap@gmail.com', 'b8d788508291168c6aff4e23e213be38', '2021-11-03 18:49:47', '2021-11-05 19:49:41', 712345678, 35),
(14, 'abc', '15 rd/ seeduwa', 'Gampaha', 'female', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-01-28 15:13:06', '2022-01-28 15:14:41', 123456789, 25),
(15, 'xyz', '16 rd/raddolugama', 'Gampaha', 'female', 'xyz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-01-28 17:31:12', '2022-01-28 17:34:08', 1234567890, 20),
(16, 'micky', '20 rd/ seedwa', 'Gampaha', 'female', 'micky@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-01-29 07:45:02', '2022-01-29 07:46:58', 1234567890, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinec`
--
ALTER TABLE `onlinec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `onlinec`
--
ALTER TABLE `onlinec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
