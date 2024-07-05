-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `ethnicity` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `marital_status` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `birth_day` varchar(20) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_phone` varchar(20) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(20) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `special_skills` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `marital_status_parent` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `nickname`, `nationality`, `ethnicity`, `religion`, `marital_status`, `date_of_birth`, `birth_day`, `height`, `gender`, `residence`, `current_address`, `phone`, `email`, `father_name`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `special_skills`, `hobbies`, `marital_status_parent`) VALUES
(1, 'ภูวนนท์', 'แก้วแดง', 'เจมส์', 'ไทย', 'ไทย', 'พุทธ', 'โสด', '1998-08-12', 'วันพุธ', 172, 'ชาย', '15/13 หมู่บ้านขวัญนคร ตำบลเชียงเงิน อำเภอเมือง จังหวัดตาก 63000', '380/473 ถ.รัตนาธิเบศร์, ต.บางกระสอ 82/73 ถนน รัตนาธิเบศร์ บางกระสอ กรุงเทพมหานคร 11000', '063-882-9070', 'PhuwanonKeawdang@gmail.com', 'นายนัน แก้วแดง', '-', '-', 'นางสายทร เกตุตรง', '081-887-2229', 'ข้าราชการ (ครู)', 'เขียนโปรแกรม,กีฬา(ปิงปอง)', 'อ่านหนังสือ และเรียนรู้เทคโนโลยีใหม่ๆ', 'หย่าร้าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
