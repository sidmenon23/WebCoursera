-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 10:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcoursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`userID`, `progress`) VALUES
('1617701ea6bb8e', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617702e42c9d7', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770309ee0e1', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`userID`, `progress`) VALUES
('1617701c2a834b', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617701fe8ac73', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770244d8842', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617702c174717', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`userID`, `progress`) VALUES
('1617701c2a834b', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770244d8842', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617702c174717', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770309ee0e1', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770335151ea', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`userID`, `progress`) VALUES
('1617701ea6bb8e', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617701fe8ac73', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770218a0d00', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770244d8842', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('16177027b2e186', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`userID`, `progress`) VALUES
('1617701c2a834b', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('1617701fe8ac73', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770218a0d00', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770244d8842', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770335151ea', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `userID` varchar(255) NOT NULL,
  `progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`progress`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`userID`, `progress`) VALUES
('1617701ea6bb8e', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770218a0d00', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770244d8842', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('16177027b2e186', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770309ee0e1', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]'),
('161770335151ea', '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `emailID` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `html` tinyint(1) NOT NULL DEFAULT 0,
  `css` tinyint(1) NOT NULL DEFAULT 0,
  `js` tinyint(1) NOT NULL DEFAULT 0,
  `java` tinyint(1) NOT NULL DEFAULT 0,
  `python` tinyint(1) NOT NULL DEFAULT 0,
  `ajax` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `admin`, `emailID`, `fName`, `lName`, `password`, `phoneNo`, `gender`, `html`, `css`, `js`, `java`, `python`, `ajax`) VALUES
('1617701295e764', 1, 'admin@admin.admin', 'Admin', 'Admin', '$2y$12$Kbq/Bubwvbke4Cfi7F.n6.4nOmjaLlXFW0K3p9jdALXdswvwO0NAa', '1234567890', 'Male', 0, 0, 0, 0, 0, 0),
('1617701c2a834b', 0, 'matjose@g.com', 'Mathew', 'Jose', '$2y$12$.3EmjqWhkW4K87WMUf9vP.itQM3ENXv6rmBoEROmJHvli8iT0k4xm', '0987654321', 'Male', 1, 1, 1, 0, 0, 0),
('1617701ea6bb8e', 0, 'vishnu@g.com', 'Vishnu', 'Sajith', '$2y$12$PvpJNxtIb0dVrX7Is6pH.eNI4rLOrQpkRTLG6XCQKd7jnR1Ogktw6', '1234567890', 'Male', 0, 0, 0, 1, 1, 1),
('1617701fe8ac73', 0, 'sid@gmail.com', 'Sidharth', 'Menon', '$2y$12$fCYAQbHWKw9VV3/SHoB1nuSxTk8vCeV1WMa8uPJUr00JtnxmSam2a', '4567890123', 'Male', 0, 1, 1, 1, 0, 0),
('161770218a0d00', 0, 'arjun@g.com', 'Arjun ', 'Babu', '$2y$12$Uk0CZDXvteLnOitSosELlOYDYC33KWAmXw0cBSES4g7cJ5hPccOku', '1234567890', 'Male', 0, 0, 1, 1, 1, 0),
('161770244d8842', 0, 'sanaul@g.com', 'Sanaul ', 'Malik', '$2y$12$2MAdyZTmZIjhETub8pQv9efcptlplrA/W1vElQBbhoofofAxE0Qai', '1234567890', 'Male', 1, 1, 1, 0, 1, 0),
('16177027b2e186', 0, 'meenaskhi@g.com', 'Meenakshi', 'Madhu', '$2y$12$i2eXlaeneQETuJU9oLXRW./3dwC7d1KuDlNuH8Ti0ppXXjImqCOL2', '1234567890', 'Female', 0, 0, 0, 1, 1, 0),
('1617702c174717', 0, 'teres@g.com', 'Teres', 'George', '$2y$12$fr/gwiJ.IdyAmT.eRQ/YveUVy7iYiVoENMt8/4s904vSr.J2Lndt2', '1234567890', 'Female', 1, 1, 0, 0, 0, 0),
('1617702e42c9d7', 0, 'neha@g.com', 'Neha', 'Ann', '$2y$12$mVcmKlxKB9Pf08y040xcUu1Bm5L2IjF9N5Rwz9G2tKXiKRo9hP05S', '0987654321', 'Female', 0, 0, 0, 0, 0, 1),
('161770309ee0e1', 0, 'abhinav@g.com', 'Abhinav', 'Unniyattil', '$2y$12$zjsanq47E0Fs33jB65JNHep9XF0aFn/3J/.Y8VBBWOLJuEdHovivC', '5432167890', 'Male', 1, 0, 0, 0, 1, 1),
('161770335151ea', 0, 'akhil@g.com', 'Akhil', 'James', '$2y$12$KCWndsUB.X4m7YLEp99EtOwuMn2aw.fXz8BkjAhMxKd5YcIjyLzxy', '0987543216', 'Male', 1, 0, 1, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `js`
--
ALTER TABLE `js`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `emailID` (`emailID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
