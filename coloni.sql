-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 05:43 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coloni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_id`, `name`, `phone_number`, `email`, `password`) VALUES
(1, 'A-001', 'Kazi', '0167', 'kazi@gmail.com', '123456'),
(2, '02', 'Kabir', '1834226273', 'kabir@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id_assign` int(10) NOT NULL,
  `assign_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `maid_servant_id_maid_servent` int(10) NOT NULL,
  `post_id_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_party_center`
--

CREATE TABLE `booking_party_center` (
  `booking_id` int(4) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `estimate_person` int(4) NOT NULL,
  `time_slot` varchar(30) NOT NULL,
  `booking_date` date NOT NULL,
  `program_details` text,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_party_center`
--

INSERT INTO `booking_party_center` (`booking_id`, `mobile_number`, `email`, `estimate_person`, `time_slot`, `booking_date`, `program_details`, `status`, `user_id`) VALUES
(1, 1834226273, '', 50, '6:30pm-10pm', '2019-05-05', 'Birthday Party', 'accept', 2),
(2, 1932658920, '', 50, '6:30pm-10pm', '2019-05-10', 'Birthday Party', 'accept', 2),
(3, 1536251302, 'robi123@gmail.com', 30, 'Full Time', '2019-05-10', 'Summer Party', 'pending', 2),
(4, 1536251302, 'robi123@gmail.com', 30, 'Full Time', '2019-05-10', 'Summer Party', 'pending', 2),
(5, 1310235469, 'kasem123@gmail.com', 30, 'Full Time', '2019-05-08', 'Enjoy party', 'pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `maid_servant`
--

CREATE TABLE `maid_servant` (
  `id_maid_servant` int(10) NOT NULL,
  `maid_servant_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maid_servant`
--

INSERT INTO `maid_servant` (`id_maid_servant`, `maid_servant_id`, `name`, `address`, `phone_number`) VALUES
(1, '', 'Khadija', 'Kolabagan, Dhaka 119', '01723562310'),
(2, '', 'Ina Ara', 'Mogbazar, Dhaka', '17120322652'),
(3, '', 'Rahima Begum', 'Kawran Bazar, Dhaka', '01772377896'),
(4, '', 'Asma Akther', 'Mogbazar, Dhaka', '01785962301');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'reject',
  `type` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `accept_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `status`, `type`, `post_id`, `accept_time`) VALUES
(1, 'accept', 'partyCenter', 1, '2019-05-02 17:10:37'),
(2, 'accept', 'Laundry Request', 1, '2019-05-04 09:54:18'),
(3, 'accept', 'partyCenter', 2, '2019-05-04 10:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `working_type` varchar(20) NOT NULL,
  `working_month_or_day_number` int(6) NOT NULL DEFAULT '1',
  `working_duration` varchar(20) NOT NULL,
  `work_start_time` time NOT NULL,
  `work_end_time` time NOT NULL,
  `house_size_square_feet` int(6) NOT NULL DEFAULT '0',
  `house_cleaning_cost` int(6) NOT NULL DEFAULT '0',
  `number_of_people_cloth` int(6) NOT NULL,
  `cloth_watching_cost` int(6) NOT NULL DEFAULT '0',
  `total_washroom` int(6) NOT NULL DEFAULT '0',
  `total_washroom_cost` int(6) NOT NULL DEFAULT '0',
  `budget` varchar(25) NOT NULL,
  `servant_age` varchar(20) NOT NULL,
  `working_details` text NOT NULL,
  `user_id_user` int(10) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `working_type`, `working_month_or_day_number`, `working_duration`, `work_start_time`, `work_end_time`, `house_size_square_feet`, `house_cleaning_cost`, `number_of_people_cloth`, `cloth_watching_cost`, `total_washroom`, `total_washroom_cost`, `budget`, `servant_age`, `working_details`, `user_id_user`, `post_date`) VALUES
(1, 'Full Time', 5, 'Month', '06:00:00', '10:00:00', 1200, 24, 5, 50, 3, 30, '104', '24-30', '', 1, '2019-04-26'),
(2, 'Part Time', 30, 'Day', '07:00:00', '08:00:00', 1300, 26, 5, 50, 2, 20, '96', '30++', '', 1, '2019-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `flat_number` varchar(20) NOT NULL,
  `house_number` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_id`, `first_name`, `last_name`, `flat_number`, `house_number`, `phone_number`, `email`, `password`) VALUES
(1, '', 'Shakib', 'Kazi', '15', '112', '1834226273', 'kabir9385@gmail.com', '123456'),
(2, '', 'Kabir', 'Hossain', 'Malibag Bazar Road, ', '5/b', '1834226273', 'kabir@gmail.com', '123456'),
(3, '', 'Sumon', 'Khan', '3b', '1062/c', '01985236201', 'sumon123@gmail.com', '123456'),
(4, '', 'Rahim', 'Hossain', '6/C', '123/b', '017230298201', 'rahim123@gmail.com', '123456'),
(5, '', 'Ekram', 'Hossain', 'g', '112', '1834226273', 'ekram12345@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE;

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD UNIQUE KEY `id_assign` (`id_assign`),
  ADD KEY `maid_servant_id_maid_servent` (`maid_servant_id_maid_servent`),
  ADD KEY `post_id_post` (`post_id_post`);

--
-- Indexes for table `booking_party_center`
--
ALTER TABLE `booking_party_center`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `maid_servant`
--
ALTER TABLE `maid_servant`
  ADD UNIQUE KEY `id_maid_servant` (`id_maid_servant`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD UNIQUE KEY `id_post` (`id_post`),
  ADD KEY `user_id_user` (`user_id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id_assign` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_party_center`
--
ALTER TABLE `booking_party_center`
  MODIFY `booking_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maid_servant`
--
ALTER TABLE `maid_servant`
  MODIFY `id_maid_servant` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
