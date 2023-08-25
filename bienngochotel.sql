-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 04:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bienngochotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `empid` int(100) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`empid`, `Emp_Email`, `Emp_Password`) VALUES
(1, 'Admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `NoofRoom` int(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `noofdays` int(30) NOT NULL,
  `roomtotal` double(8,2) NOT NULL,
  `bedtotal` double(8,2) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `mealtotal` double(8,2) NOT NULL,
  `finaltotal` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Name`, `Email`, `RoomType`, `Bed`, `NoofRoom`, `cin`, `cout`, `noofdays`, `roomtotal`, `bedtotal`, `meal`, `mealtotal`, `finaltotal`) VALUES
(70, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Superior Room', 'Double', 1, '2023-08-19', '2023-08-20', 1, 43.48, 0.87, 'Full Board', 3.48, 47.83),
(71, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Deluxe Room', 'Triple', 1, '2023-08-19', '2023-08-20', 1, 34.80, 1.04, 'Breakfast', 2.09, 37.93),
(72, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Guest House', 'Quad', 1, '2023-08-20', '2023-08-22', 2, 60.88, 2.44, 'Half Board', 7.31, 70.62),
(73, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Single Room', 'Triple', 1, '2023-08-23', '2023-08-24', 1, 26.08, 0.78, 'Full Board', 3.13, 29.99),
(74, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Superior Room', 'Double', 1, '2023-08-20', '2023-08-22', 2, 86.96, 1.74, 'Breakfast', 3.48, 92.18),
(75, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Guest House', 'Double', 1, '2023-08-22', '2023-08-24', 2, 60.88, 1.22, 'Breakfast', 2.44, 64.53);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `bedding` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`) VALUES
(64, 'Superior Room', 'Đôi'),
(67, 'Deluxe Room', 'Đôi'),
(69, 'Deluxe Room', 'Ba'),
(71, 'Guest House', 'Đôi'),
(72, 'Guest House', 'Ba'),
(75, 'Single Room', 'Đôi'),
(76, 'Single Room', 'Đơn'),
(77, 'Single Room', 'Đơn'),
(79, 'Single Room', 'Bốn'),
(80, 'Superior Room', 'Đôi'),
(81, 'Guest House', 'Đôi'),
(82, 'Guest House', 'Ba');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `Meal` varchar(30) NOT NULL,
  `NoofRoom` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Name`, `Email`, `Country`, `Phone`, `RoomType`, `Bed`, `Meal`, `NoofRoom`, `cin`, `cout`, `nodays`, `stat`) VALUES
(70, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Superior Room', 'Double', 'Full Board', '1', '2023-08-19', '2023-08-20', 1, 'Confirm'),
(71, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Deluxe Room', 'Triple', 'Breakfast', '1', '2023-08-19', '2023-08-20', 1, 'Confirm'),
(72, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Guest House', 'Quad', 'Half Board', '1', '2023-08-20', '2023-08-22', 2, 'Confirm'),
(73, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Single Room', 'Triple', 'Full Board', '1', '2023-08-23', '2023-08-24', 1, 'Confirm'),
(74, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Superior Room', 'Double', 'Breakfast', '1', '2023-08-20', '2023-08-22', 2, 'Confirm'),
(75, 'NGUYỄN MẬU TÂM', 'nmtam3005@gmail.com', 'Vietnam', '0972798206', 'Guest House', 'Double', 'Breakfast', '1', '2023-08-22', '2023-08-24', 2, 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Username`, `Email`, `Password`) VALUES
(7, 'nmtam3005', 'nmtam3005@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `work`) VALUES
(26, 'Đinh Ngọc Tài', 'Dọn dẹp'),
(27, 'Đinh Ngọc Tài', 'Bồi bàn'),
(28, 'NGUYỄN MẬU TÂM', 'Quản lý'),
(29, 'Trần Đồng Nghiệp', 'Dọn dẹp'),
(30, 'Nguyễn Lê Thanh Hiền', 'Đầu bếp'),
(31, 'Nguyễn Việt Tiến', 'Đầu bếp'),
(33, 'Nguyễn Đăng Khuyển', 'Tiếp tân'),
(34, 'Huỳnh Trần Ý Nhi', 'Tiếp tân'),
(35, 'Jo In', 'Bồi bàn'),
(36, 'Lâm Thanh Sơn', 'Dọn dẹp'),
(37, 'Ngô Minh Trung', 'Tiếp tân'),
(38, 'Nguyễn Văn Trung', 'Tiếp tân');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `empid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
