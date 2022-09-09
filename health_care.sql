-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 05:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `created_dt`, `updated_dt`) VALUES
(1, 'Mohit', 'mohit@gmail.com', 'mohit', '2022-01-08 14:07:26', '2022-01-08 14:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `health_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appoint_dt` datetime NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_name`, `patient_age`, `user_id`, `health_id`, `doctor_id`, `appoint_dt`, `created_dt`, `updated_dt`) VALUES
(1, 'Patient1', 18, 8, 2, 7, '2022-03-06 10:28:00', '2022-03-06 10:29:43', '2022-03-06 10:29:43'),
(2, 'Patient1', 18, 8, 2, 7, '2022-03-25 11:32:00', '2022-03-25 11:32:29', '2022-03-25 11:32:29'),
(3, 'Patient1', 18, 8, 2, 7, '2022-03-26 10:44:00', '2022-03-26 10:44:13', '2022-03-26 10:44:13'),
(4, 'Patient1', 18, 8, 2, 7, '2022-03-26 12:49:00', '2022-03-26 12:49:49', '2022-03-26 12:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`, `created_dt`, `updated_dt`) VALUES
(2, 'Mohit', 'mohit@gmail.com', 'About Website', 'Your website is very nice.', '2022-01-24 14:24:34', '2022-01-24 14:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `gender` enum('Female','Male','','') NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('Unblock','Block','','') NOT NULL DEFAULT 'Unblock',
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `location_id`, `doctor_name`, `hospital_name`, `degree`, `gender`, `mobile`, `email`, `password`, `address`, `pincode`, `image`, `status`, `created_dt`, `updated_dt`) VALUES
(7, 1, 'Doctor1', 'Hospital1', 'MBBS', 'Male', 7821036459, 'doctor1@email.com', '45f678b147fdf275c35b60bac2360984', 'Hospital1 ,Ahmedabad', 123456, 'wallpaper.jpg', 'Unblock', '2022-01-26 15:12:07', '2022-01-28 13:26:12'),
(9, 5, 'Doctor2', 'Hospital2', 'MBBS', 'Female', 7821036459, 'doctor2@email.com', '3b02a6fdd669efe9083cc84d15e5699b', 'Hospital1 ,Gandhinagar', 123456, 'wallpaper.jpg', 'Unblock', '2022-01-27 13:46:22', '2022-03-26 11:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` enum('Female','Male','','') NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('Unblock','Block','','') NOT NULL DEFAULT 'Unblock',
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `mobile`, `gender`, `email`, `password`, `image`, `status`, `created_dt`, `updated_dt`) VALUES
(4, 'Mohit Jain', 2135648754, 'Male', 'mohit@gmail.com', 'd8052f9e09a17e6907629e76bbd261cc', 'wallpaper.jpg', 'Unblock', '2022-01-25 15:54:57', '2022-02-08 14:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `health_issue`
--

CREATE TABLE `health_issue` (
  `health_id` int(11) NOT NULL,
  `health_name` varchar(50) NOT NULL,
  `health_description` varchar(100) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_issue`
--

INSERT INTO `health_issue` (`health_id`, `health_name`, `health_description`, `created_dt`, `updated_dt`) VALUES
(2, 'Disease1', 'Disease1 can be recover easily.', '2022-01-27 13:54:48', '2022-01-27 13:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `created_dt`, `updated_dt`) VALUES
(1, 'Ahmedabad', '2022-01-24 15:03:01', '2022-01-24 15:03:01'),
(4, 'Maninagar', '2022-01-24 16:42:08', '2022-01-24 16:42:08'),
(5, 'Gandhinagar', '2022-01-24 16:42:17', '2022-01-24 16:42:17'),
(6, 'Jashoda', '2022-01-24 16:42:27', '2022-01-24 16:42:27'),
(7, 'CTM', '2022-01-24 16:42:34', '2022-01-24 16:42:34'),
(8, 'New Maninagar', '2022-01-24 16:42:44', '2022-01-24 16:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `health_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `company` varchar(20) NOT NULL,
  `medicine_description` varchar(100) NOT NULL,
  `medicine_price` int(50) NOT NULL,
  `medicine_image` varchar(50) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `health_id`, `category`, `medicine_name`, `company`, `medicine_description`, `medicine_price`, `medicine_image`, `created_dt`, `updated_dt`) VALUES
(1, 2, 'Homeopathic', 'Medicine1', 'Company1', 'medicine1', 100, 'wallpaper.jpg', '2022-02-06 11:14:59', '2022-02-06 11:14:59'),
(2, 2, 'Homeopathic', 'Medicine1', 'Company1', 'Medicine1 is used for disease1.', 100, 'wallpaper.jpg', '2022-02-06 11:16:38', '2022-02-06 11:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_medicine`
--

CREATE TABLE `order_medicine` (
  `order_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` enum('Female','Male','','') NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('Unblock','Block','','') NOT NULL DEFAULT 'Unblock',
  `image` varchar(50) NOT NULL,
  `created_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_dt` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `mobile`, `email`, `password`, `status`, `image`, `created_dt`, `updated_dt`) VALUES
(8, 'Mohit Jain', 'Male', 1234567821, 'mohit@gmail.com', 'd8052f9e09a17e6907629e76bbd261cc', 'Unblock', 'Screenshot (4).png', '2022-01-24 15:21:26', '2022-03-26 10:44:42'),
(10, 'hello9', 'Male', 1252127895, 'hello9@gmail.com', '1c52d3d0503eca3c4a6db73af6d428f1', 'Block', 'Screenshot (4).png', '2022-03-26 11:10:00', '2022-03-26 11:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `health_id` (`health_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `health_issue`
--
ALTER TABLE `health_issue`
  ADD PRIMARY KEY (`health_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `health_id` (`health_id`);

--
-- Indexes for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `medicine_id` (`medicine_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `health_issue`
--
ALTER TABLE `health_issue`
  MODIFY `health_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_medicine`
--
ALTER TABLE `order_medicine`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`health_id`) REFERENCES `health_issue` (`health_id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`health_id`) REFERENCES `health_issue` (`health_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD CONSTRAINT `order_medicine_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`),
  ADD CONSTRAINT `order_medicine_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
