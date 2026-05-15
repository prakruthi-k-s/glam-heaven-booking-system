-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 09:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glam_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `addserv`
--

CREATE TABLE `addserv` (
  `flat_id` int(11) NOT NULL,
  `servicename` varchar(100) NOT NULL,
  `amt` varchar(100) NOT NULL,
  `timess` varchar(100) NOT NULL,
  `fp_id` int(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `oname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addserv`
--

INSERT INTO `addserv` (`flat_id`, `servicename`, `amt`, `timess`, `fp_id`, `pdate`, `phone`, `image`, `oname`) VALUES
(31, 'Dholki Makeup', '7000', '1 hour', 35, '2021-10-05', '9546347586', '../../admin/admincontroller/photo/uploada35.jpg', 'Asmas Makeover'),
(30, 'Wedding Makeup', '12000', '2 hours', 35, '2021-10-05', '9546347586', '../../admin/admincontroller/photo/uploada14.jpg', 'Asmas Makeover'),
(29, 'Reception Makeup', '16000', '1:30', 32, '2021-10-05', '7465367456', '../../admin/admincontroller/photo/uploada41.jpg', 'sajida harisa'),
(26, 'bridal', '10000', '2 hours', 32, '2021-10-03', '7465367456', '../../admin/admincontroller/photo/uploada10.jpg', 'sajida harisa'),
(27, 'mehandi mekeup', '5000', '1 hour', 32, '2021-10-03', '7465367456', '../../admin/admincontroller/photo/uploada16.jpg', 'sajida harisa'),
(28, 'Haldi Makeup', '4000', '1 hour', 32, '2021-10-03', '7465367456', '../../admin/admincontroller/photo/uploada15.jpg', 'sajida harisa'),
(32, 'Bridal', '1200', '3 hours', 35, '2021-10-05', '', '../../admin/admincontroller/photo/upload22 (1).jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `a_id`) VALUES
('admin@gmail.com', 12345, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `fp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminstatus` varchar(100) NOT NULL,
  `location` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beautician`
--

INSERT INTO `beautician` (`fp_id`, `name`, `phone`, `image`, `email`, `password`, `adminstatus`, `location`) VALUES
(35, 'Asmas Makeover', '9546347586', '../../admin/admincontroller/photo/upload/a8.jpg', 'asma@gmail.com', 'asma', 'approve', 2),
(32, 'sajida harisa', '7465367456', '../../admin/admincontroller/photo/upload/a6.jpg', 'sajida@gmail.com', 'saji', 'approve', 3),
(33, 'Suhana makeup artist', '5654323456', '../../admin/admincontroller/photo/upload/a7.jpg', 'suhana@gmail.com', 'suha', 'approve', 2),
(34, 'Aishwarya', '8197005612', '../../admin/admincontroller/photo/upload/666.jpg', 'aish@gmail.com', 'aish', 'approve', 6),
(36, 'fahad khan', '03333343423', '../../admin/admincontroller/photo/upload/666.jpg', 'ma@gmail.com', '456', 'approve', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `b_req_date` varchar(100) NOT NULL,
  `b_status` varchar(200) NOT NULL,
  `b_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `u_id`, `pack_id`, `b_req_date`, `b_status`, `b_date`) VALUES
(1, 12, 4, '2025-03-01', 'approved', '2025-03-18 06:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_des` varchar(250) NOT NULL,
  `cat_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`, `cat_date`) VALUES
(1, 'Bridal', 'Lorem ir adipisicing elit. Quo minus repellendus, culpa aliquam dolore praesentium voluptates unde odio, sed molestiae exercitationem in cupiditate veritatis placeat eius iste eaque? Eius, aliquam.\r\nLorem ipsum dolor sit', '2025-03-07 11:16:15'),
(2, 'Mehendi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo minus repellendus, culpa aliquam dolore praesentium voluptates unde odio, sed molestiae exercitationem in cupiditate veritatis placeat eius iste eaque? Eius, aliquam.\r\n', '2025-03-07 11:16:15'),
(3, 'hello', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo minus repellendus, culpa aliquam dolore praesentium voluptates unde odio, sed molestiae exercitationem in cupiditate veritatis placeat eius iste eaque? Eius, aliquam.\r\n', '2025-03-07 11:16:15'),
(4, 'new', 'sdf', '2025-03-07 11:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ch_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `fp_id` int(100) NOT NULL,
  `usermessage` varchar(1000) NOT NULL,
  `providermessage` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ch_id`, `u_id`, `fp_id`, `usermessage`, `providermessage`) VALUES
(73, 8, 29, 'ho', ''),
(74, 8, 29, '', 'how are you'),
(75, 8, 29, '', 'gwwhwhw'),
(76, 9, 32, '', 'hii'),
(77, 9, 0, 'hello', ''),
(78, 9, 39, 'how you', ''),
(79, 9, 32, 'how you', ''),
(80, 9, 32, 'are you available at 12th december', ''),
(81, 9, 32, '', 'yes'),
(82, 0, 32, '', ''),
(83, 8, 0, 'ddd', ''),
(84, 8, 0, '222', ''),
(85, 8, 0, '', ''),
(86, 8, 0, 'sdsdf', ''),
(87, 8, 0, 'sdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `u_id` int(10) NOT NULL,
  `pack_id` int(10) NOT NULL,
  `f_message` varchar(500) NOT NULL,
  `f_date` datetime NOT NULL DEFAULT current_timestamp(),
  `f_status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `pack_id`, `f_message`, `f_date`, `f_status`) VALUES
(4, 12, 3, 'jsdksdf', '0000-00-00 00:00:00', ''),
(5, 12, 4, 'belksdkfj', '2025-03-18 08:14:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(12) NOT NULL,
  `image` varchar(300) NOT NULL,
  `bid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `image`, `bid`) VALUES
(3, '../../admin/admincontroller/photo/uploadyyy.jpg', 31),
(4, '../../admin/admincontroller/photo/upload22.jpg', 31),
(5, '../../admin/admincontroller/photo/uploadyyy.jpg', 31),
(6, '../../admin/admincontroller/photo/upload22.jpg', 31),
(7, '../../admin/admincontroller/photo/uploada8.jpg', 32),
(8, '../../admin/admincontroller/photo/uploada16.jpg', 32),
(9, '../../admin/admincontroller/photo/uploada40.jpg', 32),
(10, '../../admin/admincontroller/photo/uploada3.jpg', 32);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(12) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `name`) VALUES
(2, 'Mangalore'),
(3, 'kankanady'),
(4, 'falnir'),
(6, 'putturu'),
(7, 'darbe');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(12) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `p_amount` varchar(30) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `p_des` varchar(500) NOT NULL,
  `p_timings` varchar(100) NOT NULL,
  `p_beautician` varchar(100) NOT NULL,
  `p_includes` varchar(500) NOT NULL,
  `p_date` datetime NOT NULL DEFAULT current_timestamp(),
  `p_status` varchar(200) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `p_name`, `cat_id`, `p_amount`, `p_image`, `p_des`, `p_timings`, `p_beautician`, `p_includes`, `p_date`, `p_status`) VALUES
(1, 'sdf', 2, '12', 'uploads/JrnBUqbaCkfootball.jpg', '0', '12r', 'dsfsdf', 'ssdf,sadf,sdf sd,f', '2025-03-07 12:34:55', ''),
(2, 'sdf', 2, '12', 'uploads/SOExoJMXBPfootball.jpg', 'sdfsdf', '12r', 'dsfsdf', 'ssdf,sadf,sdf sd,f', '2025-03-07 12:35:34', ''),
(3, 'dsf', 1, '222', 'uploads/IoyPEnvxGtdownload (4).jpeg', 'sdf', 's3', 'dsf', 'dad, sd,fsdf,sd f', '2025-03-07 12:38:11', 'active'),
(4, 'hello package name', 1, '2490', 'uploads/EclUNjupYPmarriage.jpeg', 'descripition', '2 hrs', 'Admin', 'ksd, ksd f, skdfsd,', '2025-03-11 16:15:53', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `u_id` int(100) NOT NULL,
  `b_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `trans_id` varchar(200) NOT NULL,
  `pp_amount` int(11) NOT NULL,
  `pp_status` varchar(200) NOT NULL DEFAULT 'paid',
  `pp_date` datetime NOT NULL DEFAULT current_timestamp(),
  `pp_type` varchar(200) NOT NULL DEFAULT 'UPI'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `u_id`, `b_id`, `pack_id`, `trans_id`, `pp_amount`, `pp_status`, `pp_date`, `pp_type`) VALUES
(20, 8, 0, 0, '', 0, '', '2025-03-18 00:08:14', ''),
(22, 9, 0, 0, '', 0, '', '2025-03-18 00:08:14', ''),
(23, 12, 1, 4, '123', 2490, 'paid', '2025-03-18 06:34:56', 'UPI');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review` varchar(250) NOT NULL,
  `p_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review`, `p_id`, `name`, `date`) VALUES
(1, '5', 21, 'Moshin', '0000-00-00'),
(3, '5', 26, 'thameeza', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `servbook`
--

CREATE TABLE `servbook` (
  `sb_id` int(12) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `sdate` date NOT NULL,
  `stime` time NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `uid` int(12) NOT NULL,
  `sprice` varchar(12) NOT NULL,
  `bid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servbook`
--

INSERT INTO `servbook` (`sb_id`, `sname`, `bname`, `bdate`, `image`, `sdate`, `stime`, `phone`, `address`, `status`, `uid`, `sprice`, `bid`) VALUES
(3, 'bridal ', 'sajida harisa ', '2021-10-03', '../../admin/admincontroller/photo/uploada10.jpg ', '2021-10-05', '09:35:00', '77777777777', 'putturu', 'accept', 9, '10000 ', 32),
(4, 'mehandi mekeup ', 'sajida harisa ', '2021-10-03', '../../admin/admincontroller/photo/uploada16.jpg ', '2021-10-21', '11:06:00', '77777777777', 'mangalore', 'rejected', 9, '5000 ', 32);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `phone`, `address`, `image`, `email`, `password`, `date`, `status`) VALUES
(12, 'rahul', '123123123', 'mangalore', '../../admin/admincontroller/photo/uploadQR_Scaner.jpg', 'user@gmail.com', '123', '2025-03-07 16:38:21', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addserv`
--
ALTER TABLE `addserv`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `servbook`
--
ALTER TABLE `servbook`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addserv`
--
ALTER TABLE `addserv`
  MODIFY `flat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beautician`
--
ALTER TABLE `beautician`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servbook`
--
ALTER TABLE `servbook`
  MODIFY `sb_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
