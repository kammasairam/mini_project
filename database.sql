-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2020 at 12:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12623400_ghmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `zone` text NOT NULL,
  `circle` text NOT NULL,
  `ward` text NOT NULL,
  `per` varchar(10) DEFAULT NULL,
  `id` int(10) DEFAULT NULL,
  `Phoneno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`zone`, `circle`, `ward`, `per`, `id`, `Phoneno`) VALUES
('L. B. Nagar (East Zone)', 'Kapra', 'Kapra', '90', 1, NULL),
('L. B. Nagar (East Zone)', 'Kapra', ' Dr AS Rao Nagar East Zone', '98%', 2, NULL),
('L. B. Nagar (East Zone)', 'Kapra', ' Cherlapalli', '23%', 3, NULL),
('L. B. Nagar (East Zone)', 'Kapra', 'Meerpet HB Colony', '48%', 4, NULL),
('L. B. Nagar (East Zone)', 'Kapra', 'Mallapur', '54%', 5, NULL),
('L. B. Nagar (East Zone)', 'Kapra', 'Nacharam', '30%', 6, NULL),
('L. B. Nagar (East Zone)', 'Uppal', 'Chilukanagar', '89%', 7, NULL),
('L. B. Nagar (East Zone)', 'Uppal', 'Habsiguda', '32%', 8, NULL),
('L. B. Nagar (East Zone)', 'Uppal', 'Ramanthapur', '67%', 9, NULL),
('L. B. Nagar (East Zone)', 'Uppal', 'Uppal', '44%', 10, NULL),
('L. B. Nagar (East Zone)', 'Hayathnagar', 'Nagole', '56%', 11, NULL),
('L. B. Nagar (East Zone)', 'Hayathnagar', 'Mansoorabad', '98%', 12, NULL),
('L. B. Nagar (East Zone)', 'Hayathnagar', 'Hayaat nagar', '76%', 13, NULL),
('L. B. Nagar (East Zone)', 'Hayathnagar', 'BN Reddy Nagar', '32%', 14, NULL),
('L. B. Nagar (East Zone)', 'LB Nagar ', 'Vanasthalipuram', '65%', 15, NULL),
('L. B. Nagar (East Zone)', 'LB Nagar ', 'Hasthinapuram', '43%', 16, NULL),
('L. B. Nagar (East Zone)', 'LB Nagar ', 'Champapet', '49%', 17, NULL),
('L. B. Nagar (East Zone)', 'LB Nagar ', 'Lingojiguda', '98%', 18, NULL),
('L. B. Nagar (East Zone)', 'Saroornagar', 'Saroornagar', '76%', 19, NULL),
('L. B. Nagar (East Zone)', 'Saroornagar', 'Rama Krishna Puram', '35%', 20, NULL),
('L. B. Nagar (East Zone)', 'Saroornagar', 'Kothapet', '54%', 21, NULL),
('L. B. Nagar (East Zone)', 'Saroornagar', 'Chaitanyapuri', '76%', 22, NULL),
('L. B. Nagar (East Zone)', 'Saroornagar', 'Gaddiannaram', '87%', 23, NULL),
('Charminar (South Zone)', 'Malakpet', 'Saidabad', '21%', 24, NULL),
('Charminar (South Zone)', 'Malakpet', 'Moosrambagh', '76%', 25, NULL),
('Charminar (South Zone)', 'Malakpet', 'Old Malakpet', '54%', 26, NULL),
('Charminar (South Zone)', 'Malakpet', 'Akberbagh', '65%', 27, NULL),
('Charminar (South Zone)', 'Malakpet', 'Azampura', '21%', 28, NULL),
('Charminar (South Zone)', 'Malakpet', 'Chawani', '43%', 29, NULL),
('Charminar (South Zone)', 'Malakpet', 'Dabeerpura', '29%', 30, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'Rein Bazar', '34%', 31, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'Talabchanchalam', '76%', 32, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'Gowlipura', '56%', 33, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'Kurmaguda', '34%', 34, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'IS SADAN', '32%', 35, NULL),
('Charminar (South Zone)', 'Santhoshnagar', 'Santhosh Nagar', '98%', 36, NULL),
('', '', '', NULL, NULL, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Lalithbagh', '10%', 37, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Riyasath Nagar', '87%', 38, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Kanchanbagh', '51%', 39, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Barkas', '87%', 40, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Chandrayangutta', '99%', 41, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Uppuguda', '23%', 42, NULL),
('Charminar (South Zone)', 'Chandrayangutta', 'Jangammet', '43%', 43, NULL),
('Charminar (South Zone)', 'Charminar', 'Pathergatti', '36%', 44, NULL),
('Charminar (South Zone)', 'Charminar', 'Moghalpura', '54%', 45, NULL),
('Charminar (South Zone)', 'Charminar', 'Shalibanda', '76%', 46, NULL),
('Charminar (South Zone)', 'Charminar', 'Ghansi Bazar', '1%', 47, NULL),
('Charminar (South Zone)', 'Charminar', 'Puranapul', '70%', 48, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Falakunuma', '43%', 49, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Nawab Saheb Kunta', '69%', 50, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Doodbowli', '73%', 51, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Jahanuma', '76%', 52, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Ramnaspura', '16%', 53, NULL),
('Charminar (South Zone)', 'Falakunuma', 'Kishanbagh', '28%', 54, NULL),
('Charminar (South Zone)', 'Rajendra Nagar ', 'Rajendra Nagar ', '69%', 55, NULL),
('Charminar (South Zone)', 'Rajendra Nagar ', 'Attapur', '87%', 56, NULL),
('Charminar (South Zone)', 'Rajendra Nagar ', 'Suleman Nagar', '40%', 57, NULL),
('Charminar (South Zone)', 'Rajendra Nagar ', 'Shastri puram', '37%', 58, NULL),
('Charminar (South Zone)', 'Rajendra Nagar ', 'Mylardevpally', '36%', 59, NULL),
('Khairatabad', ' Mehdipatnam', 'Mehdipatnam', '41%', 60, NULL),
('Khairatabad', ' Mehdipatnam', 'Gudimalkapur', '100%', 61, NULL),
('Khairatabad', ' Mehdipatnam', 'Asif Nagar', '56%', 62, NULL),
('Khairatabad', ' Mehdipatnam', 'Vijayanagar Colony', '76%', 63, NULL),
('Khairatabad', ' Mehdipatnam', 'Ahmed Nagar', '76%', 64, NULL),
('Khairatabad', ' Mehdipatnam', 'Red Hills', '54%', 65, NULL),
('Khairatabad', ' Mehdipatnam', 'Mallepally', '21%', 66, NULL),
('Khairatabad', 'Karwan', 'Ziaguda', '54%', 67, NULL),
('Khairatabad', 'Karwan', 'Karwan', '65%', 68, NULL),
('Khairatabad', 'Karwan', 'Langer House', '87%', 69, NULL),
('Khairatabad', 'Karwan', 'Golconda', '21%', 70, NULL),
('Khairatabad', 'Karwan', 'Tolichowki', '98%', 71, NULL),
('Khairatabad', 'Karwan', 'Nanalnagar', '10%', 72, NULL),
('Khairatabad', 'Goshamahal', 'Begum Bazar', '34%', 73, NULL),
('Khairatabad', 'Goshamahal', 'Goshamahal', '76%', 74, NULL),
('Khairatabad', 'Goshamahal', 'Manghalhat', '44%', 75, NULL),
('Khairatabad', 'Goshamahal', 'Dattathreyanagar', '68%', 76, NULL),
('Khairatabad', 'Goshamahal', 'Jambagh', '76%', 77, NULL),
('Khairatabad', 'Goshamahal', 'Gunfoundry', '44%', 78, NULL),
('Khairatabad', 'Khairatabad', 'Khairatabad', '32%', 79, NULL),
('Khairatabad', 'Khairatabad', 'Somajiguda', '65%', 80, NULL),
('Khairatabad', 'Khairatabad', 'Ameerpet', '42%', 81, NULL),
('Khairatabad', 'Khairatabad', 'Sanathnagar', '100%', 82, NULL),
('', '', '', '', 0, NULL),
('', '', '', '', 0, NULL),
('', '', '', '', 0, NULL),
('', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`, `phone`) VALUES
('sairam', '187y5a0532@gmail.com', 'hii..', '8333886309'),
('KAMMA SATYA SHIVA SAI RAM', 'kamma.satyasai@gmail.com', 'garbage if full in our area miyapur.. please clean it.', '8333886309'),
('Ganesh', '187y5a0532@gmail.com', 'Thank you ', '8184808565'),
('Ganesh', '187y5a0532@gmail.com', 'Hii', '9160739682'),
('Ganesh', '187y5a0532@gmail.com', 'Hjjj', '9160739682'),
('sai', '123@gmail.com', '000000000', '8333886309'),
('Kk', 'srinuk1972@gmail.com', 'Very good', '9951681039'),
('Rony', 'Rony@gmail.com', 'Kssr good', '6478553246'),
('Kamal', '177y1a05d7@mlritm.ac.in', 'This is a developer side testing\r\n\r\n', '9398996360'),
('fnXtHoMJ', '726105', '118220', '285666'),
('GrrWyKMI', '607179', '999695', '668733'),
('VQEesToZ', '985993', '718706', '760956'),
('eFcgTfyA', '545996', '901546', '212250'),
('zbBDONoz', '340603', '309846', '473100'),
('tuGPFzIi', '700342', '276138', '173829'),
('WEEYiHCQ', '321137', '793816', '370119'),
('UmfYtdYu', '788515', '407741', '715738');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('sairam', '12345'),
('admin', 'Abcd@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
