-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2019 at 08:04 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_todo`
--

CREATE TABLE `t_todo` (
  `todo_id` int(11) NOT NULL,
  `todo_judul` varchar(50) NOT NULL,
  `todo_startdate` date NOT NULL,
  `todo_duedate` date NOT NULL,
  `todo_deskripsi` text NOT NULL,
  `todo_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_todo`
--

INSERT INTO `t_todo` (`todo_id`, `todo_judul`, `todo_startdate`, `todo_duedate`, `todo_deskripsi`, `todo_status`) VALUES
(1, 'Task Keempat', '2019-09-21', '2019-09-27', 'ini deskripsi task keempat', 'Done'),
(2, 'Task Kedua', '2019-09-24', '2019-09-21', 'ini deskripsi task kedua setelah edit', 'New'),
(3, 'Task Ketiga', '2019-09-18', '2019-09-19', 'ini deskripsi task ketiga setelah edit', 'Progress'),
(4, 'Task Pertama setelah edit', '2019-09-21', '2019-09-28', 'ini deskripsi task pertama', 'New'),
(5, 'Task Kelima', '2019-09-26', '2019-09-30', 'ini deskripsi task kelima', 'Archive'),
(6, 'Berenang', '2019-09-20', '2019-09-20', 'di kolam renang', 'Done'),
(7, 'Kumpul Komunitas Motor Gede', '2019-09-20', '2019-09-20', 'motor harley', 'Archive');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_nohp` varchar(30) NOT NULL,
  `user_createon` date NOT NULL,
  `user_level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_password`, `user_nohp`, `user_createon`, `user_level`) VALUES
(1, 'yuia swandari', 'yulia', 'yulia.swandari@gmail.com', 'c3dhbmRhcmk=', '0850000000', '2019-09-20', '1'),
(2, 'anisa maulana', 'anisa', 'anisa@gmail.com', 'YW5pc2E=', '12345678912', '2019-09-20', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_todo`
--
ALTER TABLE `t_todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_todo`
--
ALTER TABLE `t_todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
