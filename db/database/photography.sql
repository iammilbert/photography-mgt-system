-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 02:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `userName` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `email`, `userName`, `mobile`, `address`, `password`) VALUES
(1, 'Gladys', 'Lugard', 'princess@gmail.com', 'admin', '07032446417', 'No. Karji Junction', 'gaze');

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `picture`) VALUES
(1, 'p4.jpg'),
(2, 'p3.jpg'),
(3, 'p17.jpg'),
(4, 'p5.jpg'),
(5, 'p2.jpg'),
(6, 'p1.jpg'),
(7, 'p5.jpg'),
(8, 'p6.jpg'),
(9, 'p3.jpg'),
(10, 'p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `burial`
--

CREATE TABLE `burial` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burial`
--

INSERT INTO `burial` (`id`, `picture`) VALUES
(1, 'p1.jpg'),
(2, 'p7.jpg'),
(3, 'p2.jpg'),
(4, 'ac507786-a47f-4680-956b-336c2d0bbfdf.jpg'),
(5, '500px - Copy.jpg'),
(6, 'ac507786-a47f-4680-956b-336c2d0bbfdf.jpg'),
(7, 'p7.jpg'),
(8, 'p2.jpg'),
(9, 'p6.jpg'),
(10, 'p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstName`, `lastName`, `subject`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'Gabriel', 'Hishen', 'Price of Pictures', 'michaelgabriel4968@yahoo.com', '08059709121', 'The Price of Picture is high', '2021-03-18 16:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `customer_request`
--

CREATE TABLE `customer_request` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `request` varchar(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `delivery_type` varchar(100) DEFAULT NULL,
  `dateOdered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_request`
--

INSERT INTO `customer_request` (`id`, `customer_id`, `request`, `event_id`, `delivery_type`, `dateOdered`, `status`, `reason`) VALUES
(1, 1, 'Birthday', '001', 'Shipping', '2021-03-18 22:30:33', 2, 'He cant afford the money'),
(2, 1, 'Birthday', '001', 'Shipping', '2021-03-18 22:30:33', 2, 'He cant afford the money');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reservation`
--

CREATE TABLE `customer_reservation` (
  `transaction_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `event` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reserved_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time` varchar(50) NOT NULL,
  `shot` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reservation`
--

INSERT INTO `customer_reservation` (`transaction_id`, `event`, `date`, `reserved_date`, `time`, `shot`, `state`, `address`, `customer_id`, `status`, `reason`) VALUES
(001, 'Birthday', '2021-08-23', '2021-03-18 22:00:30', '', '40-60', 'Cross River', 'No. 1 karji junction, Ungwar rimi Kaduna', 1, 2, 'The money was too small'),
(002, 'Wedding', '2021-05-31', '2021-03-17 09:40:43', '14:03', '20-40', 'Kaduna', 'Karji Kaduna,', 1, 1, ''),
(003, 'In-house Photo shot', '2021-05-04', '2021-03-18 22:05:36', '3:20am', '60-80', 'Abuja', 'N0. 1 Karji Junction', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture`) VALUES
(2, 'p1.jpg'),
(3, 'p2.jpg'),
(4, 'p3.jpg'),
(5, 'p4.jpg'),
(6, 'p5.jpg'),
(7, 'p6.jpg'),
(8, 'p7.jpg'),
(14, 'p1.jpg'),
(15, 'p6.jpg'),
(16, 'p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `picture`) VALUES
(2, 'img1.jpg'),
(3, 'img2.jpg'),
(4, 'img3.jpg'),
(5, 'img4.jpg'),
(6, 'img5.jpg'),
(7, 'img6.jpg'),
(8, 'img4.jpg'),
(9, 'img3.jpg'),
(10, 'img1.jpg'),
(11, 'img6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password_confirm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `middleName`, `gender`, `email`, `mobile`, `password`, `password_confirm`) VALUES
(1, 'Gabriel', 'Benedict', 'Bulus', 'Male', 'michaelgabriel5968@yahoo.com', '08137950200', '1995', '1995');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `picture`) VALUES
(1, 'p11.jpg'),
(2, 'p12.jpg'),
(3, 'p13.jpg'),
(4, 'p11.jpg'),
(5, 'p12.jpg'),
(6, 'p12.jpg'),
(7, 'p11.jpg'),
(9, 'p12.jpg'),
(10, 'p11.jpg'),
(11, 'p13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burial`
--
ALTER TABLE `burial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer_reservation`
--
ALTER TABLE `customer_reservation`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `burial`
--
ALTER TABLE `burial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_request`
--
ALTER TABLE `customer_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_reservation`
--
ALTER TABLE `customer_reservation`
  MODIFY `transaction_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_request`
--
ALTER TABLE `customer_request`
  ADD CONSTRAINT `customer_request_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `signup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_reservation`
--
ALTER TABLE `customer_reservation`
  ADD CONSTRAINT `customer_reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
