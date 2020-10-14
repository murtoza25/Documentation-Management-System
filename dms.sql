-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 07:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `admin_username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `admin_username`, `password`) VALUES
(1, 'imam', 'reza', 'imr@gmail.com', 'imam', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cdip`
--

CREATE TABLE `cdip` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `student_name`, `email`, `message`, `file`, `status`, `date`) VALUES
(15, 'murtoza ahmed', 'mahmed153043@bscse.uiu.ac.bd', 'iwadfgsdfg sdgfh', '______Thesis_Title______-1.pdf', 'accepted', '13 July,2020 07:31:21 PM'),
(16, 'imam reza reza', 'imamrafi1994@gmail.com', 'i am an software developer. ', 'imgtopdf_generated_1507201419006.pdf', 'unaccepted', '15 July,2020 08:31:48 PM'),
(17, 'Mahjabin Rahman Raya', 'mahjabinrahman95@gmail.com', 'i am a front end developer ', 'imgtopdf_generated_1507201419006.pdf', 'unaccepted', '15 July,2020 08:36:02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file`, `date`, `status`) VALUES
(5, 'Lecture pdf', 'imgtopdf_generated_1507201419006.pdf', '15 July,2020 08:08:36 PM', 'published'),
(6, 'Project pic', 'christopher-gower-m_HRfLhgABo-unsplash.jpg', '15 July,2020 08:11:04 PM', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `content`, `status`, `tags`, `image`, `pdf`, `video`, `author`) VALUES
(15, '15 July,2020 08:54:13 PM', 'The orientation class of the 6th batch of Introduction to Python & Big Data Analysis was held on 3rd January 2020.', '', 'draft', 'Orientation Program', 'IMG_3040-1024x768.jpg', '', '', 'Admin'),
(16, '15 July,2020 08:56:21 PM', 'Last Date of Admission Extended up to 6th November 2019 for Web Design & Development', 'Admission Date Extended up to 6th November 2019\r\nClass starts from 8th November 2019\r\n\r\nCall us at 01788670149/01675315160', 'published', '', 'notice.png', '', '', 'Admin'),
(17, '15 July,2020 09:00:11 PM', 'The Orientation class of Introduction to Python & Big Data Analysis has been held on 11th October 2019.', '', 'published', '', '4.jpg', '', '2.jpg', 'Admin'),
(18, '15 July,2020 09:01:33 PM', 'Accounting Management System Class Starts & Class Time- Fall 2020', 'It is notified for information of all concerned students admitted in&nbsp; Fall&nbsp;2020&nbsp;at Accounting Management System &nbsp;in CDIP, UIU should check the following class time.\r\n\r\nAccounting Management System:&nbsp;\r\n\r\nCourse Starts from 3rd&nbsp;November, 2020&nbsp;(Friday)-(Tentative)\r\n\r\nClass Time: 9AM to 12PM\r\n\r\nLab: 12 (5th Floor, UIU 4th Campus)\r\n\r\n**** Few Seats are available&nbsp;\r\n\r\nLast Date of Admission is : 2nd November, 2020(Thursday)', 'published', '', '3.jpg', '', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `date`, `title`, `content`, `status`, `tags`, `image`, `pdf`, `video`, `author`) VALUES
(14, '15 July,2020 08:05:10 PM', 'Eid vacation', 'from 26 july to 4 august the campus will remain close&nbsp;', 'published', 'Eid-ul-fitar,holiday', '', '', '', 'Admin'),
(15, '15 July,2020 08:16:33 PM', 'Mid exam date', 'From August 16-23 mid assesment will continue .', 'draft', 'Mid assessment date', '108815084_1984887604976534_2328598951953029738_o.jpg', '', '', 'Admin'),
(16, '15 July,2020 08:50:47 PM', 'Position Open for .NET Developer', 'Knowledge of C#,&nbsp; ASP.NET (MVC), ASP .NET Core &amp; MS Sql Server is required.\r\n\r\nFreshers are encouraged to apply\r\n\r\nJob Location: Uttara\r\n\r\nLast Date of Application: 10th December 2019', 'draft', '', 'Job-Post3-600x482.jpg', '', '', 'Admin'),
(17, '15 July,2020 08:51:45 PM', 'CDIP, UIU will remain closed 17th March to 31st March 2020', 'As per Govt. Directive, CDIP, United International University will remain closed from March 18, 2020 (Wednesday) to March 31, 2020 (Tuesday).\r\n\r\nHowever we are planning to take classes online from the next upcoming Friday ( 20th March 2020). Please keep eye on the email for the next instruction.\r\n\r\nThanks', 'draft', '', '', '', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `nid`, `address`, `mobile_no`, `status`) VALUES
(4, 'murtoza', 'ahmed', 'immumit@gmail.com', 'mumit25', 'popo', '', '', '', 'confirmed'),
(9, 'Marzouk', 'Ahmed', 'evadeheisenberg@gmail.com', 'anik', '1234', '4365678679563424', '20/1 noyapolton', '018235943535', 'unconfirmed'),
(10, 'moyur', 'Islam', 'hyyttyjjtj@gmail.com', 'sadaf', '1234', '34647548585', 'dhanmondi', '017634545356', 'confirmed'),
(11, 'imam reza', 'reza', 'imamrafi1994@gmail.com', 'rafi', '1234', '0000000', '****', '*****', 'confirmed'),
(12, 'Mahjabin Rahman', 'Raya', 'mahjabinrahman95@gmail.com', 'raya', '1234', '1111', '****', '*****', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdip`
--
ALTER TABLE `cdip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `cdip`
--
ALTER TABLE `cdip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
