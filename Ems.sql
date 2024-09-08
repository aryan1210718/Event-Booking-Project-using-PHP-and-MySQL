-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 06:41 PM
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
-- Database: `EMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `event_id` int(5) NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_people` int(10) NOT NULL,
  `event_price` float NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`event_id`, `event_img`, `event_name`, `event_people`, `event_price`, `Duration`, `Date`, `Location`, `Description`) VALUES
(1, '..\\User\\readme-images\\b1.jpg', 'Birthday Party', 100, 21000, '2 Hours', '11/5/2024', 'Ganpat Vidyanagar Mehsana-Gozaria, Highway, Kherva, Gujarat 384012', 'Wear The Carton Costumes Welcome To Party.'),
(2, '..\\User\\readme-images\\b2.jpg', 'Marraige Ceremony', 40, 27000, '1 day', '2024-09-15', 'Grand Plaza Hotel, New York City', 'A beautiful ceremony celebrating the union of two souls in matrimony.'),
(3, '..\\User\\readme-images\\images (1).jpg', 'Food Festia', 10, 14000, '3 days', '2024-07-20 to 2024-07-22', 'Central Park, New York City', 'A gastronomic delight featuring a variety of cuisines from around the world.'),
(4, '..\\User\\readme-images\\image.png', 'Carnival', 70, 71000, '1 day', '2024-08-10', 'Main Street, Rio de Janeiro', 'A vibrant celebration of music, dance, and culture with colorful costumes and lively parades.'),
(5, '..\\User\\readme-images\\2.jpg', 'DJ Party', 50, 15000, '5 hours', '2024-07-20', 'The Clubhouse, Downtown', 'An electrifying night filled with pulsating beats, energetic dance floors, and mesmerizing light shows.'),
(6, '..\\User\\readme-images\\1.jpg', 'Ring Ceremony', 60, 21000, '3 hours', '2024-08-15', 'Grand Hall, Rosewood Manor', 'A beautiful celebration of love and commitment, marking the beginning of a lifetime together.');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_data`
--

CREATE TABLE `ticket_data` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `No_Of_Tickets` int(11) NOT NULL,
  `event_price` decimal(10,2) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `qr_code_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_data`
--

INSERT INTO `ticket_data` (`id`, `user_id`, `event_img`, `event_name`, `No_Of_Tickets`, `event_price`, `duration`, `date`, `location`, `description`, `total_price`, `qr_code_path`) VALUES
(12, '5 ', '..User\readme-images1.jpg', 'Birthday Party', 2, 21000.00, '2 Hours', '11/5/2024', 'Ganpat Vidyanagar Mehsana-Gozaria, Highway, Kherva, Gujarat 384012', 'Wear The Carton Costumes Welcome To Party.', '42000', 'qr_codes/q10.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(5) NOT NULL,
  `full_name` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `full_name`, `username`, `email`, `password`) VALUES
(1, 'aryan rami', 'aryan_07', '123@gmail.com', '123'),
(3, 'efverf', 'aryan_07', '123@gmail.com', '453'),
(4, 'efverf', 'aryan_07', '123@gmail.com', '453'),
(5, 'Yaksh', 'Yaksh Patel', 'admin@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `ticket_data`
--
ALTER TABLE `ticket_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_data`
--
ALTER TABLE `ticket_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
