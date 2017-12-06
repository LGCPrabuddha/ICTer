-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 06:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltask`
--

CREATE TABLE `alltask` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL,
  `ugroup` varchar(20) NOT NULL,
  `assDate` date NOT NULL,
  `endDate` date NOT NULL,
  `done` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbbag`
--

CREATE TABLE `dbbag` (
  `id` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `b_price` int(7) NOT NULL,
  `description` text NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbbag`
--

INSERT INTO `dbbag` (`id`, `company`, `email`, `tele_no`, `b_price`, `description`, `m_id`, `is_deleted`) VALUES
(1, 'adsad', 'as@gmail.com', 716131767, 5665, 'sakjdjkasjdkasda', '044', 0),
(2, 'adsad', 'as@gmail.com', 716131767, 5665, 'sakjdjkasjdkasda', '044', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbdbag`
--

CREATE TABLE `dbdbag` (
  `id` int(11) NOT NULL,
  `mid` varchar(10) NOT NULL,
  `task` text NOT NULL,
  `description` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbdbag`
--

INSERT INTO `dbdbag` (`id`, `mid`, `task`, `description`, `is_deleted`) VALUES
(1, '44', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(2, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(3, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(4, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(5, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(6, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(7, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(8, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(9, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(10, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(11, '044', ',JZBxkjZXjZhhjx', 'ajfkjdfhsdh skjfs kjfds s', 0),
(12, '027', 'sdfsfsf sd sdfsdf sd sd', 'dfgd gdfgd gdfgdg dfgd fdgd dfgd gdfgdgd ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbdhotel`
--

CREATE TABLE `dbdhotel` (
  `id` int(11) NOT NULL,
  `mid` int(10) NOT NULL,
  `task` text NOT NULL,
  `description` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbdhotel`
--

INSERT INTO `dbdhotel` (`id`, `mid`, `task`, `description`, `is_deleted`) VALUES
(1, 0, 'hjfjfadfjashdasjhdfja ka gjdsgaj asdj gjasdgjasgd jdasgdj gdasjgasjd hgdjasgdja gdjasgdajsdg', 'ahsgfdasf dfahsdfahsdfha fdhasdfah fdahsdfahsdfahsdfahsdf ahgsf dahs hafsdhf hadfahsdha fdhasfdhafsdha fahsfdhasf hafdhasfda', 0),
(2, 0, 'sjdhfsjdfjsdjfgsdg', 'kgfgksgksdfgskfgjsd', 0),
(3, 0, 'sjdhfsjdfjsdjfgsdg', 'kgfgksgksdfgskfgjsd', 0),
(4, 0, 'sjdhfsjdfjsdjfgsdg', 'kgfgksgksdfgskfgjsd', 0),
(5, 12, 'sjdhfsjdfjsdjfgsdg', 'kgfgksgksdfgskfgjsd', 0),
(6, 12, 'sjdhfkjsfks', 'kjshdjkfskjfs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbdpublicity`
--

CREATE TABLE `dbdpublicity` (
  `id` int(11) NOT NULL,
  `mid` int(10) NOT NULL,
  `task` text NOT NULL,
  `description` text NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbdpublicity`
--

INSERT INTO `dbdpublicity` (`id`, `mid`, `task`, `description`, `is_deleted`) VALUES
(1, 27, 'dfsdf sdfs fsdfsdfs sdfs sdfsdf sdfs sdf``', 'vcbgdgdgdfgdfgdfgd gfdgdfg dfgfdgdfgd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbhotel`
--

CREATE TABLE `dbhotel` (
  `id` int(11) NOT NULL,
  `hotel` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `r_type` varchar(20) NOT NULL,
  `r_num` text NOT NULL,
  `r_price` int(7) NOT NULL,
  `description` text NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbhotel`
--

INSERT INTO `dbhotel` (`id`, `hotel`, `email`, `tele_no`, `r_type`, `r_num`, `r_price`, `description`, `m_id`, `is_deleted`) VALUES
(1, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(2, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(3, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(4, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(5, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(6, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, 'dsfdsfsdfsdfsdfsdfsfsfs', '434dfsf', 0),
(7, 'werwrwe', 'saman@gmail.com', 716131767, 'single', 'gfadgaasdga', 50000, '', '434dfsf', 0),
(8, 'gdfgdgdgd', 'sahan@gmail.com', 716131767, 'single', 'fgfsgzdz', 12333, 'jsjkshfkjsffsd', '434dfsf', 0),
(9, 'dfsddsfsds', 'dsfs@gmail.com', 716131767, 'single', 'adasdasdasdad dasdasdad ', 23333, 'jskjdfkshjfsfj  kjfsdkj hsdkhf skdjhf ksdjhf ksf', '012', 0),
(10, 'dfsddsfsds', 'dsfs@gmail.com', 716131767, 'single', 'adasdasdasdad dasdasdad ', 23333, 'jskjdfkshjfsfj  kjfsdkj hsdkhf skdjhf ksdjhf ksf', '012', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbpublicity`
--

CREATE TABLE `dbpublicity` (
  `id` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele_no` int(10) NOT NULL,
  `ad_price` int(7) NOT NULL,
  `description` text NOT NULL,
  `m_id` varchar(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbpublicity`
--

INSERT INTO `dbpublicity` (`id`, `company`, `email`, `tele_no`, `ad_price`, `description`, `m_id`, `is_deleted`) VALUES
(1, 'asdadaa', 'gasd@gmail.com', 716131767, 1321, '.vv,xcjbvmxcbvmxvbnxvnxv', '027', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `year` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `chairman` varchar(20) NOT NULL,
  `secretary` varchar(20) NOT NULL,
  `tresurer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profile_type` varchar(10) NOT NULL,
  `ugroup` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `uindex`, `email`, `profile_type`, `ugroup`, `password`, `is_deleted`) VALUES
(1, 'sunil', '025', 'cccc@gmail.com', 'member', 'food', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(2, 'charaka', '012', 'charaka@gmail.com', 'member', 'hotel', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(4, '', '', 'charaka94prabuddha@gmail.com', 'admin', 'aa', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(5, 'sunil', '434', 'cha@gmail.com', 'member', 'bag', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(8, 'caharaka', '044', 'as@gmail.com', 'member', 'bag', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(9, 'nimal', '015', 'nimal@gmail.com', 'member', 'hotel', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(10, 'chanaka', '026', 'chanaka@gmail.com', 'member', 'food', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(11, 'nuwan', '027', 'nuwan@gmail.com', 'member', 'publicity', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(12, 'moka', '028', 'moka@gmail.com', 'member', 'publicity', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(13, 'saman', '030', 'saman@gmail.com', 'member', 'sponsorship', '8cb2237d0679ca88db6464eac60da96345513964', 0),
(14, 'sahan', '031', 'sahan@gmail.com', 'member', 'sponsorship', '8cb2237d0679ca88db6464eac60da96345513964', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `event_year` varchar(4) NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tele_no` varchar(40) NOT NULL,
  `profile_type` varchar(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`event_year`, `uindex`, `user_name`, `email`, `password`, `tele_no`, `profile_type`, `is_deleted`) VALUES
('2017', '044', 'caharaka', 'as@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '716131623', 'member', 0),
('2017', '025', 'sunil', 'cccc@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '716131623', 'menber', 0),
('2017', '011', 'charaka', 'cha@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '716131623', 'leader', 0),
('2017', '026', 'chanaka', 'chanaka@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0),
('2017', '012', 'charaka', 'charaka@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '716131623', 'member', 0),
('2017', '028', 'moka', 'moka@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0),
('2017', '015', 'nimal', 'nimal@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0),
('2017', '027', 'nuwan', 'nuwan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0),
('2017', '031', 'sahan', 'sahan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0),
('2017', '030', 'saman', 'saman@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '713161767', 'member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbag`
--

CREATE TABLE `tbag` (
  `id` int(11) NOT NULL,
  `lindex` varchar(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `assdate` date NOT NULL,
  `enddate` date NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `done` text NOT NULL,
  `situation` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbag`
--

INSERT INTO `tbag` (`id`, `lindex`, `task`, `assdate`, `enddate`, `uindex`, `done`, `situation`, `is_deleted`) VALUES
(1, '3443', 'dgdg', '2015-12-03', '2017-04-05', '044', 'Finish', 'Finish', 0),
(2, '323', 'dfgdfg', '2015-12-03', '2017-04-05', '044', 'Finish', 'Finish', 0),
(3, '4324', 'dggdg', '2015-12-03', '2017-04-05', '044', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 3> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teamleader`
--

CREATE TABLE `teamleader` (
  `evnt_year` int(11) NOT NULL,
  `leader_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tfood`
--

CREATE TABLE `tfood` (
  `id` int(11) NOT NULL,
  `lindex` varchar(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `assdate` date NOT NULL,
  `enddate` date NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `done` text NOT NULL,
  `situation` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tfood`
--

INSERT INTO `tfood` (`id`, `lindex`, `task`, `assdate`, `enddate`, `uindex`, `done`, `situation`, `is_deleted`) VALUES
(1, '424', 'sdfsdf', '2015-12-03', '2017-04-05', '026', 'Finish', 'Finish', 0),
(2, '3534534', 'fghfghfhfgh', '2015-12-03', '2017-04-05', '026', 'Finish', 'Finish', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thotel`
--

CREATE TABLE `thotel` (
  `id` int(11) NOT NULL,
  `lindex` varchar(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `assdate` date NOT NULL,
  `enddate` date NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `done` text NOT NULL,
  `situation` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `thotel`
--

INSERT INTO `thotel` (`id`, `lindex`, `task`, `assdate`, `enddate`, `uindex`, `done`, `situation`, `is_deleted`) VALUES
(1, '54465', 'yytryryt', '2015-12-03', '2017-04-05', '012', 'Finish', 'Finish', 0),
(2, '4554', 'kjkjhk', '2015-12-03', '2017-04-05', '012', 'Finish', 'Finish', 0),
(3, '34242', 'fdsfsdfsdf', '2015-12-03', '2017-04-05', '015', 'Finish', 'Finish', 0),
(4, '4353', 'sddssfdsfsdfs', '2015-12-03', '2017-04-05', '012', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 4> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0),
(5, '23', 'find hotel for members', '2015-12-03', '2017-04-05', '012', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 5> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0),
(6, '445', 'hotel find ', '2015-12-03', '2017-04-05', '012', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 6> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tpublicity`
--

CREATE TABLE `tpublicity` (
  `id` int(11) NOT NULL,
  `lindex` varchar(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `assdate` date NOT NULL,
  `enddate` date NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `done` text NOT NULL,
  `situation` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tpublicity`
--

INSERT INTO `tpublicity` (`id`, `lindex`, `task`, `assdate`, `enddate`, `uindex`, `done`, `situation`, `is_deleted`) VALUES
(1, '453', 'fjhfghfg', '2015-12-03', '2017-04-05', '027', 'Finish', 'Finish', 0),
(2, '4353', 'dfgdfgdfgd', '2015-12-03', '2017-04-05', '027', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 2> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0),
(3, '2017', 'task1 ', '2017-11-29', '2017-12-02', 'user1', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 3> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tsponsorship`
--

CREATE TABLE `tsponsorship` (
  `id` int(11) NOT NULL,
  `lindex` varchar(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `assdate` date NOT NULL,
  `enddate` date NOT NULL,
  `uindex` varchar(20) NOT NULL,
  `done` text NOT NULL,
  `situation` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tsponsorship`
--

INSERT INTO `tsponsorship` (`id`, `lindex`, `task`, `assdate`, `enddate`, `uindex`, `done`, `situation`, `is_deleted`) VALUES
(1, '45345', 'werwrwr', '2015-12-03', '2017-04-05', '030', 'Finish', 'Finish', 0),
(2, '42342', 'sdfsfs', '0000-00-00', '2017-04-05', '030', 'Finish', 'Finish', 0),
(3, '3424', 'sdfsdfsdf2', '2015-12-03', '2017-04-05', '030', '<form method=\"POST\" action=\"myTask.php\"><input type=\"hidden\" name=\"id\" value = 3> <button type=\"submit\" name=\"fsubmit\" class=\"btn btn-success submit\" style=\"margin-top: 5px; font-size: 10px;\">Complet</button></form>', 'Not Complet', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alltask`
--
ALTER TABLE `alltask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbbag`
--
ALTER TABLE `dbbag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbdbag`
--
ALTER TABLE `dbdbag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbdhotel`
--
ALTER TABLE `dbdhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbdpublicity`
--
ALTER TABLE `dbdpublicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbhotel`
--
ALTER TABLE `dbhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbpublicity`
--
ALTER TABLE `dbpublicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbag`
--
ALTER TABLE `tbag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamleader`
--
ALTER TABLE `teamleader`
  ADD PRIMARY KEY (`evnt_year`,`leader_email`);

--
-- Indexes for table `tfood`
--
ALTER TABLE `tfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thotel`
--
ALTER TABLE `thotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpublicity`
--
ALTER TABLE `tpublicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsponsorship`
--
ALTER TABLE `tsponsorship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alltask`
--
ALTER TABLE `alltask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dbbag`
--
ALTER TABLE `dbbag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbdbag`
--
ALTER TABLE `dbdbag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dbdhotel`
--
ALTER TABLE `dbdhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dbdpublicity`
--
ALTER TABLE `dbdpublicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbhotel`
--
ALTER TABLE `dbhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dbpublicity`
--
ALTER TABLE `dbpublicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbag`
--
ALTER TABLE `tbag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tfood`
--
ALTER TABLE `tfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thotel`
--
ALTER TABLE `thotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tpublicity`
--
ALTER TABLE `tpublicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tsponsorship`
--
ALTER TABLE `tsponsorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `teamleader`
--
ALTER TABLE `teamleader`
  ADD CONSTRAINT `teamleader_ibfk_1` FOREIGN KEY (`evnt_year`) REFERENCES `event` (`year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
