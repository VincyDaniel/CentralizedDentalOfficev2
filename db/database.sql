-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 10:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `item_name`, `item_quantity`) VALUES
(15, 'Dental Floss', 200),
(16, 'Toothpaste (fluoride-based)', 300),
(17, 'Toothbrush (manual)', 150),
(18, 'Toothbrush (electric)', 2000),
(19, 'Mouthwash (antiseptic)', 500),
(20, 'Dental Filling Material (composite)', 1500),
(21, 'Dental Cement', 1000),
(22, 'Dental Impression Material (alginate)', 500),
(23, 'Dental Anesthetic (lidocaine)', 300),
(24, 'Dental Burs (assorted types)', 500),
(25, 'Dental Mirror', 200),
(26, 'Dental Probe', 150),
(27, 'Dental Scalers and Curettes', 500),
(28, 'Dental X-Ray Film', 2000),
(29, 'Disposable Gloves', 500),
(30, 'Dental Cotton Rolls', 200),
(31, 'Dental Saliva Ejectors', 150),
(32, 'Dental Mixing Bowls and Spatulas', 300),
(33, 'Dental Handpieces (air-driven)', 5000),
(34, 'Sterilization Pouches', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `address`, `email`, `contact_no`, `age`, `gender`, `username`, `password`) VALUES
(11, 'Adam', 'Buenaventura', 'Pasig', 'datascience22024@gmail.com', '097577757574', 20, 'Male', 'adam', '123456'),
(14, 'Vince', 'Del Rosario', 'Bulacan', 'datascience12024@gmail.com', '097744576753', 21, 'Male', 'vince', '123456'),
(15, 'Christian', 'So', 'Las Pinas', 'SampleEmail1@gmail.com', '09775564654', 21, 'Male', 'christian', '123456'),
(16, 'Jan', 'Batista', 'Cavite City', 'SampleEmail2@gmail.com', '09776647574', 25, 'Female', 'drex', '123456'),
(17, 'Josh', 'Sinturon', 'Tagaytay', 'SampleEmail3@gmail.com', '09774663546', 56, 'Male', 'josh', '123456'),
(18, 'Paula', 'Panso', 'Bulacan', 'SampleEmail4@gmail.com', '09777746574', 16, 'Female', 'paula', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `date`, `message`) VALUES
(8, '', 'Good Morning!');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `member_id`, `date`, `service_id`, `Number`, `status`) VALUES
(119, 16, '09/05/2024', 58, 1, 'Done'),
(120, 16, '10/05/2024', 51, 1, 'Pending'),
(121, 18, '09/05/2024', 56, 1, 'Pending'),
(123, 17, '21/08/2024', 59, 1, 'Pending'),
(124, 14, '09/05/2024', 46, 1, 'Pending'),
(125, 11, '11/05/2024', 40, 1, 'Done'),
(126, 11, '09/05/2024', 43, 1, 'Pending'),
(127, 11, '18/05/2024', 54, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_offer` varchar(100) NOT NULL,
  `price` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_offer`, `price`) VALUES
(40, 'Panoramic X-Ray', 2500.00),
(41, 'TMJ (4 Views)', 1500.00),
(42, 'CBCT (Cone Beam Computed Tomography)', 5000.00),
(43, 'Cephalometric', 2500.00),
(44, 'Hand Wrist Radiograph', 1000.00),
(45, 'Occlusal X-Ray', 1000.00),
(46, 'Orthocast', 2000.00),
(47, 'Periapical X-Ray', 1000.00),
(48, 'EXTRA & INTRO PHOTOGRAPH', 1000.00),
(50, 'Dental Implants', 20000.00),
(51, 'Oral Surgery', 15000.00),
(52, 'Teeth Whitening', 5000.00),
(53, 'Gum Treatment', 3000.00),
(54, 'Pediatric Dentistry', 1500.00),
(55, 'Cosmetic Dentistry', 15000.00),
(56, 'Root Canal Therapy', 5000.00),
(57, 'TMJ Therapy', 10000.00),
(58, 'Orthodontics (Braces, Retainers, Etc.)', 15000.00),
(59, 'Prosthodontics (Dentures, Veneers, Crowns and Bridges, Etc.)', 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(10, 'teph', 'teph'),
(11, 'risu', 'risu'),
(12, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
