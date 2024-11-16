-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 06:10 AM
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
-- Database: `b112`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `current_org` varchar(500) NOT NULL,
  `org_address` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`_id`, `name`, `email`, `phone`, `current_org`, `org_address`, `designation`, `created_at`) VALUES
(1, 'Ahmad Raza Shibli', 'hammad@testing.com', '987654321', 'rf', 'Theodor-Heuss-Straße 11', 'Programmer', '2024-10-13 18:39:36'),
(2, 'Ahmad Raza Shibli', 'samuel97smith67@gmail.com', '7903042618', 'amu', 'Theodor-Heuss-Straße 11', 'Web', '2024-10-13 18:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_type` int(1) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `working` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`_id`, `email`, `password`, `user_type`, `created_on`, `working`) VALUES
(1, 'arshibli19@gmail.com', '$2y$10$NMSSaKoXIE1bFT5m.mGReeBfyMAJ9794N5B2LSWvbdgsNm3rF1kRC', 1, '2024-10-13 01:11:59', 0),
(2, 'hamza10abc@gmail.com', '$2y$10$EKuBTt3y/WgJHmX3vjC4qetnn1wf2HR.Oon9ecXhWJleuhbW3d8aK', 2, '2024-10-13 01:15:51', 0),
(3, 'ahmedrazashibli@gmail.com', '$2y$10$rPaP4gMmvNhLZinjYG15k.jEmXcHhRPDlELYg07guoxhvkaa6Gluy', 1, '2024-10-13 01:24:47', 0),
(4, 'ahmadrazashibli@gmail.com', '$2y$10$NCFV5vX0nYjSv9LZG8/pgOn4x93FyJnv9ndCg4KrLuuuNxbkR9CfK', 3, '2024-10-13 01:44:21', 0),
(5, 'ahmad.shibli@stud.uni-goettingen.de', '$2y$10$HvCrQapX7m3YL4cGs9uY.ud6NJoRHW7ANaIVuGCFK6ZwQ.Jg3le.a', 3, '2024-10-13 01:45:41', 0),
(6, 'hammad@testing.com', '$2y$10$o5X./J5JxRa0N8hhxiyy3e6QgVRfhgoRaTCoSvFb/k1.he9dtZqx6', 4, '2024-10-13 18:39:36', 0),
(7, 'samuel97smith67@gmail.com', '$2y$10$RZ1.4WimHGJnAKipNAmuIuAhC/ilVn6O/86tSas./QWFYmwfsW9BW', 4, '2024-10-13 18:49:42', 0),
(8, 'sarim@example.com', '$2y$10$EB/xyZoXcuk7FDsq324FaulMH7WZzZBxe4nFgflrFeicotaRsS8T2', 3, '2024-10-13 19:00:49', 0),
(9, 'test@test', '$2y$10$9LKGni3vSjGQDpduh9njx.qLusxCJn5/mHxXJIlILu3mLmAhPD5Qi', 3, '2024-10-13 20:41:37', 0),
(10, 'sarim@sarim.com', '$2y$10$w4xtdNi/SfWUxK7IIA69UeE2N1AxhS6ExdDUVdpJxsvmGfIEs.Pny', 3, '2024-10-18 20:00:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth_admin`
--

CREATE TABLE `auth_admin` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `org` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reviewer`
--

CREATE TABLE `auth_reviewer` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `working` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_logs`
--

CREATE TABLE `comment_logs` (
  `_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `done_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_logs`
--

INSERT INTO `comment_logs` (`_id`, `paper_id`, `comment`, `done_at`) VALUES
(2, 2, 'rtedgh', '2024-10-13 04:55:16'),
(3, 2, 'test', '2024-10-13 21:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`_id`, `name`, `email`, `subject`, `message`, `timeWhen`) VALUES
(1, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 'Testing Messages', 'fdgrfgrgr', '2024-11-16 00:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `datasets`
--

CREATE TABLE `datasets` (
  `_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `research_area` varchar(500) NOT NULL,
  `research_theme` text NOT NULL,
  `research_note` text NOT NULL,
  `enrolled_course` varchar(100) NOT NULL,
  `org_address` text NOT NULL,
  `funding` varchar(500) NOT NULL,
  `supervisor` varchar(500) NOT NULL,
  `co-supervisor` varchar(500) NOT NULL,
  `data_type` varchar(50) NOT NULL,
  `data_format` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `accepted` int(1) NOT NULL,
  `data_location` varchar(200) NOT NULL,
  `scholar_id` varchar(100) NOT NULL,
  `research_org` varchar(200) NOT NULL,
  `assigned` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datasets`
--

INSERT INTO `datasets` (`_id`, `author`, `research_area`, `research_theme`, `research_note`, `enrolled_course`, `org_address`, `funding`, `supervisor`, `co-supervisor`, `data_type`, `data_format`, `created_at`, `accepted`, `data_location`, `scholar_id`, `research_org`, `assigned`) VALUES
(1, 'name of the author', 'economics', 'research theme', 'research note', 'course enrolled', 'address of the org', 'funding agency', 'supervisor', 'cosupervisor', 'data type', 'data format', '2024-10-13 02:44:59', 1, 'datasets/Amir Sohail CV dox.html', 'arshibli19@gmail.com', 'research org', 1),
(2, 'name of the author2', 'eco', 'research theme2', 'research note2', 'course enrolled2', 'address of the org2', 'funding agency2', 'supervisor2', 'cosupervisor2', 'data type2', 'data format2', '2024-10-13 04:18:21', 1, 'datasets/today.txt', 'arshibli19@gmail.com', 'research org2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` text NOT NULL,
  `timeWhen` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`_id`, `name`, `email`, `rating`, `comment`, `timeWhen`) VALUES
(1, 'arshibli19@gmail.com', '', 5, 'gdf', '2024-11-16 00:31:19'),
(2, 'arshibli19@gmail.com', '', 5, 'feg', '2024-11-16 00:31:19'),
(3, 'arshibli19@gmail.com', '', 5, 'feg', '2024-11-16 00:31:19'),
(4, 'arshibli19@gmail.com', '', 5, 'feg', '2024-11-16 00:31:19'),
(5, 'arshibli19@gmail.com', '', 2, 'urtyhrththrdtf', '2024-11-16 00:31:19'),
(6, '', 'arshibli19@gmail.com', 4, 'dsfsd', '2024-11-16 00:31:19'),
(7, '', 'arshibli19@gmail.com', 5, 'ewt', '2024-11-16 00:31:19'),
(8, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 4, 'erw', '2024-11-16 00:31:19'),
(9, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 4, 'df', '2024-11-16 00:31:19'),
(10, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 4, 'ewrt', '2024-11-16 00:31:19'),
(11, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 4, 'rewt', '2024-11-16 00:31:19'),
(12, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 4, 'rh', '2024-11-16 00:31:19'),
(13, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', 5, 'rehjt', '2024-11-16 00:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `myself`
--

CREATE TABLE `myself` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myself`
--

INSERT INTO `myself` (`_id`, `email`, `password`, `created_at`) VALUES
(1, 'arshibli19@gmail.com', '123', '2024-10-07 09:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `posted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `issue_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`_id`, `title`, `message`, `posted_by`, `posted_on`, `issue_for`) VALUES
(1, 'ty', 'rt', 'rt', '2024-10-13 02:47:50', 'viewer'),
(2, 'fhj', 'fgh', 'gfhthr', '2024-10-13 02:48:01', 'viewer'),
(3, 'testing adfmin notice', 'admin notice', '', '2024-10-13 20:31:37', 'scholar'),
(4, 'fghhtgfdfgd', 'fdgfgdfgdfgdfdg', 'samuel97smith67@gmail.com', '2024-10-13 20:33:54', 'scholar');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `enrollment` varchar(20) NOT NULL,
  `organisation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`_id`, `name`, `email`, `phone`, `enrollment`, `organisation`) VALUES
(1, 'Ahmad Raza Shibli', 'arshibli19@gmail.com', '7903042618', 'gl1667', 'amu'),
(2, 'Ahmad Raza Shibli', 'hamza10abc@gmail.com', '7903042618', 'viewer', 'viewer'),
(3, 'Hamza', 'ahmedrazashibli@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reply_logs`
--

CREATE TABLE `reply_logs` (
  `_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `done_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reply_logs`
--

INSERT INTO `reply_logs` (`_id`, `comment_id`, `reply`, `done_at`) VALUES
(2, 2, 'testing reply', '0000-00-00 00:00:00'),
(3, 2, 'hgc', '0000-00-00 00:00:00'),
(4, 3, 'test received', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `research_intrest` varchar(500) NOT NULL,
  `org` varchar(500) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`_id`, `name`, `email`, `phone`, `research_intrest`, `org`, `designation`, `created_at`) VALUES
(1, 'Ahmad Raza Shibli', 'ahmadrazashibli@gmail.com', '7903042618', 'dfgh', '', 'Programmer', '2024-10-13 01:44:21'),
(2, 'Ahmad Raza Shibli', 'ahmad.shibli@stud.uni-goettingen.de', '7903042618', 'dfgh', 'amu', 'Programmer', '2024-10-13 01:45:41'),
(3, 'Hamza', 'sarim@example.com', '', '', 'amu', '', '2024-10-13 19:00:49'),
(4, 'Hamza', 'test@test', '', '', 'amu', '', '2024-10-13 20:41:37'),
(5, 'Hamza', 'sarim@sarim.com', '', '', 'rf', '', '2024-10-18 20:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `trace`
--

CREATE TABLE `trace` (
  `_id` int(11) NOT NULL,
  `action` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_by` varchar(100) NOT NULL,
  `effects` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_assigned`
--

CREATE TABLE `work_assigned` (
  `_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `rev_id` varchar(100) NOT NULL,
  `done_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_assigned`
--

INSERT INTO `work_assigned` (`_id`, `paper_id`, `rev_id`, `done_at`) VALUES
(2, 1, 'test@test', '2024-10-13 20:58:10'),
(3, 2, 'ahmad.shibli@stud.uni-goettingen.de', '2024-10-13 21:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `auth_admin`
--
ALTER TABLE `auth_admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `auth_reviewer`
--
ALTER TABLE `auth_reviewer`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `comment_logs`
--
ALTER TABLE `comment_logs`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `datasets`
--
ALTER TABLE `datasets`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `myself`
--
ALTER TABLE `myself`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `reply_logs`
--
ALTER TABLE `reply_logs`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `trace`
--
ALTER TABLE `trace`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `work_assigned`
--
ALTER TABLE `work_assigned`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auth_admin`
--
ALTER TABLE `auth_admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reviewer`
--
ALTER TABLE `auth_reviewer`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_logs`
--
ALTER TABLE `comment_logs`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datasets`
--
ALTER TABLE `datasets`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `myself`
--
ALTER TABLE `myself`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reply_logs`
--
ALTER TABLE `reply_logs`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trace`
--
ALTER TABLE `trace`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_assigned`
--
ALTER TABLE `work_assigned`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
