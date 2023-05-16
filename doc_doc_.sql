-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 06:28 PM
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
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM');

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
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `startdoctime` time DEFAULT NULL,
  `enddoctime` time DEFAULT NULL,
  `adminStatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`, `startdoctime`, `enddoctime`, `adminStatus`) VALUES
(6, 'General Physician', 3, 2, 1200, '2021-10-19', '9:15 AM', '2021-10-18 03:38:12', 1, 1, '2021-10-25 17:19:48', NULL, NULL, 0),
(7, 'Homeopath', 2, 9, 600, '2021-10-25', '9:45 AM', '2021-10-18 04:15:00', 1, 1, '2021-10-25 17:20:01', NULL, NULL, 0),
(8, 'Homeopath', 2, 11, 600, '2021-10-26', '10:30 AM', '2021-10-18 04:51:44', 1, 1, NULL, NULL, NULL, 0),
(9, 'Homeopath', 2, 2, 600, '2021-10-12', '11:00 AM', '2021-10-18 05:26:16', 1, 1, NULL, NULL, NULL, 0),
(10, 'Dentist', 1, 2, 500, '2021-10-30', '11:15 PM', '2021-10-25 17:39:03', 0, 1, '2021-10-25 18:21:45', '00:00:00', NULL, 1),
(11, 'Dentist', 1, 2, 500, '2021-10-28', '12:15 AM', '2021-10-25 18:32:19', 1, 1, '2021-10-25 18:34:23', '00:00:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `uname` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `esubject` varchar(50) NOT NULL,
  `emessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`uname`, `email`, `esubject`, `emessage`) VALUES
('sdsds', 'sds@gmail.com', 'sdsd', 'sds'),
('sxsx', 'xsxs@gmail.com', 'ss', 'xss'),
('cxxcx', 'sds@gmail.com', 'cc', 'dcsc'),
('scss', 'cscsc@gmail.com', 'xss', 'scscs');

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
  `startdoctime` time DEFAULT NULL,
  `enddoctime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`, `startdoctime`, `enddoctime`) VALUES
(1, 'Dentist', 'Kapila', 'Maharagama', '500', 8285703354, 'kapila.t@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:25:37', '2021-10-21 18:31:51', '00:00:00', '03:00:00'),
(2, 'Homeopath', 'Suwahas', 'Colombo', '600', 2147483647, 'suwhasp@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:51:51', '2021-10-18 03:30:33', NULL, NULL),
(3, 'General Physician', 'Ruwansiri', 'Monaragala', '1200', 8523699999, 'ruwansiri@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35', '2021-10-18 03:32:42', NULL, NULL),
(4, 'Homeopath', 'Siriwardhana', 'Matara', '700', 25668888, 'siriwardhana@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09', '2021-10-18 03:33:19', NULL, NULL),
(5, 'Ayurveda', 'Anujaya', 'Haputale', '8050', 442166644646, 'anujayad@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:47:07', '2021-10-18 03:34:36', NULL, NULL),
(10, 'Gynecologist/Obstetrician', 'Shamaan Chamal', 'M-23', '5000', 711450781, 'chamal@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-11-02 15:04:38', NULL, NULL, NULL);

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, NULL, 'ben', 0x3a3a3100000000000000000000000000, '2021-10-25 14:29:43', NULL, 0),
(21, NULL, 'ben', 0x3a3a3100000000000000000000000000, '2021-10-25 14:29:47', NULL, 0),
(22, NULL, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:30:46', NULL, 0),
(23, NULL, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:30:56', NULL, 0),
(24, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:32:19', '25-10-2021 08:03:12 PM', 1),
(25, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:40:54', '25-10-2021 08:19:47 PM', 1),
(26, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 14:50:52', '25-10-2021 08:20:58 PM', 1),
(27, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:31:20', '26-10-2021 12:02:04 AM', 1),
(28, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:32:30', NULL, 0),
(29, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:32:32', '26-10-2021 12:04:04 AM', 1),
(30, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-25 18:34:33', '26-10-2021 12:05:08 AM', 1),
(31, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-26 09:40:27', NULL, 1),
(32, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:10:55', '29-10-2021 11:41:18 PM', 1),
(33, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:34:34', '30-10-2021 12:04:44 AM', 1),
(34, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:37:09', NULL, 1),
(35, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 18:48:51', '30-10-2021 12:33:15 AM', 1),
(36, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-29 19:04:03', NULL, 1),
(37, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-30 16:54:24', '30-10-2021 10:50:06 PM', 1),
(38, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-30 17:30:55', '30-10-2021 11:03:32 PM', 1),
(39, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 17:53:24', NULL, 1),
(40, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 18:28:20', '01-11-2021 12:22:00 AM', 1),
(41, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-10-31 18:52:39', NULL, 1),
(42, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2021-11-01 14:21:25', NULL, 0),
(43, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-01 14:21:30', '01-11-2021 07:51:44 PM', 1),
(44, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 14:16:54', NULL, 1),
(45, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 14:46:02', '02-11-2021 08:19:19 PM', 1),
(46, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:04:52', '02-11-2021 08:35:11 PM', 1),
(47, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:05:19', NULL, 1),
(48, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:09:58', '02-11-2021 08:40:07 PM', 1),
(49, 10, 'chamal@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:10:14', '02-11-2021 08:43:05 PM', 1),
(50, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:26:58', '02-11-2021 09:03:47 PM', 1),
(51, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 15:34:46', NULL, 1),
(52, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:46:51', NULL, 1),
(53, 1, 'kapila.t@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:49:17', '02-11-2021 10:19:25 PM', 1);

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
(9, 'Demo test', '2016-12-28 07:37:39', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '0000-00-00 00:00:00'),
(11, 'Test', '2019-06-23 17:51:06', '2019-06-23 17:55:06'),
(12, 'Dermatologist', '2019-11-10 18:36:36', '2019-11-10 18:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'test user', 'test@gmail.com', 2523523522523523, ' This is sample text for the test.', '2019-06-29 19:03:08', 'Test Admin Remark', '2019-06-30 12:55:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(2, 3, '120/185', '80/120', '85 Kg', '101 degree', '#Fever, #BP high\r\n1.Paracetamol\r\n2.jocib tab\r\n', '2019-11-06 04:20:07'),
(3, 2, '90/120', '92/190', '86 kg', '99 deg', '#Sugar High\r\n1.Petz 30', '2019-11-06 04:31:24'),
(4, 1, '125/200', '86/120', '56 kg', '98 deg', '# blood pressure is high\r\n1.koil cipla', '2019-11-06 04:52:42'),
(5, 1, '96/120', '98/120', '57 kg', '102 deg', '#Viral\r\n1.gjgjh-1Ml\r\n2.kjhuiy-2M', '2019-11-06 04:56:55'),
(6, 4, '90/120', '120', '56', '98 F', '#blood sugar high\r\n#Asthma problem', '2019-11-06 14:38:33'),
(7, 5, '80/120', '120', '85', '98.6', 'Rx\r\n\r\nAbc tab\r\nxyz Syrup', '2019-11-10 18:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Manisha Jha', 4558968789, 'test@gmail.com', 'Female', '\"\"J&K Block J-127, Laxmi Nagar New Delhi', 26, 'She is diabetic patient', '2019-11-04 21:38:06', '2019-11-06 06:48:05'),
(2, 5, 'Raghu Yadav', 9797977979, 'raghu@gmail.com', 'Male', 'ABC Apartment Mayur Vihar Ph-1 New Delhi', 39, 'No', '2019-11-05 10:40:13', '2019-11-05 11:53:45'),
(3, 7, 'Mansi', 9878978798, 'jk@gmail.com', 'Female', '\"fdghyj', 46, 'No', '2019-11-05 10:49:41', '2019-11-05 11:58:59'),
(4, 7, 'Manav Sharma', 9888988989, 'sharma@gmail.com', 'Male', 'L-56,Ashok Nagar New Delhi-110096', 45, 'He is long suffered by asthma', '2019-11-06 14:33:54', '2019-11-06 14:34:31'),
(5, 9, 'John', 1234567890, 'john@test.com', 'male', 'Test ', 25, 'THis is sample text for testing.', '2019-11-10 18:49:24', NULL),
(6, 1, 'fhjgfj', 22, 'shammchamm781@gmail.com', 'male', 'M-23', 82, 'hkkjljlj jyhjhjhjhjh', '2021-11-02 14:25:40', NULL);

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
(85, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-11-02 16:54:26', NULL, 1);

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
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(2, 'Test 1', 'Nugegoda', 'Colombo', 'female', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-30 05:34:39', '2021-10-18 03:35:46'),
(3, 'Test 2', 'Maharagama', 'Maharagama', 'male', 'test2@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 06:36:53', '2021-10-18 03:36:19'),
(9, 'L.G. Shamaan Chamal', 'M-23', 'Hambantota', 'male', 'shammchamm781@gmail.com', 'e53bdfc8cb27443d9be0790588b84993', '2021-10-18 04:13:33', '0000-00-00 00:00:00'),
(10, 'bandara', 'colombo', 'colombo', 'male', 'test3@gmail.com', '3614cdb06f44933a99dc24710e82dfd7', '2021-10-18 04:40:18', NULL),
(11, 'L.G. Shamaan Chamal', 'M-23', 'Hambantota', 'male', 'shammchamm@gmail.com', '3614cdb06f44933a99dc24710e82dfd7', '2021-10-18 04:50:12', NULL),
(12, 'shamaan', 'ssdsd', 'hambantota', 'male', 'test4@gmail.com', '3614cdb06f44933a99dc24710e82dfd7', '2021-10-18 05:25:31', NULL);

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
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
