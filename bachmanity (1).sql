-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 09:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bachmanity`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `lname` varchar(130) NOT NULL,
  `phone` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `lname`, `phone`, `email`, `sub`, `message`) VALUES
(2, 'Alaa', 'Barka', '54324884', 'tmakaveli643@gmail.com', 'Hello World', 'Glad to be the first guy who sent a message.'),
(5, 'post ', 'malone', '123456789', 'post@gmail.com', 'wassup', 'damn dude nice website '),
(6, 'joyner', 'lucas', '123456789', 'joyner@joyner.com', 'dude', 'listen i liked your website i will buy it from you '),
(7, 'Chaima', 'Barka', '54545454', 'chaima@gmail.com', 'hello chaima ', 'you are an idiot guy ');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `title` varchar(100) NOT NULL,
  `note` longtext NOT NULL,
  `color` varchar(30) NOT NULL,
  `important` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`title`, `note`, `color`, `important`) VALUES
('To Do', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out \r\nprint, graphic or web designs. The passage is attributed to an unknown typesetter \r\nin the 15th century who is thought to have scrambled parts of Ciceros De Finibus \r\nBonorum et Malorum for use in a', '', 0),
('Alaa Barka', 'the best code , programmer and problem solver \r\nbest future software engineer', '', 0),
('Eminem', 'Marshall Bruce Mathers III, known professionally as Eminem, is an American rapper, songwriter, and record producer. Eminem is among the best-selling music artists of all time, with estimated worldwide sales of more than 220 million records', '', 0),
('Eminem', 'Marshall Bruce Mathers III, known professionally as Eminem, is an American rapper, songwriter, and record \r\nproducer. Eminem is among the best-selling music artists of all time, with estimated worldwide sales of more than \r\n220 million records', '', 0),
('We dont talk any more !', 'sgsajldghusahgas\r\nguisfguihasuodghuoasdhgsd\r\ngsdhg;sioghjiopshgiopuashdng', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `link` varchar(100) NOT NULL,
  `decription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `price`, `link`, `decription`) VALUES
(8, 'Iphone 12', 1000, 'uploads/black.png', 'Iphone 12 Multi color in STOCK\r\nThe latest Iphone yet and the best one and not Trial Version \r\nNot beta and not any of that, its the best iphone and the best phone \r\nin the world'),
(9, 'Iphone 12', 1100, 'uploads/blue.png', 'Iphone 12 Blue version \r\nwith more storage capacity \r\nand the best phone yet and powered by ANDROID\r\n'),
(10, 'Iphone 12', 1100, 'uploads/white.png', 'Iphone 12 Multi color in STOCK (WHITE)\r\nThe latest Iphone yet and the best one and not Trial Version \r\nNot beta and not any of that, its the best iphone and the best phone \r\nin the world'),
(11, 'Nokia', 1500000, 'uploads/nokia.png', 'NOKIE 15M$ Multi color in STOCK\r\nThe latest Nokia yet and the best one and not Trial Version \r\nNot beta and not any of that, its the best Nokia and the best phone \r\nin the world'),
(12, 'OnePlus', 500, 'uploads/onep.png', 'One Phone i have nothing to say really about this phone so thats it'),
(13, 'Samsung', 2000, 'uploads/s20.png', 'Samsung Phone i have no comment about this.'),
(15, 'Slv Man', 65000, 'uploads/man_PNG6531.png', 'You can own poeple in this website\r\n'),
(16, 'RM Watch', 1500000, 'uploads/rm.png', 'RM WATCH ONE OF THE BEST WATCHES IN WORLD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `email`) VALUES
(1, 'machiavelli', 'bestdeveloper', 'tmakaveli643@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
